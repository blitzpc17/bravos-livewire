<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Bravo's | Iniciar sesion</title>
		<meta name="description" content="Jetson is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Jetson Admin, Jetsonadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="{{asset('backend/favicon.ico')}}" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="{{asset('backend/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
		
		
		
		<!-- Custom CSS -->
		<link href="{{asset('backend/dist/css/style.css')}}" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="{{asset('backend/dist/img/logo.png')}}" alt="brand"/>
						<span class="brand-text">Bravo's</span>
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Unete a nosotros</span>
					<a class="inline-block btn btn-info  btn-rounded btn-outline" href="signup.html">Aqui</a>
				</div>
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Bienvenido a Bravo's</h3>
											<h6 class="text-center nonecase-font txt-grey">Subete con nosotros!</h6>
										</div>	
										<div class="form-wrap">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Corre electronico</label>
													<input type="email" name="email" class="form-control" required="" id="exampleInputEmail_2" placeholder="Ingrese su correo">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Contrasena</label>
													<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">Olvido su contrasena?</a>
													<div class="clearfix"></div>
													<input type="password" name="password" class="form-control" required="" id="exampleInputpwd_2" placeholder="Ingrese su contrasena">
												</div>
												
												<div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2"  type="checkbox">
														<label for="checkbox_2"> Mantenerme conectado</label>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-info  btn-rounded">Iniciar sesion</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="{{asset('backend/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="{{asset('backend/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('backend/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="{{asset('backend/dist/js/jquery.slimscroll.js')}}"></script>
		
		<!-- Init JavaScript -->
		<script src="{{asset('backend/dist/js/init.js')}}"></script>
	</body>
</html>
