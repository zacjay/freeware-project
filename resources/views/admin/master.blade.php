<!doctype html>
<html class="no-js" lang="en">
@include('layout.headcss')
<body>
    <div class="main-wrapper">
    	@include('layout.header')
    	@include('admin.sidebar')
    	 <div class="content-body">
    	 	
    	 	@yield('content')

    	 </div>

    	@include('layout.footer')
    </div>