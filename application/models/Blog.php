<?php
class Blog extends CI_Model {

    private $numViewIsNew = 20;

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function hot($num = 1) {
        $this->db->select('blogs.id, blogs.alias, title, description, blogs.thumb, categories.alias as category');
        $this->db->from('blogs');
        $this->db->join('categories', 'blogs.category_id = categories.id');
        $this->db->where('blogs.is_publish', true);
        $this->db->where('categories.is_publish', true);
        $this->db->where('blogs.deleted_at IS NULL', null, false);
        $this->db->where('categories.deleted_at IS NULL', null, false);
        $this->db->order_by('num_view', 'desc');
        if ($num == 1) {
            $this->db->limit(1);
        } else {
            $this->db->limit(1, $num - 1);
        }

        $query = $this->db->get();

        return $query->row();
    }

    public function all($isPublish = null) {
        $this->db->select('blogs.id, blogs.alias, title, description, blogs.thumb, categories.alias as category');
        $this->db->from('blogs');
        $this->db->join('categories', 'blogs.category_id = categories.id');
        if ($isPublish !== null) {
            $this->db->where('blogs.is_publish', $isPublish);
            $this->db->where('categories.is_publish', $isPublish);
        }
        $this->db->where('blogs.deleted_at IS NULL', null, false);
        $this->db->where('categories.deleted_at IS NULL', null, false);
        $this->db->order_by('blogs.created_at', 'desc');
        $this->db->order_by('num_view', 'desc');

        $query = $this->db->get();

        return $query->result();
    }

    public function getByCategory($alias, $isPublish = null) {
        $this->db->select('blogs.id, blogs.alias, title, description, blogs.thumb, categories.alias as category');
        $this->db->from('blogs');
        $this->db->join('categories', 'blogs.category_id = categories.id');
        if ($isPublish !== null) {
            $this->db->where('blogs.is_publish', $isPublish);
            $this->db->where('categories.is_publish', $isPublish);
        }
        $this->db->where('categories.alias', $alias);
        $this->db->where('blogs.deleted_at IS NULL', null, false);
        $this->db->where('categories.deleted_at IS NULL', null, false);
        $this->db->order_by('blogs.created_at', 'desc');
        $this->db->order_by('num_view', 'desc');

        $query = $this->db->get();

        return $query->result();
    }

    public function countNewByCategory($id) {
        $this->db->from('blogs');
        $this->db->where('blogs.category_id', $id);
        $this->db->where('blogs.num_view <=', $this->numViewIsNew);
        $this->db->where('blogs.deleted_at IS NULL', null, false);

        return $this->db->count_all_results();
    }

    public function createBlog($data) {
        $this->db->trans_begin();
        if (!empty($data['is_publish']) && $data['is_publish'] == 'true') {
            $data['is_publish'] = 1;
        } else {
            $data['is_publish'] = 0;
        }
        $data['num_view'] = 0;
        $curr = date('Y-m-d H:i:s');
        $data['created_at'] = $curr;
        $data['updated_at'] = $curr;

        $tags = $data['tag'];
        unset($data['tag']);

        if ($this->db->insert('blogs', $data)) {
            $blogId = $this->db->insert_id();
            if (!empty($tags)){
                $tags = explode(',', $tags);
                $alias = array();
                $newTags = array();
                $tagIds = array();
                foreach ($tags as $value) {
                    $value = trim($value);
                    $key = strtolower(str_replace(' ', '-', $value));
                    $newTags[$key] = $value;
                    array_push($alias, $key);
                }

                $this->db->from('tags');
                $this->db->where_in('alias', $alias);
                $this->db->where('is_publish', true);
                $this->db->where('deleted_at IS NULL', null, false);
                $query = $this->db->get();

                $oldTags = $query->result();
                if (count($oldTags) > 0) {
                    foreach ($oldTags as $tag) {
                        array_push($tagIds, $tag->id);
                        if (isset($newTags[$tag->alias])) unset($newTags[$tag->alias]);
                    }
                }

                if (!empty($newTags)) {
                    $tagData = array();
                    foreach ($newTags as $key => $value) {
                        $tmp = array(
                            'name' => $value,
                            'alias' => $key,
                            'is_publish' => 1,
                            'created_at' => $curr,
                            'updated_at' => $curr
                        );
                        array_push($tagData, $tmp);
                    }
                    if ($this->db->insert_batch('tags', $tagData)) {
                        $lastId = $this->db->insert_id();
                        $numRow = $this->db->affected_rows();
                        for ($i = $lastId; $i < $lastId + $numRow; $i++) {
                            array_push($tagIds, $i);
                        }
                    } else {
                        $this->db->trans_rollback();
                        return false;
                    }
                }
                if (!empty($tagIds)) {
                    $blogTag = array();
                    foreach ($tagIds as $tagId) {
                        $tmp = array(
                            'blog_id' => $blogId,
                            'tag_id' => $tagId
                        );
                        array_push($blogTag, $tmp);
                    }

                    if (!$this->db->insert_batch('blog_tags', $blogTag)) {
                        $this->db->trans_rollback();
                        return false;
                    }
                }
            }
            $this->db->trans_commit();
            return $blogId;
        }

        $this->db->trans_rollback();
        return false;
    }

    private function utf8convert($str) {
        if(!$str) return false;
        $utf8 = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd'=>'đ|Đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        foreach($utf8 as $ascii=>$uni) $str = preg_replace("/($uni)/i",$ascii,$str);
        return $str;
    }
}