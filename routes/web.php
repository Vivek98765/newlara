<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StripeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [BlogController::class,'index']);

Route::post('validate-exists', [BlogController::class,'store'])->name('validate.exists');


Route::get('/insert','StudInsertController@index')->name('student form');
Route::post('/create','StudInsertController@store')->name('student form create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/send-email', [MailController::class, 'sendEmail']);
Route::get('/stripe-payment', [StripeController::class, 'handleGet']);
Route::post('/stripe-payment', [StripeController::class, 'handlePost'])->name('stripe.payment');