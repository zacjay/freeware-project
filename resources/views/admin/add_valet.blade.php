@extends('admin.master')
@section('content')


	<!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">
                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Manage Delivery<span> /Add Valet</span></h3>
                    </div>
                </div><!-- Page Heading End -->



            </div><!-- Page Headings End -->

            <div class="add-edit-product-wrap col-12">

                <div class="add-edit-product-form">
                    <form method="post" action="{{url('AddValet')}}" enctype="multipart/form-data">
                    
                    @csrf   

                        <div class="row">
                           <!--  <div class="col-lg-8 col-12 mb-30">
                            	<h5 class="title">Role</h5>
                            	<select class="form-control">
                                                <option>Choose</option>
                                                <option>Super Market</option>
                                                <option>NGO</option>
                                            </select>
                            </div> -->


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

                            <div class="col-lg-8 col-12 mb-30">
                                <h5 class="title">Contact No</h5>
                                <input class="form-control" type="text" placeholder="Mobile No." name="contact">
                            </div>

                            <div class="col-lg-8 col-12 mb-30">
                                <h5 class="title">Vehicle No</h5>
                                <input class="form-control" type="text" placeholder="Vehicle No" name="vehicle">
                            </div>

                            <div class="col-lg-8 col-12 mb-30">
                                <h5 class="title">Working Company</h5>
                                <input class="form-control" type="text" placeholder="Company" name="company">
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
            

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">
                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Manage Delivery<span>/ Valet List</span></h3>
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
                                    <th>Username</th>
                                    <th>Email ID</th>
                                    <th>Password</th>
                                    <th>Contact No</th>
                                    <th>Vehicle No</th>
                                    <th>Company Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead><!-- Table Head End -->
                              <?php $count='01';?>
                            @foreach($valet_data as $data)
                            <!-- Table Body Start -->
                            <tbody>
                                <tr>
                                    <td>{{ $count }}</td>
<!--                                     <td>{{$data->created_at}}</td>
 -->                                <td>{{$data->username}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->password}}</td>
                                    <td>{{$data->contact}}</td>
                                    <td>{{$data->vehicle}}</td>
                                    <td>{{$data->company}}</td>
                                    <td><img src="{{ url('public/image/'.$data->id)}}.jpg" alt="image" style="height: 50px; width: 50px;"></td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="delete button button-box button-xs button-danger" href="{{url('DeleteValet/'.$data->id)}}"><i class="zmdi zmdi-delete"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="{{url('EditValet/'.$data->id)}}"><i class="zmdi zmdi-edit"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                  
                            </tbody><!-- Table Body End -->
                            
                            <?php $count++;  ?>
                            @endforeach
                        </table>
                    </div>
                </div><!-- Invoice List End -->

            </div>

@stop