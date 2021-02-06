@extends('admin.master')
@section('content')
<!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Bill <span>/ Send to NGO's</span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->
<div class="row mbn-30">

                <!--Invoice Head Start-->
                <div class="col-12 mb-30">
                    <div class="invoice-head">
                        <h2 class="fw-700 mb-15">Invoice #ID-556</h2>
                        <hr>
                        <div class="d-flex justify-content-between row mbn-20">
                            <!--Invoice Form-->
                            <div class="text-left col-12 col-sm-auto mb-20">
                                <h4 class="fw-600">Easy Day</h4>
                                <p>Address: Jaipur<br>
                            Mobile No.:<br>
                            Email ID: </p>
                            </div>
                            <!--Invoice To-->
                            <div class="text-left text-sm-right col-12 col-sm-auto mb-20">
                                <h4 class="fw-600">A***y</h4>
                                
                                    <p><span class="text-heading fw-600">Date/Time:</span> 11 March 2019 <br>
                                        <span class="text-heading fw-600">Due Date:</span> 15 March 2019</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Invoice Head End-->

                <!--Invoice Details Table Start-->
                <div class="col-12 mb-30">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>#SNO</th>
                                    <th><span>Item No</span></th>
                                    <th><span>Item Description</span></th>
                                    <th class="text-right"><span>Item Expire Date</span></th>
                                    <th class="text-right"><span>Quantity</span></th>
                                    <th class="text-right"><span>Item MRP</span></th>
                                    <th class="text-right"><span>Discount</span></th>
                                    <th class="text-right"><span>Total</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#01</td>
                                    <td>776543765</td>
                                    <td>Amul Milk</td>
                                    <td class="text-right">18 March 2020</td>
                                    <td class="text-right">5</td>
                                    <td class="text-right">Rs. 30</td>
                                    <td class="text-right">Rs. 32</td>
                                    <td class="text-right">Rs.150</td>
                                </tr>
                                <tr>
                                    <td>#02</td>
                                    <td>77654999</td>
                                    <td>Amul Butter</td>
                                    <td class="text-right">18 March 2020</td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">Rs. 15</td>
                                    <td class="text-right">Rs. 25</td>
                                    <td class="text-right">Rs.45</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Invoice Details Table End-->

                <!--Invoice Total Start-->
                <div class="col-12 d-flex justify-content-end mb-15">
                    <div class="text-right">
                        <h6>Sub Total: Rs. 195</h6>
                        <!-- <h6>Tax(10%): $600</h6> -->
                        <hr class="mb-10">
                        <h3 class="fw-600 mb-0">Total: Rs. 195</h3>
                    </div>
                </div>
                <!--Invoice Total Start-->

                <div class="col-12 mb-15">
                    <hr>
                </div>

                <!--Invoice Action Button Start-->
                <div class="col-12 d-flex justify-content-end mb-30">
                    <div class="buttons-group">
                        <button class="button button-outline button-primary">Download PDF</button>  
                    </div>
                </div>
                <!--Invoice Action Button Start-->

            </div>
@stop