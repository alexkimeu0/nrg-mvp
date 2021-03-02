<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NRG - @yield('title')</title>
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
	<link
		rel="stylesheet"
		href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
	/>
	<link rel="shortcut icon" href="https://nrg.radio/wp-content/uploads/2019/06/MVPs-LOGOS-02.png" type="image/vnd.microsoft.icon" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" >
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}" >
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>NRG</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" onclick="event.preventDefault();
						document.getElementById('logout-form').submit();" href="{{ route('logout') }}">
						<em class="fas fa-sign-out-alt"></em><span class="label label-info"></span>
					</a>
						
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="{{ asset('assets/images/user.png')}}" class="img-responsive img-circle"  alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>

		<ul class="nav menu">
			<li><a href="/dashboard"><em class="fas fa-home">&nbsp;</em> Dashboard</a></li>
			<li><a href="/u-applications"><em class="fas fa-briefcase">&nbsp;</em> Applications</a></li>
			<li><a href=""><em class="fa fa-newspaper">&nbsp;</em> News</a></li>
			<li><a href=""><em class="fa fa-chart-line">&nbsp;</em> Activities</a></li>
			<li><a href=""><em class="fas fa-users">&nbsp;</em> Team</a></li>
		</ul>

		<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
			@csrf
		</form>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row" style="margin-bottom: 2rem;">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="panel panel-container" style="padding: 3rem;">
			@yield('content')
		</div>
		
	</div>	<!--/.main-->
	
	<script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>
	<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
		
</body>
</html>