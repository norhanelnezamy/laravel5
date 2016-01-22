<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->   <script src="{{admin_assets}}/assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="{{admin_assets}}/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{admin_assets}}/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="{{admin_assets}}/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{admin_assets}}/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
<!--[if lt IE 9]>
<script src="{{admin_assets}}/assets/plugins/excanvas.min.js"></script>
<script src="{{admin_assets}}/assets/plugins/respond.min.js"></script>
<![endif]-->
<script src="{{admin_assets}}/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="{{admin_assets}}/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="{{admin_assets}}/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
<script src="{{admin_assets}}/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{admin_assets}}/assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
<script src="{{admin_assets}}/assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{{admin_assets}}/assets/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{admin_assets}}/assets/scripts/app.js" type="text/javascript"></script>
<script src="{{admin_assets}}/assets/scripts/login-soft.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        App.init();
        Login.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>