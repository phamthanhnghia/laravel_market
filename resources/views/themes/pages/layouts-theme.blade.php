@extends('themes.pages.library-theme')
@section('container')

<div id="wrapper">
	@include('themes.pages.navbar-theme')
	<div id="page-wrapper">
		@yield('content')
	</div>
        <!-- /#page-wrapper -->
</div>
@endsection