@extends('ngo.master')
@section('content')

	<!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Slip <span></span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->


            <div class="row mbn-30">

                <!--Order Details Head Start-->
                <div class="col-12 mb-30">
                    <div class="row mbn-15">
                        <div class="col-12 col-md-4 mb-15">
                            <h4 class="text-primary fw-600 m-0">Order ID #556</h4>
                        </div>
                        <div class="text-left text-md-center col-12 col-md-4 mb-15"><span>Status: <span class="badge badge-success">Approved</span></span></div>
                        <div class="text-left text-md-right col-12 col-md-4 mb-15">
                            <p>11 March, 2019</p>
                        </div>
                    </div>
                </div>
                <!--Order Details Head End-->

                <!--Order Details Customer Information Start-->
                <div class="col-12 mb-30">
                    <div class="order-details-customer-info row mbn-20">

                        <!--Billing Info Start-->
                        <div class="col-lg-6 col-md-6 col-12 mb-20">
                            <h4 class="mb-25">Billing Info</h4>
                            <ul>
                                <li> <span>Name</span> <span>Sudhir Kumar</span> </li>
                                <li> <span>Country</span> <span>India</span> </li>
                                <li> <span>Address</span> <span> 11/3 Jaipur</span> </li>
                                <li> <span>State</span> <span>Rjasthan</span> </li>
                                <li> <span>City</span> <span>Jaipur</span> </li>
                                <li> <span>Email</span> <span>sudhir23@gmail.com</span> </li>
                                <li> <span>Phone</span> <span>997******6</span> </li>
                            </ul>
                        </div>
                        <!--Billing Info End-->

                        <!--Shipping Info Start-->
                        <!-- <div class="col-lg-4 col-md-6 col-12 mb-20">
                            <h4 class="mb-25">Shipping Info</h4>
                            <ul>
                                <li> <span>Name</span> <span>Jonathin doe</span> </li>
                                <li> <span>Country</span> <span>USA</span> </li>
                                <li> <span>Address</span> <span>13/2 Minar St, Sanfrancisco <br>CA 8788 USA.</span> </li>
                                <li> <span>State</span> <span>United Stade</span> </li>
                                <li> <span>City</span> <span>Sanfrancisco</span> </li>
                                <li> <span>Email</span> <span>domain@mail.com</span> </li>
                                <li> <span>Phone</span> <span>+1 022 3665  88</span> </li>
                            </ul>
                        </div> -->
                        <!--Shipping Info End-->

                        <!--Purchase Info Start-->
                        <div class="col-lg-6 col-md-6 col-12 mb-20">
                            <h4 class="mb-25">Purchase Info</h4>
                            <ul>
                                <li> <span>Items</span> <span>02</span> </li>
                                <li> <span>Price</span> <span>Rs. 195.00</span> </li>
                                <li> <span>Discount</span> <span>Rs. 57.00</span> </li>
                                <li> <span>Total</span> <span>Rs. 195.00</span> </li>
                                <li> <span class="h5 fw-600">Type</span> <span class="h5 fw-600 text-success">Paid</span> </li>
                            </ul>
                        </div>
                        <!--Purchase Info End-->

                    </div>
                </div>
                <!--Order Details Customer Information Start-->

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
                                    <td class="text-right">12 March 2019</td>
                                    <td class="text-right">5</td>
                                    <td class="text-right">Rs. 30</td>
                                    <td class="text-right">Rs. 32</td>
                                    <td class="text-right">Rs.150</td>
                                </tr>
                                <tr>
                                    <td>#02</td>
                                    <td>77654999</td>
                                    <td>Amul Butter</td>
                                    <td class="text-right">12 March 2019</td>
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
<div class="col-12 d-flex justify-content-end mb-15">
                    <div class="text-right">
                        <h6>Sub Total: Rs. 195</h6>
                        <!-- <h6>Tax(10%): $600</h6> -->
                        <hr class="mb-10">
                        <h3 class="fw-600 mb-0">Total: Rs. 195</h3>
                    </div>
                </div>
                <!--Invoice Total Start-->
                <!-- <div class="col-12 d-flex justify-content-end mb-15">
                    <div class="text-right">
                        <h6>Sub Total: $6000</h6>
                        <h6>Tax(10%): $600</h6>
                        <hr class="mb-10">
                        <h3 class="fw-600 mb-0">Total: $6600</h3>
                    </div>
                </div> -->
                <!--Invoice Total Start-->

                <div class="col-12 mb-15">
                    <hr>
                </div>

                <!--Invoice Action Button Start-->
                <div class="col-12 d-flex justify-content-end mb-30">
                    <div class="buttons-group">
                        <button class="button button-outline button-primary">Download PDF</button>
                        
                        <!-- <button class="button button-outline button-secondary">Payment Process</button> -->
                    </div>
                </div>
                <!--Invoice Action Button Start-->

            </div>

@stop