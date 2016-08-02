<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    @if(empty($pageName))
        <title>{{ $_ENV['APP_NAME'] }}</title>
    @else
        <title>{{ $_ENV['APP_NAME'] }} - {{ $pageName }}</title>
    @endif
    <meta name="description" content="">
    <meta name="author" content="Jason Swint <cyphrix.2015@gmail.com>">

    @yield('stylesheets')
    @yield('headscripts')

    <!-- load jQuery -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>

    <!-- load twitter bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<!-- syntax highlighting -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/prism.css') }}">
	<script src="{{ asset('js/prism.js') }}"></script>

	<!-- custom CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/base.css') }}">
	@yield('custom-css')
</head>

<body>
    <nav class="navbar navbar-inverse" role="navigation">
    	<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
    			<span class="sr-only">Toggle navigation</span>
    			<span class="icon-bar"></span>
    			<span class="icon-bar"></span>
    			<span class="icon-bar"></span>
    		</button>
    		<a class="navbar-brand" href="{{ url('/') }}">{{ $_ENV['APP_SLUG'] }}</a>
    	</div>

    	<!-- Collect the nav links, forms, and other content for toggling -->
    	<div class="collapse navbar-collapse navbar-ex1-collapse">
    		<ul class="nav navbar-nav">
    			<!--
				<li><a href="#">New Posts</a></li>
    			<li><a href="#">Popular Posts</a></li>
    			-->
    		</ul>

    		<ul class="nav navbar-nav navbar-right">
				<!--
    			<li><a href="/login">Login</a></li>
    			-->
    		</ul>
    	</div><!-- /.navbar-collapse -->
    </nav>
    @yield('content')

    @yield('bodyscripts')
</body>
</html>