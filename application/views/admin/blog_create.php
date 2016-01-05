<div id="panBlogManage">
    <div class="content">
        <p class="pan-title">Blog create</p>
        <form id="frmBlogCreate" action="/blogs/store" method="post">
            <div class="pan-thumb layout horizontal" id="thumbReview">
                <paper-icon-button icon="perm-media" class="self-center btn-select-image" onclick="selectImage()"></paper-icon-button>
                <input type="file" style="display: none" name="thumb" accept="image/*" id="hidFile" onchange="previewImage(this)">
            </div>
            <paper-input name="title" id="txtTitle" label="Title" char-counter maxlength="250" required></paper-input>
            <paper-input name="alias" id="txtAlias" label="Alias" char-counter maxlength="250" required></paper-input>
            <paper-textarea id="txtDescription" label="Description"  char-counter maxlength="250" required rows="2" value="{{description}}"></paper-textarea>
            <textarea name="description" style="display: none">{{description}}</textarea>
            <paper-input name="tag" id="txtTag" label="Tags" char-counter maxlength="200"></paper-input>
            <paper-dropdown-menu label="Category" id="cboCategory" class="drd-category" required>
                <paper-menu class="dropdown-content" attr-for-selected="value" selected="{{category}}">
                    <paper-item value="1">Croissant</paper-item>
                    <paper-item value="2">Donut</paper-item>
                    <paper-item value="3">Financier</paper-item>
                    <paper-item value="4">Madeleine</paper-item>
                </paper-menu>
            </paper-dropdown-menu>
            <input type="hidden" name="category" value="{{category}}">
            <paper-checkbox checked active="{{isPublish}}" class="chk-publish">Is publish</paper-checkbox>
            <input type="hidden" name="is_publish" value="{{isPublish}}">
            <paper-textarea id="txtContent" label="Content"  char-counter required rows="15" value="{{txtContent}}"></paper-textarea>
            <textarea name="content" style="display: none">{{txtContent}}</textarea>
            <div class="frm-control">
                <paper-button raised onclick="goToUrl(this)" url="/admin/blog">Cancel</paper-button>
                <paper-button raised class="btn-primary" onclick="createBlog()">Save</paper-button>
            </div>
        </form>
    </div>
    <paper-toast id="msgImageRequired" class="error" text="Please select image!"></paper-toast>
    <paper-toast id="msgErrorOccur" class="error" text="An error occur, please check and fix it!"></paper-toast>
</div>