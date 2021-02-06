@extends('admin.master')
@section('content')

<!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">
                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Password Change<span></span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="add-edit-product-wrap col-12">

                <div class="add-edit-product-form">
                    <form action="#">


                        <div class="row">
                        	<div class="col-lg-8 col-12 mb-30">
                        	                            	<h5 class="title">Old Password</h5>

                            <div class="col-lg-8 col-12 mb-30"><input class="form-control" type="text" placeholder="Old Password" name="old" ></div>
                        </div>
                        <div class="col-lg-8 col-12 mb-30">
                         	                            	<h5 class="title">New Password</h5>

                            <div class="col-lg-8 col-12 mb-30"><input class="form-control" type="text" placeholder="New Password" name="new" ></div>
                        </div>
                        <div class="col-lg-8 col-12 mb-30">
                                                        	<h5 class="title">Confirm Password</h5>

                             <div class="col-lg-8 col-12 mb-30"><input class="form-control" type="text" placeholder="Confirm Password" name="confirm" ></div>
                         </div>
                            
                           
                            
                        </div>

                        

                        

                        <!-- Button Group Start -->
                        <div class="row">
                            <div class="d-flex flex-wrap justify-content-end col mbn-10">
                                
                                <button class="button button-outline button-primary mb-10 ml-10 mr-0">Change Password</button>
                                
                                
                            </div>
                        </div><!-- Button Group End -->

                    </form>
                </div>

            </div><!-- Add or Edit Product End -->


@stop