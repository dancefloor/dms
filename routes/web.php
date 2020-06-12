<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WelcomeController')->name('welcome');

Auth::routes(['verify' => true]);

Route::get('dashboard', 'ProfileController@index')->name('dashboard')->middleware('verified');

Route::middleware(['auth'])->group(function(){
    Route::resource('courses', 'CourseController');
    Route::resource('locations', 'LocationController');
    Route::resource('skills', 'SkillController');
    Route::resource('lessons', 'LessonController');
    Route::resource('payments', 'PaymentController');
    Route::resource('styles', 'StyleController');
    Route::resource('users', 'UserController');
    Route::post('registration/{course}','RegistrationController@add')->name('registration.add');
    // Route::get('users/teachers', 'UserController@teachers')->name('users.teachers');
    // Route::get('users/actives', 'UserController@actives')->name('users.actives');
    // Route::get('users/passive', 'UserController@passive')->name('users.passive');
    // Route::get('users/debtors', 'UserController@debtors')->name('users.debtors');
    // Route::get('users', 'UserController@assistants')->name('users.assistants');
    Route::get('male-users', 'UserController@male')->name('users.male');
    Route::get('female-users', 'UserController@females')->name('users.females');
    
    Route::get('/mollie-payment','MollieController@preparePayment')->name('mollie.payment');
    Route::get('/payment-success','MollieController@paymentSuccess')->name('payment.success');
    Route::get('checkout','CheckoutController')->name('checkout');
});

