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
// Route::get('/', function(){
//     return redirect('/courses/1');
// });

//Route::get('/','PageController@onlineClass')->name('salsa.fusion');

Route::resource('courses', 'CourseController');

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('dashboard', 'ProfileController@index')->name('dashboard');
    Route::resource('locations', 'LocationController');
    Route::resource('classrooms', 'ClassroomController');
    Route::resource('skills', 'SkillController');
    Route::resource('lessons', 'LessonController');
    
    Route::resource('payments', 'PaymentController');
    Route::get('export/payments', 'PaymentController@export')->name('payments.export');
    Route::get('export/raw-payments', 'PaymentController@rawExport')->name('payments-raw.export');

    Route::resource('styles', 'StyleController');  
    Route::get('export/styles', 'StyleController@export')->name('styles.export');
    Route::get('export/students', 'CourseController@export')->name('students.export');

    Route::resource('permissions', 'PermissionController');
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('orders', 'OrderController');
    
    Route::post('registration/{course}','RegistrationController@add')->name('registration.add');
    Route::delete('registration/{course}','RegistrationController@remove')->name('registration.remove');
    
    Route::name('webhooks.mollie')->post('webhooks/mollie', 'MollieWebhookController@handle');
    Route::get('/mollie-payment','MollieController@preparePayment')->name('mollie.payment');
    Route::get('/payment-success','MollieController@paymentSuccess')->name('payment.status');    
    
    Route::get('checkout','CheckoutController')->name('checkout');
});

