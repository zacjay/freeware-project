@extends('market.master')
@section('content')

<div class="row justify-content-between align-items-center mb-10">
                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Market Dashboard<span></span></h3>
                    </div>
                </div><!-- Page Heading End -->
               </div>

               <div class="row mbn-30">

               	<div class="col-xlg-6 col-md-6 col-12 mb-30">
                    <div class="top-report">

                        <!-- Head -->
                        <div class="head">
                            <h4>Total Request Sent</h4>
                            <a href="{{url('MarketSendRequest')}}" class="view"><i class="zmdi zmdi-eye"></i></a>
                        </div>

                        <!-- Content -->
                        <div class="content">
                            
                            <h2>01</h2>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 72%;"></div>
                            </div>
                            <p>10% Requests</p>
                        </div>

                    </div>
                </div><!-- Top Report End -->

                <div class="col-xlg-6 col-md-6 col-12 mb-30">
                    <div class="top-report">

                        <!-- Head -->
                        <div class="head">
                            <h4>Total Response Received</h4>
                            <a href="{{url('MarketRecResponse')}}" class="view"><i class="zmdi zmdi-eye"></i></a>
                        </div>

                        <!-- Content -->
                        <div class="content">
                            
                            <h2>01</h2>
                        </div>

                        <!-- Footer -->
                        <div class="footer">
                            <div class="progess">
                                <div class="progess-bar" style="width: 42%;"></div>
                            </div>
                            <p>10% Users</p>
                        </div>

                    </div>
                </div><!-- Top Report End -->

                
                <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Manage Payment <span>/ Payment Status</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->
	

                <!--Alert Start-->
                <div class="col-12 mb-30">
                    <!-- <div class="alert alert-primary">
                        <button class="close" data-dismiss="alert"><i class="zmdi zmdi-close"></i></button>
                        <i class="zmdi zmdi-alert-polygon"></i> This page has been enhanced for download. Click the print button at the bottom of the invoice to <a href="#" class="alert-link">download.</a>
                    </div> -->
                </div>
                <!--Alert End-->

                <!-- Invoice List Start -->
                <div class="col-12 mb-30">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">

                            <!-- Table Head Start -->
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Bill No</th>
                                    <th>Date/Time</th>
<!--                                     <th>Paid By</th>
 -->                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead><!-- Table Head End -->

                            <!-- Table Body Start -->
                            <tbody>
                                <tr>
                                    <td>#01</td>
                                    <td>#556</td>
                                    <td>11 March 2020</td>
<!--                                     <td>Relience Fresh</td>
 -->                                    
                                   <td><span class="badge badge-success">Paid</span></td>
                                    <td>
                                        <div class="table-action-buttons">
                                            <a class="view button button-box button-xs button-primary" href="{{url('')}}"><i class="zmdi zmdi-more"></i></a>
                                            <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                
                                
                                
                            </tbody><!-- Table Body End -->

                        </table>
                    </div>
                </div><!-- Invoice List End -->

            

               </div>

@stop