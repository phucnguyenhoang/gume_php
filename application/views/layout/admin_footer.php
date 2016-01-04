</div>
</paper-header-panel>
<?php if (!empty($this->session->flashdata('login_success'))) : ?>
    <paper-toast class="success" id="toastLoginSuccess" text="<?php echo str_replace('{{name}}', auth('name'), lang('login_success')); ?>" opened></paper-toast>
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
        var url = event.target.selectedItem.getAttribute('url');
        if (url != '') {
            window.location = url;
        }
    };
</script>
</template>
</body>
</html>