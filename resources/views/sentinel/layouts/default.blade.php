<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title> 
			@section('title') 
			@show 
		</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Bootstrap 3.0: Latest compiled and minified CSS -->
		<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> 
		<link rel="stylesheet" href="{{ asset('packages/rydurham/sentinel/css/bootstrap.min.css') }}">-->

		<!-- Optional theme -->
		<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css"> 
		<link rel="stylesheet" href="{{ asset('packages/rydurham/sentinel/css/bootstrap-theme.min.css') }}">-->

		<!-- Material Design fonts -->
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<!-- Bootstrap Material Design -->
		<link rel="stylesheet" href="{{ asset('packages/rydurham/sentinel/css/bootstrap-material-design.css') }}">
		<link rel="stylesheet" href="{{ asset('packages/rydurham/sentinel/css/ripples.min.css') }}">


		<style>
		@section('styles')
			body {
				padding-top: 60px;
			}
		@show
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	
	</head>

	<body>
		

		<!-- Navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="{{ route('home') }}">Sentinel</a>
	        </div>
	        <div class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
				@if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
					<!-- <li {!! (Request::is('users*') ? 'class="active"' : '') !!}><a href="{{ action('\\Sentinel\Controllers\UserController@index') }}">Users</a></span></li>
					<li {!! (Request::is('groups*') ? 'class="active"' : '') !!}><a href="{{ action('\\Sentinel\Controllers\GroupController@index') }}">Groups</a></li> -->
					<li {!! (Request::is('drivers*') ? 'class="active"' : '') !!}><a href="/drivers">Choferes</a></li>
					<li {!! (Request::is('vehicles*') ? 'class="active"' : '') !!}><a href="/vehicles">Vehículos</a></li>
					<li {!! (Request::is('assign-vehicle*') ? 'class="active"' : '') !!}><a href="/assign-vehicle">Asignar Vehículo</a></li>
					<li {!! (Request::is('clients*') ? 'class="active"' : '') !!}><a href="/clients">Clientes</a></li>
					<li {!! (Request::is('contracts*') ? 'class="active"' : '') !!}><a href="/contracts">Contratos</a></li>
				@endif
	          </ul>
	          <ul class="nav navbar-nav navbar-right">
	            @if (Sentry::check())
				<li {!! (Request::is('profile') ? 'class="active "' : '') !!}>
					<a href="{{ route('sentinel.profile.show') }}"><span class="glyphicon glyphicon-home"></span> {{ Sentry::getUser()->email }}</a>
				</li>
				<li>
					<a href="{{ route('sentinel.logout') }}">Logout</a>
				</li>
				@else
				<li {!! (Request::is('login') ? 'class="active"' : '') !!}><a href="{{ route('sentinel.login') }}">Login</a></li>
				<li {!! (Request::is('users/create') ? 'class="active"' : '') !!}><a href="{{ route('sentinel.register.form') }}">Register</a></li>
				@endif
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
		<!-- ./ navbar -->

		<!-- Container -->
		<div class="container">
			<!-- Notifications -->
			@include('Sentinel::layouts/notifications')
			<!-- ./ notifications -->

			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
		</div>

		<!-- ./ container -->

		<!-- Javascripts
		================================================== -->
		<script src="{{ asset('packages/rydurham/sentinel/js/jquery-2.1.3.min.js') }}"></script>
		<script src="{{ asset('packages/rydurham/sentinel/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('packages/rydurham/sentinel/js/restfulizer.js') }}"></script> 
		<script src="{{ asset('packages/rydurham/sentinel/js/material.js') }}"></script> 

		<!-- Thanks to Zizaco for the Restfulizer script.  http://zizaco.net  -->

		<script type="text/javascript">
			$(document).ready(function(){
				$.material.init();
			})
		</script>
	</body>
</html>
