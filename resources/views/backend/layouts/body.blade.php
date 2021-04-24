<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>@yield('title')</title>
	<meta name="description" content="Jetson is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Jetson Admin, Jetsonadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('backend/favicon.ico')}}">
	<link rel="icon" href="{{asset('backend/favicon.ico')}}" type="image/x-icon">
	
	<!-- Data table CSS -->
	<link href="{{asset('backend/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('backend/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
		
	<!-- Custom CSS -->
	<link href="{{asset('backend/dist/css/style.css')}}" rel="stylesheet" type="text/css">
        @stack('css')
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-6-active pimary-color-yellow">
		<!-- Top Menu Items -->
		@include('backend.layouts.menu_top')
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		@include('backend.layouts.menu_left')
		<!-- /Left Sidebar Menu -->
		
		
        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
			@section('contenido')
			@show					
			</div>			
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>{{date('Y')}} &copy; Somos Bravo's!</p>
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
    <script src="{{asset('backend/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('backend/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
	<!-- Data table JavaScript -->
	<script src="{{asset('backend/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="{{asset('backend/dist/js/jquery.slimscroll.js')}}"></script>
	
	<!-- simpleWeather JavaScript -->
	<!--<script src="{{asset('backend/vendors/bower_components/moment/min/moment.min.js')}}"></script>
	<script src="{{asset('backend/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
	<script src="{{asset('backend/dist/js/simpleweather-data.js')}}"></script>
	-->
	<!-- EChartJS JavaScript -->
	<!--<script src="{{asset('backend/vendors/bower_components/echarts/dist/echarts-en.min.js')}}"></script>
	<script src="{{asset('backend/vendors/echarts-liquidfill.min.js')}}"></script>
	-->
	<!-- Progressbar Animation JavaScript -->
	<!--<script src="{{asset('backend/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('backend/vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>
	-->
	<!-- Fancy Dropdown JS -->
	<script src="{{asset('backend/dist/js/dropdown-bootstrap-extended.js')}}"></script>
	
	<!-- Sparkline JavaScript -->
	<script src="{{asset('backend/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>
	
	<!-- Owl JavaScript -->
	<!--<script src="{{asset('backend/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
	-->
	<!-- Toast JavaScript -->
	<!--<script src="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>-->
	
	<!-- Piety JavaScript -->
	<!--<script src="vendors/bower_components/peity/jquery.peity.min.js')}}"></script>
	<script src="{{asset('backend/dist/js/peity-data.js')}}"></script>-->
	
	<!-- Switchery JavaScript -->
	<script src="{{asset('backend/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
	
	<!-- Init JavaScript -->
	<script src="{{asset('backend/dist/js/init.js')}}"></script>
	<!--<script src="{{asset('backend/dist/js/dashboard6-data.js')}}"></script>-->

    @stack('js')
</body>

</html>
