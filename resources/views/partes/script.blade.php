<!--   Core JS Files   -->
<script src="{{asset('js/core/jquery.3.2.1.min.js')}}"></script>
	<script src="{{asset('js/core/popper.min.js')}}"></script>
	<script src="{{asset('js/core/bootstrap.min.js')}}"></script>
	<!-- jQuery UI -->
	<script src="{{asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
	<!-- jQuery Sparkline -->
	<script src="{{asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
	<!-- Atlantis JS -->
    <script src="{{asset('js/atlantis.min.js')}}"></script>
    <script src="{{asset('js/plugin/parsley/parsley.min.js')}}"></script>

    <script src="{{asset('js/plugin/parsley/i18n/es.js')}}"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="{{asset('js/setting-demo.js')}}"></script>
	<script src="{{ asset('plugins/sweet-alert2/sweetalert2.min.js') }}"></script>

	<script src="{{ asset('js/plugin/datatables/datatables.min.js')}}"></script>
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});


			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
