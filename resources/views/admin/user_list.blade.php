@extends('admin.master')
@section('content')

	 <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">
                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Manage User's<span>/Users List</span></h3>
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
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Profile Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead><!-- Table Head End -->
                            <?php $count='01';?>
                            @foreach($user_data as $data)
                            <!-- Table Body Start -->
                            <tbody>
                                <tr>
                                    <td>{{ $count }}</td>
<!--                                     <td>{{$data->created_at}}</td>
 -->                                <td>{{$data->username}}</td>
                                    <td>{{$data->role}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->password}}</td>
                                    <td><img src="{{ url('public/image/'.$data->id)}}.jpg" alt="image" style="height: 50px; width: 50px;"></td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="delete button button-box button-xs button-danger" href="
                                            {{url('DeleteUsers/'.$data->id)}}"><i class="zmdi zmdi-delete"></i></a>
                                            <a class="edit button button-box button-xs button-info" href="
                                            {{url('EditUsers/'.$data->id)}}"><i class="zmdi zmdi-edit"></i></a>
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