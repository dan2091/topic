<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	
<script src="/assets/js/bundle.js"></script>
<script src="/assets/js/theme/default.js"></script>
<script src="/assets/js/apps.min.js"></script>
<!--Datatables-->
<script src="/assets/plugins/datatables/js/jquery.dataTables.js"></script>
<script src="/assets/plugins/datatables/js/dataTables.bootstrap4.js"></script>
<script src="/assets/plugins/datatables/js/buttons/dataTables.buttons.js"></script>
<script src="/assets/plugins/datatables/js/buttons/buttons.bootstrap4.js"></script>
<script src="/assets/plugins/datatables/js/buttons/buttons.flash.js"></script>
<script src="/assets/plugins/datatables/js/buttons/buttons.html5.js"></script>
<script src="/assets/plugins/datatables/js/buttons/buttons.print.js"></script>
<script src="/assets/plugins/datatables/js/responsive/dataTables.responsive.js"></script>
<script src="/assets/plugins/datatables/js/responsive/responsive.bootstrap4.js"></script>
<script src="/assets/js/demo/table-manage-buttons.demo.js"></script>
<!--\. Datatables-->
<!--Alertas-->
<script src="/assets/plugins/gritter/js/jquery.gritter.js"></script>
<script src="/assets/plugins/bootstrap-sweetalert/sweetalert.min.js"></script>
<script src="/assets/js/demo/ui-modal-notification.demo.min.js"></script>
<!--\. Alertas-->
<script>
	$(document).ready(function() {
		App.init();
		Notification.init();
	});
</script>

@stack('scripts')