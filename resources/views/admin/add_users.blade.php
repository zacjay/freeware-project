@extends('admin.master')
@section('content')

	<!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">
                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Manage User's<span>/Add User</span></h3>
                    </div>
                </div><!-- Page Heading End -->


            </div><!-- Page Headings End -->

            <div class="add-edit-product-wrap col-12">

                <div class="add-edit-product-form">
                    <form method="post" action="{{url('AddUsers')}}" enctype="multipart/form-data">
                    
                    @csrf    

                        <div class="row">
                            <div class="col-lg-8 col-12 mb-30">
                            	<h5 class="title">Role</h5>
                            	<select class="form-control" name="role">
                                                <option>Choose</option>
                                                <option>Super Market</option>
                                                <option>NGO</option>
                                </select>
                            </div>



                            <div class="col-lg-8 col-12 mb-30">
                            	<h5 class="title">Username</h5>
                            	<input class="form-control" type="text" placeholder="Username" name="username">
                            </div>

                            <div class="col-lg-8 col-12 mb-30">
                            	<h5 class="title">Email</h5>
                            	<input class="form-control" type="text" placeholder="Email" name="email">
                            </div>

                            <div class="col-lg-8 col-12 mb-30">
                            	<h5 class="title">Password</h5>
                            	<input class="form-control" type="text" placeholder="Password" name="password">
                            </div>
                            <!-- <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Mobile" name="mobile"></div>
                            <div class="col-lg-6 col-12 mb-30"><input class="form-control" type="text" placeholder="Password*" name="password"></div> -->
                               
                        </div>
                         <h4 class="title">Profile Image</h4>
                        <div class="product-upload-gallery row flex-wrap">
                            <div class="col-12 mb-30">
                                <input class="file-pond" type="file" multiple name="image">
                            </div>
                        </div>
                        <!-- Button Group Start -->
                        <div class="row">
                            <div class="d-flex flex-wrap justify-content-end col mbn-10">
                                <button class="button button-outline button-primary mb-10 ml-10 mr-0" type="submit">Save</button>
                            </div>
                        </div><!-- Button Group End -->

                    </form>
                </div>

            </div>

@stop