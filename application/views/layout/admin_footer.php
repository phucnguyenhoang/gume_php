</div>
</paper-header-panel>
<?php if (!empty($this->session->flashdata('login_success'))) : ?>
    <paper-toast class="success" id="toastLoginSuccess" text="<?php echo str_replace('{{name}}', auth('name'), lang('login_success')); ?>" opened></paper-toast>
<?php endif; ?>

<?php if (!empty($this->session->flashdata('create_blog_success'))) : ?>
    <paper-toast class="success" id="toastCreateBlogSuccess" text="Create blog successfully!" opened></paper-toast>
<?php endif; ?>
<script>
    var App = document.querySelector('#adminPanel');
    App.hideMenu = function (event) {
        var menu = document.getElementById('adminMainMenu'),
            scroller = event.detail.target;

        if(scroller.scrollTop > 0) {
            menu.style.display = 'none';
        } else {
            menu.style.display = 'initial';
        }
    };
    App.changeTab = function(event) {
        var url = event.target.selectedItem.getAttribute('url'),
            sub = event.target.selectedItem.getAttribute('sub');
        if (url !== null && url != '' && sub === null) {
            window.setTimeout(function() {
                window.location = url;
            }, 300);
        }
    };
    App.goToUrl = function(event) {
        var url = event.target.getAttribute('url'),
            target = event.target.getAttribute('target');
        console.log(event.detail, url, target);
        if (url !== null && url != '') {
            window.setTimeout(function() {
                if (target !== null && target != '') {
                    var win = window.open(url, target);
                    win.focus();
                } else {
                    window.location = url;
                }
            }, 300);
        }
    };
</script>
</template>
</body>
</html>