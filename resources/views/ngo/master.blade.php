<!doctype html>
<html class="no-js" lang="en">
@include('layout2.headcss')
<body>
    <div class="main-wrapper">
    	@include('layout2.header')
    	@include('ngo.sidebar')
    	 <div class="content-body">
    	 	
    	 	@yield('content')

    	 </div>
`					
    	@include('layout2.footer')
    </div>