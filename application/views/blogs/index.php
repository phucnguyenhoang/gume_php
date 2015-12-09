<?php
import('css/blogs/header');
?>
<paper-drawer-panel>
    <div drawer class="pan-drawer">
        <paper-toolbar class="drawer-toolbar">
            <app-logo></app-logo>
        </paper-toolbar>
        <blog-search placeholder="Tim kiem"></blog-search>
        <hot-blog
            thumb="http://img.v3.news.zdn.vn/w660/Uploaded/nutmjz/2015_12_02/12319798_10204788201299254_1637655560_n.jpg"
            src="http://news.zing.vn/Doi-chan-phi-thuong-cua-co-gai-Viet-chinh-phuc-sa-mac-post606705.html">
            <div class="title">Đôi chân phi thường của cô gái Việt chinh phục sa mạc</div>
            <div class="description">Để vượt sa mạc Atacama - nơi có độ cao 3.200 m so với mực nước biển, Vũ Phương Thanh, sinh năm 1990 đã chạy, đi bộ 85-115km/tuần, rèn đôi chân hoạt động liên tục 12 tiếng/ngày.</div>
        </hot-blog>
        <blog-menu class="blog-menu">
            <blog-menu-item url="/cong-nghe" color="blue">Cong nghe</blog-menu-item>
            <blog-menu-item url="/doi-song" color="red">Doi song</blog-menu-item>
            <blog-menu-item url="/giai-tri" color="green">Giai tri</blog-menu-item>
        </blog-menu>
    </div>
    <paper-header-panel main mode="waterfall">
        <paper-toolbar class="paper-header">
            <paper-icon-button icon="menu" paper-drawer-toggle></paper-icon-button>
            <div class="title"><?php echo lang('blogs'); ?></div>
            <paper-icon-button icon="more-vert" on-tap="moreAction"></paper-icon-button>
        </paper-toolbar>
        <div class="content fit">
            Main content
        </div>
    </paper-header-panel>
</paper-drawer-panel>
