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
</head>
<body class="fullbleed vertical layout">