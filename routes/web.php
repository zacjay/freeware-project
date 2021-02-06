<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('Login', function () 
{
    return view('admin.login');
});

Route::get('AdminDashboard', function () 
{
    return view('admin.admin_dash');
});

Route::get('RequestByMarket', function () 
{
    return view('admin.r_req_by_supmarket');
});

Route::get('RequestToNgo', function () 
{
    return view('admin.s_req_to_ngo');
});

Route::get('ResponseByNgo', function () 
{
    return view('admin.r_resp_by_ngo');
});

Route::get('ResponseToMarket', function () 
{
    return view('admin.s_resp_to_market');
});

Route::get('AddUsers', function () 
{
    return view('admin.add_users');
});

Route::get('UsersList', function () 
{
    return view('admin.user_list');
});

Route::get('PaymentMethods', function () 
{
    return view('admin.payments');
});

Route::get('PaymentStatus', function () 
{
    return view('admin.pay_status');
});

Route::get('DeliveredOrders', function () 
{
    return view('admin.delivd_order');
});


Route::get('DeliveryStatus', function () 
{
    return view('admin.delvry_status');
});

Route::get('AddValet', function () 
{
    return view('admin.add_valet');
});

Route::get('ValetList', function () 
{
    return view('admin.add_valet_list');
});

Route::get('Profile', function () 
{
    return view('admin.profile');
});

Route::get('EditProfile', function () 
{
    return view('admin.edit_profile');
});

Route::get('PasswordChange', function () 
{
    return view('admin.pass_change');
});

// *************************************************
Route::get('ViewBill', function () 
{
    return view('admin.bill_s_to_ngo');
});

Route::get('ViewBillOfNgo', function () 
{
    return view('admin.slip_rec_by_ngo');
});

Route::get('Bill', function () 
{
    return view('admin.bill');
});

Route::get('Bill', function () 
{
    return view('ngo.bill1');
});

Route::get('Logout', function () 
{
    return view('admin.login');
});

Route::get('RegisterUser', function () 
{
    return view('admin.register');
});


// ***********************USER's*****************************

Route::post('/AddUsers','AddUserController@adduser');

Route::get('/UsersList', 'AddUserController@getData')->name('form.create');

Route::get('/EditUsers/{id}','AddUserController@editdata');

Route::any('/UpdateUsersList', 'AddUserController@update');

Route::get('/DeleteUsers/{id}','AddUserController@deletedata');

// ***********************VALET's**********************************

Route::post('/AddValet','AddValetController@addvalet');

Route::get('/AddValet', 'AddValetController@getData')->name('form.create');

Route::get('/EditValet/{id}','AddValetController@editdata');

Route::any('/UpdateValetList', 'AddValetController@update');

Route::get('/DeleteValet/{id}','AddValetController@deletedata');

// ***************************PAYMENT METHOD's******************************************

Route::post('/AddMethod','PaymentMethodController@addmethod');

Route::get('/AddMethod', 'PaymentMethodController@getData')->name('form.create');

Route::post('/SendRequestToNgo','SendRequestController2@send');

Route::post('/SendResponseToSupermarket','SendResponseController@send');

Route::post('/Registered','RegisterController@addusers');

/// ---Market Routes---


Route::get('MarketDashboard',function()
{
    return view('market.dashboard');
});

Route::get('MarketSendRequest',function(){
    return view('market.send_request');
});

Route::get('MarketRecResponse',function(){
    return view('market.received_response');
});

Route::get('MarketPaymentStatus',function(){
    return view('market.payment_status');
});

Route::post('/SendRequest','SendReqController1@send');

Route::get('/ReceiveRequest', 'SendReqController1@getData')->name('form.create');



/// ---NGO Routes---


Route::get('NGODashboard',function(){
    return view('ngo.dashboard');
});

Route::get('NgoRecRequest',function(){
    return view('ngo.receive_request');
});

Route::get('NgoSendResponse',function(){
    return view('ngo.send_response');
});

Route::get('NgoPaymentStatus',function(){
    return view('ngo.payment_status');
});




// *********************LOGIN SYSTEM**************************

Route::get('AdminLogin','LoginController@loginpage');

Route::post('/AdminLogin1', 'LoginController@loginPage1');

// Route::get('AdminDashboard','LoginController@loaddashboard');


