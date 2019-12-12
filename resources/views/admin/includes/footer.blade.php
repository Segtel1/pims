			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2019 &copy; Developed by Pistis Solutions</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="./vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
	<!-- Vector Maps JavaScript -->
    <script src="./vendors/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="./vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="./js/vectormap-data.js"></script>
	
	<!-- Calender JavaScripts -->
	<script src="./vendors/bower_components/moment/min/moment.min.js"></script>
	<script src="./vendors/jquery-ui.min.js"></script>
	<script src="./vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="./js/fullcalendar-data.js"></script>
    
	<!-- Counter Animation JavaScript -->
	<script src="./vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="./vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>
	
	<!-- Data table JavaScript -->
	<script src="./vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="./js/jquery.slimscroll.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="./js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Sparkline JavaScript -->
	<script src="./vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
	
	<script src="./vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
	<script src="./js/skills-counter-data.js"></script>
	
	<!-- Morris Charts JavaScript -->
    <script src="./vendors/bower_components/raphael/raphael.min.js"></script>
    <script src="./vendors/bower_components/morris.js/morris.min.js"></script>
    <script src="./js/morris-data.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="./vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="./vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
	<!-- Data table JavaScript -->
	<script src="./vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
		
	<!-- Gallery JavaScript -->
	<script src="./js/isotope.js"></script>
	<script src="./js/lightgallery-all.js"></script>
	<script src="./js/froogaloop2.min.js"></script>
	<script src="./js/gallery-data.js"></script>
	
	<!-- Spectragram JavaScript -->
	<script src="./js/spectragram.min.js"></script>
	
	<!-- Init JavaScript -->
	<script src="./js/init.js"></script>
	<script src="./js/widgets-data.js"></script>

	<script> 
		$(document).ready(function() {
			$('#additional-form').click(function() {
				$('#show-onclick').show();
				$('#additional-form').hide();
			});
		});

		var totals=[0,0,0];
		$(document).ready(function(){
			var $dataRows=$("#sum_table tr:not('.totalColumn, .titlerow')");
			$dataRows.each(function() {
				$(this).find('.price').each(function(i){
					totals[i]+=parseInt($(this).html());
				});
			});
			$("#sum_table td.totalCol").each(function(i){
				$(this).html(totals[i]);
			});
		});
		</script>

</body>


<!-- Mirrored from hencework.com/theme/hound/full-width-light/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Dec 2018 14:05:44 GMT -->
</html>