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

//Route::get('/', 'WelcomeController')->name('welcome');
Route::get('/', function(){
    return redirect('/courses/1');
});

//Route::get('/','PageController@onlineClass')->name('salsa.fusion');

Auth::routes(['verify' => true]);

Route::get('dashboard', 'ProfileController@index')->name('dashboard')->middleware('verified');

Route::resource('courses', 'CourseController');
Route::middleware(['auth'])->group(function(){
    Route::resource('locations', 'LocationController');
    Route::resource('skills', 'SkillController');
    Route::resource('lessons', 'LessonController');
    Route::resource('payments', 'PaymentController');
    Route::resource('styles', 'StyleController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::post('registration/{course}','RegistrationController@add')->name('registration.add');
    Route::delete('registration/{course}','RegistrationController@remove')->name('registration.remove');
    
    Route::get('/mollie-payment','MollieController@preparePayment')->name('mollie.payment');
    Route::get('/payment-success','MollieController@paymentSuccess')->name('payment.success');
    Route::get('checkout','CheckoutController')->name('checkout');
});

