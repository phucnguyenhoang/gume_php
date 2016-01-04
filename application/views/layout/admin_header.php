<!DOCTYPE html>
<html lang="en">
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
        <div class="title">Gume administration</div>
        <?php if (!empty($control)) : ?>
            <?php foreach ($control as $icon => $url) : ?>
                <paper-icon-button icon="<?php echo $icon; ?>" url="<?php echo $url; ?>" onclick="goToUrl(this)"></paper-icon-button>
            <?php endforeach; ?>
        <?php endif; ?>
        <paper-menu-button horizontal-offset="-70">
            <paper-icon-button icon="more-vert" class="dropdown-trigger"></paper-icon-button>
            <paper-menu class="dropdown-content right-control">
                <paper-item url="/" target="_blank" on-tap="goToUrl">Go to website</paper-item>
                <paper-item url="/admin/logout" on-tap="goToUrl">Logout</paper-item>
            </paper-menu>
        </paper-menu-button>
        <?php
            $selectedMenu = array(
                'home' => 0,
                'blog' => 1,
                'category' => 2,
                'tag' => 3
            );
        $segment = $this->uri->segment(2);
        if (empty($segment))  $segment = 'home';
        ?>
        <paper-tabs class="bottom" id="adminMainMenu" <?php echo (isset($selectedMenu[$segment]) ? 'selected="'.$selectedMenu[$segment].'"' : ''); ?>>
            <paper-tab url="/admin" onclick="goToUrl(this)">DASHBOARD</paper-tab>
            <paper-tab url="/admin/blog" onclick="goToUrl(this)">BLOG</paper-tab>
            <paper-tab url="/admin/category" onclick="goToUrl(this)">CATEGORY</paper-tab>
            <paper-tab url="/admin/tag" onclick="goToUrl(this)">TAG</paper-tab>
        </paper-tabs>
    </paper-toolbar>
    <div class="content fit">