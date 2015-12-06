<?php
import('css/blogs/header');
?>
<paper-drawer-panel>
    <div drawer class="pan-drawer">
        <paper-toolbar class="drawer-toolbar">
            <app-logo></app-logo>
        </paper-toolbar>
        <blog-search placeholder="Tim kiem"></blog-search>
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
