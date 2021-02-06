@extends('admin.master')
@section('content')


    <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Manage Payment <span>/ Add Payment Method</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->
            <!--Varying Modal Content Start-->
                <div class="add-edit-product-wrap col-12">

                <div class="add-edit-product-form">
                    <form method="post" action="{{url('AddMethod')}}" enctype="multipart/form-data">
                    
                    @csrf   

                        <div class="row">
                           
                            <div class="col-lg-8 col-12 mb-30">
                                <h5 class="title">Payment Method Name</h5>
                                <input class="form-control" type="text" placeholder="Method Name" name="method">
                            </div>    
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


            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">
                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Payment Method<span>/ Method List</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->
             <div class="row mbn-30">

                <!--Alert Start-->
               
                <!--Alert End-->

                <!-- Invoice List Start -->
                <div class="col-12 mb-30">
                    <div class="table-responsive">
                        <table class="table footable" data-paging="true" data-filtering="true" data-sorting="true" data-breakpoints='{ "xs": 480, "sm": 768, "md": 992, "lg": 1200, "xl": 1400 }'>

                            <!-- Table Head Start -->
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Method Name</th>

                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead><!-- Table Head End -->
                       
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>GooglePay</td>
                                    <td>C:\xampp\tmp\php6552.tmp</td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="delete button button-box button-xs button-danger" href=""><i class="zmdi zmdi-delete"></i></a>
                                            <a class="edit button button-box button-xs button-info" href=""><i class="zmdi zmdi-edit"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                
                                  
                            </tbody><!-- Table Body End -->
                            
                            
                        </table>
                    </div>
                </div><!-- Invoice List End -->

            </div>

               
@stop