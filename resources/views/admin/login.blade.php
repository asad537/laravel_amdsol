<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>AMD SOl Admin </title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="{{ asset('admin_assets/favicon.ico') }}" type="image/x-icon">
		
		<!-- Toggles CSS -->
		<link href="{{ asset('admin_assets/asset/vendors/jquery-toggles/css/toggles.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('admin_assets/asset/vendors/jquery-toggles/css/themes/toggles-light.css') }}" rel="stylesheet" type="text/css">
		
		<!-- Custom CSS -->
		<link href="{{ asset('admin_assets/asset/dist/css/style.css') }}" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!-- Preloader -->
		<div class="preloader-it">
			<div class="loader-pendulums"></div>
		</div>
		<!-- /Preloader -->
		
		<!-- HK Wrapper -->
		<div class="hk-wrapper">
			
			<!-- Main Content -->
			<div class="hk-pg-wrapper hk-auth-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-12 pa-0">
							<div class="auth-form-wrap pt-xl-0 pt-70">
								<div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
                                    @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif
                                    @if(session('error'))
                                        <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
									<form method ="POST" action="{{ url('signin') }}"> 
                                        @csrf
										<h1 class="display-4 text-center mb-10">Welcome Back :)</h1>
										<p class="text-center mb-30">Sign in to your account and enjoy unlimited perks.</p> 
										<div class="form-group">
											<input type="text" class="form-control" placeholder="username" name="username" required/>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input type="password" name="password" class="form-control" placeholder="Password" required/>
											</div>
										</div>
										<button class="btn btn-primary btn-block" type="submit">Login</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /HK Wrapper -->
		
		<!-- JavaScript -->
		<!-- jQuery -->
		<script src="{{ asset('admin_assets/asset/vendors/jquery/dist/jquery.min.js') }}"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="{{ asset('admin_assets/asset/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
		<script src="{{ asset('admin_assets/asset/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
		<!-- Slimscroll JavaScript -->
		<script src="{{ asset('admin_assets/asset/dist/js/jquery.slimscroll.js') }}"></script>
		<!-- Fancy Dropdown JS -->
		<script src="{{ asset('admin_assets/asset/dist/js/dropdown-bootstrap-extended.js') }}"></script>
		<!-- FeatherIcons JavaScript -->
		<script src="{{ asset('admin_assets/asset/dist/js/feather.min.js') }}"></script>
		<!-- Init JavaScript -->
		<script src="{{ asset('admin_assets/asset/dist/js/init.js') }}"></script>
	</body>
</html>
