@extends('admin.master')
@section('content')

<!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">
                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Edit Profile<span></span></h3>
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
                                    <img src="assets/images/avatar/profile.jpg" class="d-none" alt="">
                                    
                                    
                                </div>
                                <div class="info">
                                    <h5></h5>
                                    <span></span>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Author Top End-->

                 <!-- Add or Edit Product Start -->
            <div class="add-edit-product-wrap col-12">

                <div class="add-edit-product-form">
                    <form action="#">

                        <h4 class="title">Edit Profile</h4>

                        <div class="row">
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Name" name="" ></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Headline" name="" ></div>
                            
                            <div class="col-12 mb-30"><textarea class="form-control" placeholder="Bio" ></textarea></div>
                           
                            
                        </div>

                        <h4 class="title">Profile Image</h4>

                        <div class="product-upload-gallery row flex-wrap">
                            <div class="col-12 mb-30">
                                
                                <input class="file-pond" type="file" multiple name="" >
                            </div>
                        </div>

                        

                        <!-- Button Group Start -->
                        <div class="row">
                            <div class="d-flex flex-wrap justify-content-end col mbn-10">
                                
                                <button class="button button-outline button-primary mb-10 ml-10 mr-0">Save</button>
                                
                                
                            </div>
                        </div><!-- Button Group End -->

                    </form>
                </div>

            </div><!-- Add or Edit Product End -->

               

              

            </div>

@stop