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
        <hot-blog
            thumb="http://img.v3.news.zdn.vn/w660/Uploaded/nutmjz/2015_12_02/12319798_10204788201299254_1637655560_n.jpg"
            src="http://news.zing.vn/Doi-chan-phi-thuong-cua-co-gai-Viet-chinh-phuc-sa-mac-post606705.html">
            <div class="title">Đôi chân phi thường của cô gái Việt chinh phục sa mạc</div>
            <div class="description">Để vượt sa mạc Atacama - nơi có độ cao 3.200 m so với mực nước biển, Vũ Phương Thanh, sinh năm 1990 đã chạy, đi bộ 85-115km/tuần, rèn đôi chân hoạt động liên tục 12 tiếng/ngày.</div>
        </hot-blog>
        <blog-menu class="blog-menu">
            <blog-menu-item url="/cong-nghe" color="blue">Cong nghe</blog-menu-item>
            <blog-menu-item url="/doi-song" color="red" active>Doi song</blog-menu-item>
            <blog-menu-item url="/giai-tri" color="green">Giai tri</blog-menu-item>
        </blog-menu>
    </div>
    <paper-header-panel main mode="waterfall">
        <paper-toolbar class="paper-header">
            <paper-icon-button icon="menu" paper-drawer-toggle></paper-icon-button>
            <div class="title"><?php echo lang('blogs'); ?></div>
            <paper-icon-button icon="more-vert" on-tap="moreAction"></paper-icon-button>
        </paper-toolbar>
        <div class="content horizontal layout start-justified wrap blog-item-box">
            <paper-card heading="Titles AND images!" class="blog-item" image="http://placehold.it/350x150">
                <div class="card-content">
                    Lorem ipsum dolor sit amet, nec ad conceptam interpretaris, mea ne solet repudiandae. Laudem nostrud ei vim. Sapientem consequuntur usu ad, vel etiam philosophia ex, ad quidam option quo. Sed sale integre pericula ei, rebum adipiscing ius ea.
                </div>
                <div class="card-actions horizontal layout">
                    <paper-icon-button icon="favorite" title="favorite" id="btnAddToFavorite1"></paper-icon-button>
                    <paper-badge label="10" for="btnAddToFavorite1"></paper-badge>
                    <paper-icon-button icon="social:public" title="share" id="btnShare1"></paper-icon-button>
                    <paper-badge label="5" for="btnShare1"></paper-badge>
                    <paper-button class="flex" link="/aa"><iron-icon icon="link"></iron-icon> Xem</paper-button>
                </div>
            </paper-card>

            <paper-card heading="Titles AND images!" class="blog-item" image="http://placehold.it/350x150">
                <div class="card-content">
                    Lorem ipsum dolor sit amet, nec ad conceptam interpretaris, mea ne solet repudiandae. Laudem nostrud ei vim. Sapientem consequuntur usu ad, vel etiam philosophia ex, ad quidam option quo. Sed sale integre pericula ei, rebum adipiscing ius ea.
                </div>
                <div class="card-actions horizontal layout">
                    <paper-icon-button icon="favorite" title="favorite" id="btnAddToFavorite2"></paper-icon-button>
                    <paper-badge label="10" for="btnAddToFavorite2"></paper-badge>
                    <paper-icon-button icon="social:public" title="share" id="btnShare2"></paper-icon-button>
                    <paper-badge label="5" for="btnShare2"></paper-badge>
                    <paper-button class="flex" link="/bbb"><iron-icon icon="link"></iron-icon> Xem</paper-button>
                </div>
            </paper-card>

            <paper-card heading="Titles AND images!" class="blog-item" image="http://placehold.it/350x150">
                <div class="card-content">
                    Lorem ipsum dolor sit amet, nec ad conceptam interpretaris, mea ne solet repudiandae. Laudem nostrud ei vim. Sapientem consequuntur usu ad, vel etiam philosophia ex, ad quidam option quo. Sed sale integre pericula ei, rebum adipiscing ius ea.
                </div>
                <div class="card-actions horizontal layout">
                    <paper-icon-button icon="favorite" title="favorite" id="btnAddToFavorite3"></paper-icon-button>
                    <paper-badge label="10" for="btnAddToFavorite3"></paper-badge>
                    <paper-icon-button icon="social:public" title="share" id="btnShare3"></paper-icon-button>
                    <paper-badge label="5" for="btnShare3"></paper-badge>
                    <paper-button class="flex"><iron-icon icon="link"></iron-icon> Xem</paper-button>
                </div>
            </paper-card>

            <paper-card heading="Titles AND images!" class="blog-item" image="http://placehold.it/350x150">
                <div class="card-content">
                    Lorem ipsum dolor sit amet, nec ad conceptam interpretaris, mea ne solet repudiandae. Laudem nostrud ei vim. Sapientem consequuntur usu ad, vel etiam philosophia ex, ad quidam option quo. Sed sale integre pericula ei, rebum adipiscing ius ea.
                </div>
                <div class="card-actions horizontal layout">
                    <paper-icon-button icon="favorite" title="favorite" id="btnAddToFavorite4"></paper-icon-button>
                    <paper-badge label="10" for="btnAddToFavorite4"></paper-badge>
                    <paper-icon-button icon="social:public" title="share" id="btnShare4"></paper-icon-button>
                    <paper-badge label="5" for="btnShare4"></paper-badge>
                    <paper-button class="flex"><iron-icon icon="link"></iron-icon> Xem</paper-button>
                </div>
            </paper-card>

            <paper-card heading="Titles AND images!" class="blog-item" image="http://placehold.it/350x150">
                <div class="card-content">
                    Lorem ipsum dolor sit amet, nec ad conceptam interpretaris, mea ne solet repudiandae. Laudem nostrud ei vim. Sapientem consequuntur usu ad, vel etiam philosophia ex, ad quidam option quo. Sed sale integre pericula ei, rebum adipiscing ius ea.
                </div>
                <div class="card-actions horizontal layout">
                    <paper-icon-button icon="favorite" title="favorite" id="btnAddToFavorite5"></paper-icon-button>
                    <paper-badge label="10" for="btnAddToFavorite5"></paper-badge>
                    <paper-icon-button icon="social:public" title="share" id="btnShare5"></paper-icon-button>
                    <paper-badge label="5" for="btnShare5"></paper-badge>
                    <paper-button class="flex"><iron-icon icon="link"></iron-icon> Xem</paper-button>
                </div>
            </paper-card>
        </div>
    </paper-header-panel>
</paper-drawer-panel>
