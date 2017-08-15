<!DOCTYPE html>
<html>
<head>
	<title>Market-Admin</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<header>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
			    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Market</a>
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Something">
	        </div>
	        <button type="submit" class="btn btn-default">Search</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true" data-toggle="tooltip" title="Shop"></span>&nbsp;<span class="badge">4</span></a>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</header>
<section class="container"> 
	@yield('content')
</section>
</body>
</html>