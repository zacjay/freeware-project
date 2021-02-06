<!doctype html>
<html class="no-js" lang="en">
@include('layout1.headcss')
<body>
    <div class="main-wrapper">
    	@include('layout1.header')
    	@include('market.sidebar')
    	 <div class="content-body">
    	 	
    	 	@yield('content')

    	 </div>

    	@include('layout1.footer')
    </div>