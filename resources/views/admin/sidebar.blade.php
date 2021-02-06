<!-- Side Header Start -->
        <div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                <nav class="side-header-menu" id="side-header-menu">
                    <ul>
                        <li><a href="{{url('AdminDashboard')}}"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>

                        <li class="has-sub-menu"><a href="#"><i class="fa fa-users" aria-hidden="true"></i>
                         <span>Manage User's</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="{{url('AddUsers')}}"><span>Add User's</span></a></li>
                                <li><a href="{{url('UsersList')}}"><span>Use's List</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </i> <span>Send Request</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="{{url('RequestToNgo')}}"><span>To NGO's</span></a></li>
<!--                                 <li><a href="elements-fullcalendar.html"><span>To Super Markets</span></a></li>
 -->                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="fas fa-plane-arrival"></i> <span>Recieve Request</span></a>
                            <ul class="side-header-sub-menu">
<!--                                 <li><a href="icons-cryptocurrency.html"><span>By NGO's</span></a></li>
 -->                                <li><a href="{{url('RequestByMarket')}}"><span>By Super Markets</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </i> <span>Send Response</span></a>
                            <ul class="side-header-sub-menu">
<!--                                 <li><a href="form-basic-elements.html"><span>To NGO's</span></a></li>
 -->                                <li><a href="{{url('ResponseToMarket')}}"><span>To Super Markets</span></a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#"><i class="fas fa-plane-arrival"></i> <span>Recieve Response</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="{{url('ResponseByNgo')}}"><span>By NGO's</span></a></li>
<!--                                 <li><a href="table-data-table.html"><span>By Super Markets</span></a></li>
 -->                            </ul>
                        </li>
                      
                        <li class="has-sub-menu"><a href="#"><i class="fab fa-cc-paypal"></i> <span>Manage Payments</span></a>
                            <ul class="side-header-sub-menu">
                                <li><a href="{{url('PaymentMethods')}}"><span>Add Payment Method</span></a></li>
                                <li><a href="{{url('PaymentStatus')}}"><span>Payment Status</span></a></li>
<!--                                 <li><a href="{{url('PendingPayments')}}"><span>Pending Payment</span></a></li>
 -->                            </ul>
                        </li>
                        
                        
                    </ul>
                </nav>

            </div><!-- Side Header Inner End -->
        </div><!-- Side Header End -->