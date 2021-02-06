@extends('admin.master')
@section('content')

<!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">
                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Profile<span></span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

             <div class="row mbn-50">

                <!--Author Top Start-->
                <div class="col-12 mb-50">
                    <div class="author-top">
                        <div class="inner">

                            <div class="author-profile">
                                <div class="image">
                                    <img src="{{url('public/assets/images/avatar/profile.jpg')}}" class="d-none" alt="">
                                    
                                    
                                </div>
                                <div class="info">
                                    <h5>Zacjay</h5>
                                    <span>FULL STACK DEVELOPER</span>
                                    <a href="{{url('EditProfile')}}" class="edit"><i class="zmdi zmdi-edit"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Author Top End-->

                
            </div><!-- Add or Edit Product End -->

               

              

            </div>

@stop