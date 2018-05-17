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

Route::get('/', function () {return view('index');});

/* Module M01: Authentication and Individual Profile */

// Login Form
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//Login Action
Route::post('login', 'Auth\LoginController@login');
//Logout Action
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
//Register Form
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Register Action
Route::post('register', 'Auth\RegisterController@register');
//View Profile
Route::get('profile/{user_id}', 'ProfileController@show')->name('profile');
//Edit Profile Form
Route::get('profile/{user_id}/edit', 'ProfileController@showEdit')->name('edit');
//Edit Profile Action
Route::post('profile/{user_id}/edit', 'ProfileController@update');
//Reset Password Form
Route::get('password/reset', 'ProfileController@showPasswordReset')->name('passwordReset');
//Reset Password Action
Route::post('password/reset', 'ProfileController@passwordReset');
//Reset Password Confirmation Form
Route::get('password/confirmation', 'ProfileController@showPasswordConfirmation')->name('passwordConfirmation');
//Reset Password Confirmation Action
Route::post('password/confirmation', 'ProfileController@passwordConfirmation');
//Reset Password Change Form
Route::get('password/change', 'ProfileController@showPasswordChange')->name('passwordChange');
//Reset Password Change Action
Route::post('password/change', 'ProfileController@passwordChange');
//Password Change Success
Route::get('password/changeSuccess', 'ProfileController@showChangeSuccess')->name('changeSuccess');

/* Module M02: Products */

//Products
Route::get('products', 'ProductsController@show');

//Product
Route::get('product/{product_id}', 'ProductController@show');

/* Module M03: Reviews and Wish list */


/* Module M04: Cart and Checkout */


/* Module M05: User Administration */


/* Module M06: Static Pages */
//Home Page
Route::get('/home', function () { return view('index');});

//About Page
Route::get('/about', function () {return view('about');});

//Contacts Page
Route::get('/contacts', function () {return view('contacts');});

//Terms Page
Route::get('/terms', function () {return view('terms');});

//Privacy Page
Route::get('/privacy', function () {return view('privacy');});

//404 Page
Route::get('/404', function () {return view('404');});