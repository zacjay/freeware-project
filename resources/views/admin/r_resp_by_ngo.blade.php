@extends('admin.master')
@section('content')

	<!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Recieve Response <span>/ By NGO's </span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="row">

                <!--Order List Start-->
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-vertical-middle">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Approved By</th>
                                    <th>Date/Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#556</td>
                                    <td>sudhirk</td>
                                    <td>11 March 2019</td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td class="action h4">
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="{{url('ViewBillOfNgo')}}"><i class="zmdi zmdi-more"></i></a>
                                            
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                
                               
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Order List End-->

            </div>

@stop