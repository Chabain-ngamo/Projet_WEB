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

Route::get('/', function () {
    return view('accueil');
});
// Route::get('/accueil', function () {
//     return view('accueil');
// });
// Route::group(['middleware' => 'auth'], function(){
//     Route::get('/users/add', function () {
//         return view('auth.usersSignUp');
//     })->middleware(['auth'])->name('dashboard');

//     Route::view('profile', 'profile') -> name('profile');
    
// // });
// Route::get('/users/add', function () {
//     return view('auth.usersSignUp');
// })->name('/');

require __DIR__.'/auth.php';

Route::post('/paypal-checkout', 'CheckoutController@paypalCheckout')->name('checkout.paypal');
Route::post('/paypal-checkout', 'CheckoutController@paypalCheckout')->name('checkout.paypal');