<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/resources/img/logo.png">
    <title><?php echo (!empty($title) ? $title : lang('title')) ?></title>

    <script src="/resources/bower_components/webcomponentsjs/webcomponents.min.js"></script>
    <link rel="import" href="/resources/bower_components/iron-flex-layout/classes/iron-flex-layout.html">
    <style is="custom-style">
        html, body {
            @apply(--paper-font-common-base);
        }
    </style>
    <?php import('css/admin'); ?>
    <?php import('js/admin'); ?>
</head>
<body class="fullbleed vertical layout">
<template is="dom-bind" id="adminPanel">
<paper-header-panel mode="waterfall-tall" tall-class="medium-tall" on-content-scroll="hideMenu">
    <paper-toolbar class="paper-header">
        <paper-icon-button icon="home" id="btnAdminHome"></paper-icon-button>
        <div class="title"><?php echo lang('dashboard'); ?></div>
        <paper-icon-button icon="more-vert"></paper-icon-button>
        <paper-tabs class="bottom" id="adminMainMenu" on-iron-select="changeTab">
            <paper-tab url="<?php echo ($this->uri->segment(2) == 'blog' ? '' : '/admin/blog'); ?>">BLOG</paper-tab>
            <paper-tab url="<?php echo ($this->uri->segment(2) == 'category' ? '' : '/admin/category'); ?>">CATEGORY</paper-tab>
            <paper-tab url="<?php echo ($this->uri->segment(2) == 'tag' ? '' : '/admin/tag'); ?>">TAG</paper-tab>
        </paper-tabs>
    </paper-toolbar>
    <div class="content fit">
        <div style="height: 800px;"></div>