<?php
import('css/blogs/header');
import('js/blogs/header');
?>
<paper-drawer-panel>
    <div drawer class="pan-drawer">
        <paper-toolbar class="drawer-toolbar">
            <app-logo></app-logo>
        </paper-toolbar>
        <blog-search placeholder="Tim kiem"></blog-search>
        <?php if (!empty($hotBlog)) : ?>
            <hot-blog
                thumb="/resources/img/blogs/<?php echo($hotBlog->id.'/'.$hotBlog->thumb); ?>"
                src="/<?php echo ($hotBlog->category.'/'.$hotBlog->alias); ?>.html"
                tooltip="<?php echo htmlspecialchars($hotBlog->title); ?>">
                <div class="title"><?php echo htmlspecialchars($hotBlog->title); ?></div>
                <div class="description"><?php echo htmlspecialchars($hotBlog->description); ?></div>
            </hot-blog>
        <?php endif; ?>
        <?php if (count($categories) > 0) : ?>
            <blog-menu class="blog-menu">
                <?php foreach ($categories as $category) : ?>
                    <?php
                    if (isset($categoryColor[$category->alias])) {
                        $color = $categoryColor[$category->alias];
                    } else {
                        $color = $categoryColor[array_rand($categoryColor)];
                    }
                    ?>
                    <blog-menu-item
                        url="/<?php echo $category->alias; ?>"
                        color="<?php echo $color; ?>"
                        num-new=<?php echo $category->num_new; ?>
                        <?php echo ($category->alias == $this->uri->segment(1) ? 'active' : ''); ?>><?php echo $category->name; ?></blog-menu-item>
                <?php endforeach; ?>
            </blog-menu>
        <?php endif; ?>
    </div>
    <paper-header-panel main mode="waterfall">
        <paper-toolbar class="paper-header">
            <paper-icon-button icon="menu" paper-drawer-toggle></paper-icon-button>
            <div class="title"><?php echo lang('blogs'); ?></div>
            <paper-icon-button icon="more-vert" on-tap="moreAction"></paper-icon-button>
        </paper-toolbar>
        <div class="content horizontal layout start-justified wrap blog-item-box">
            <?php if (count($blogs) > 0) : ?>
                <?php foreach ($blogs as $blog) : ?>
                    <?php if (!empty($hotBlog) && $hotBlog->id == $blog->id) continue; ?>
                    <paper-card heading="<?php echo $blog->title; ?>" class="blog-item" image="/resources/img/blogs/<?php echo($blog->id.'/'.$blog->thumb); ?>">
                        <div class="card-content">
                            <?php echo $blog->description; ?>
                        </div>
                        <div class="card-actions horizontal layout">
                            <paper-icon-button icon="favorite" title="favorite" id="btnAddToFavorite<?php echo $blog->id; ?>"></paper-icon-button>
                            <paper-badge label="10" for="btnAddToFavorite<?php echo $blog->id; ?>"></paper-badge>
                            <paper-icon-button icon="social:public" title="share" id="btnShare<?php echo $blog->id; ?>"></paper-icon-button>
                            <paper-badge label="5" for="btnShare<?php echo $blog->id; ?>"></paper-badge>
                            <paper-button class="flex" link="/<?php echo ($blog->category.'/'.$blog->alias); ?>.html"><iron-icon icon="link"></iron-icon> Xem</paper-button>
                        </div>
                    </paper-card>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </paper-header-panel>
</paper-drawer-panel>
