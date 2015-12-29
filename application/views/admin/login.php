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
    <link rel="import" href="/resources/bower_components/paper-styles/paper-styles.html">
    <link rel="import" href="/resources/bower_components/paper-styles/paper-styles-classes.html">
    <link rel="import" href="/resources/bower_components/paper-card/paper-card.html">
    <link rel="import" href="/resources/bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="/resources/bower_components/paper-button/paper-button.html">
    <link rel="import" href="/resources/bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="/resources/bower_components/paper-input/paper-input.html">
    <link rel="import" href="/resources/bower_components/paper-toast/paper-toast.html">
    <style is="custom-style">
        html, body {
            @apply(--paper-font-common-base);
            background-color: var(--paper-grey-50);
        }

        .logo-login {
            display: block;
            width: 120px;
            height: auto;
            margin: 50px auto 20px auto;
        }

        paper-card {
            --paper-card-header-color: var(--paper-pink-500);
            display: block;
            margin: auto;
        }

        paper-icon-button.clearInput {
            color: var(--paper-red-300);
            --paper-icon-button-ink-color: var(--paper-red-a100);
            width: 23px; /* 15px + 2*4px for padding */
            height: 23px;
            padding: 0px 4px;
        }

        paper-toast.error {
            --paper-toast-background-color: var(--paper-red-700);
        }

        @media (max-width: 768px) {
            paper-card {
                width: 90%;
            }
        }
        @media (min-width: 768px) and (max-width: 992px) {
            paper-card {
                width: 70%;
            }
        }
        @media (min-width: 992px) and (max-width: 1200px) {
            paper-card {
                width: 45%;
            }
        }
        @media (min-width: 1200px) {
            paper-card {
                width: 30%;
            }
        }
    </style>
</head>
<body class="fullbleed fit layout">
    <img src="/resources/img/full-logo.png" class="logo-login">
    <paper-card heading="<?php echo lang('login_title') ?>" elevation="3">
        <div class="card-content">
            <form method="post" action="/admin/auth" accept-charset="utf-8" id="frmLogin">
                <paper-input class="short" label="<?php echo lang('email'); ?>" id="txtEmail" type="email" name="email" required auto-validate error-message="<?php echo lang('email_required'); ?>" char-counter maxlength="250" autofocus>
                    <iron-icon icon="mail" prefix></iron-icon>
                    <paper-icon-button class="clearInput" suffix onclick="clearInput()" icon="clear" alt="clear" title="clear"></paper-icon-button>
                </paper-input>

                <paper-input class="short" label="<?php echo lang('password'); ?>" id="txtPassword" type="password" name="password" required auto-validate error-message="<?php echo lang('password_required'); ?>" char-counter maxlength="100">
                    <iron-icon icon="lock" prefix></iron-icon>
                </paper-input>
            </form>
        </div>
        <div class="card-actions">
            <paper-button onclick="cancelLogin()"><?php echo lang('cancel'); ?></paper-button>
            <paper-button onclick="login()"><iron-icon icon="send"></iron-icon> <?php echo lang('login'); ?></paper-button>
        </div>
    </paper-card>
    <paper-toast class="error" id="toastEmailPasswordRequired" text="<?php echo lang('please_input_email_password'); ?>"></paper-toast>
    <?php if (!empty($this->session->flashdata('login_fail'))) : ?>
        <paper-toast class="error" id="toastLoginFail" text="<?php echo lang('email_password_incorrect'); ?>" opened></paper-toast>
    <?php endif; ?>

    <script>
        function clearInput() {
            document.getElementById('txtEmail').value = '';
        }
        function login() {
            var txtEmail = document.getElementById('txtEmail'),
                txtPassword = document.getElementById('txtPassword');
            if (!txtEmail.validate() || !txtPassword.validate()) {
                document.getElementById('toastEmailPasswordRequired').open();
                return false;
            }

            document.getElementById('frmLogin').submit();
        }
        function cancelLogin() {
            window.location = '/';
        }
    </script>
</body>