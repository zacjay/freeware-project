@extends('market.master')
@section('content')
	
	<!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Recieve Response</h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->
	<div class="row mbn-30">

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
                                    <th>Approved By</th>
                                    <th>Action</th>
                                </tr>
                            </thead><!-- Table Head End -->

                            <!-- Table Body Start -->
                            <tbody>
                                <tr>
                                    <td>#01</td>
                                    <td>#556</td>
                                    <td>11 March 2019</td>
                                    <td>Easy Day</td>                                   
                                    <td>
                                        <div class="table-action-buttons">
                                            <a href="{{url('ViewBillOfNgo')}}"><span class="badge badge-success">Approved</span></a>
                                        </div>
                                    </td>
                                </tr>
                               
                                
                                
                            </tbody><!-- Table Body End -->

                        </table>
                    </div>
                </div><!-- Invoice List End -->

            </div>
@stop