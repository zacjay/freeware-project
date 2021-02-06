@extends('market.master')
@section('content')

	<!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">
                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Send Request</h3>
                    </div>
                </div><!-- Page Heading End -->


            </div><!-- Page Headings End -->

            <div class="add-edit-product-wrap col-12">

                <div class="add-edit-product-form">
                    <form method="post" action="{{url('SendRequest')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-lg-8 col-12 mb-30">
                                <h5 class="title">Bill No</h5>
                                <input class="form-control" type="text" placeholder="Bill No" name="bill">
                            </div>

                            <div class="col-lg-4 col-12 mb-20">
                                    <h6 class="mb-15">Generated Date</h6>
                                    <input type="text" class="form-control input-date-single" name="gen">
                            </div>

                            <div class="col-lg-8 col-12 mb-30">
                            	<h5 class="title">Select Your Super-Market</h5>
                            	<select class="form-control" name="genby">
                                    <option>Choose</option>
                                    <option>Reliance Fresh</option>
                                    <option>Big Bazaar</option>
                                    <option>Easy Day</option>
                                    <option>6-Ten</option>
                                </select>
                            </div>

                            <div class="col-lg-4 col-12 mb-20">
                                    <h6 class="mb-15">Due Date</h6>
                                    <input type="text" class="form-control input-date-single" name="due">
                            </div>

                            <div class="col-lg-8 col-12 mb-30">
                                <h5 class="title">Invoice Upload</h5>
                                <div class="col-12 mb-30">
                                    <input class="file-pond" type="file" multiple name="image">
                                </div>
                            </div> 
                        </div>
                        <!-- Button Group Start -->
                        <div class="row">
                            <div class="d-flex flex-wrap" >
                                <button class="button button-outline button-primary mb-10 ml-10 mr-0" type="submit">Save</button>
                            </div>
                        </div><!-- Button Group End -->

                    </form>
                </div>

            </div>

@stop