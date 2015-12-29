</div>
</paper-header-panel>
<?php if (!empty($this->session->flashdata('login_success'))) : ?>
    <paper-toast class="success" id="toastLoginSuccess" text="<?php echo str_replace('{{name}}', auth('name'), lang('login_success')); ?>" opened></paper-toast>
<?php endif; ?>
</body>
</html>