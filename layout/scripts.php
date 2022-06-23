<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>

<script>
	$(document).ready(function() {
		$('#Transaction-History').DataTable({
			lengthMenu: [
				[6, 10, 20, -1],
				[6, 10, 20, 'Todos']
			]
		});
	});
</script>
<script src="assets/js/index.js"></script>
<script src="assets/js/inputmask.min.js"></script>
<!--app JS-->
<script>
	new PerfectScrollbar('.product-list');
	new PerfectScrollbar('.customers-list');
</script>
<script src="assets/js/app.js"></script>
<!-- custom -->
<script defer src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script defer src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script defer src="assets/js/my_app.js"></script>
</body>

</html>