<?php

use App\Http\Controllers\ideasController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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
//Route::get('image/upload','ideasController@fileCreate');
Route::post('image/upload/store','ideasController@fileStore');
Route::post('image/delete','ideasController@fileDestroy');


//WELCOME PAGE
Route::get('/', function () {
    return view('accueil');
});
Route::get('/accueil', function () {
    return view('accueil');
});

//BREEZE
Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    Route::view('profile', 'profile')->name('profile');
});


require __DIR__.'/auth.php';


//IDEA BOX
Route::get('/boiteidée', [ideasController::class, 'index']);
/*Route::get('/boiteidée', function () {
    return view('boiteidée');
});*/
Route::post('/boiteidée', [ideasController::class, 'store']);

Route::get('/boiteidée/upload', [ideasController::class, 'fileStore']);
Route::post('/boiteidée/upload', [ideasController::class, 'fileStore']);



//SHOP
Route::get('/Boutique', function () {
    return view('Boutique');
});
Route::get('/Boutique/catalogue', function () {
    return view('catalogue');
});


//ACTIVITY
Route::get('/activity', function () {
    return view('activity');
});
Route::get('/activity/add', [ActivityController::class, 'create']);
Route::post('/activity/add', [ActivityController::class, 'store']);

Route::get('/activity/{id}', [ActivityController::class, 'show']);

Route::get('/activity/delete/{id}', [ActivityController::class, 'remove']);

Route::get('/activity/edit/{id}', [ActivityController::class, 'edit']);
Route::post('/activity/edit/{id}', [ActivityController::class, 'update']);


//PRODUCT
Route::get('/product/add', [ProductController::class, 'create']);
Route::post('/product/add', [ProductController::class, 'store']);

Route::get('/boutique','ProductController@index')->name('products.index');

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/product/delete/{id}', [ProductController::class, 'remove']);

Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/edit/{id}', [ProductController::class, 'update']);


//CATEGORY
Route::get('/category/add', [CategoryController::class, 'create']);
Route::post('/category/add', [CategoryController::class, 'store']);

Route::get('/category/{id}', [CategoryController::class, 'show']);

Route::get('/category/delete/{id}', [CategoryController::class, 'remove']);

Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/category/edit/{id}', [ProductController::class, 'update']);

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/{product}', 'CartController@store')->name('cart.store');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::post('/paypal-checkout', 'CheckoutController@paypalCheckout')->name('checkout.paypal');


Route::post('/paypal-checkout', 'CheckoutController@paypalCheckout')->name('checkout.paypal');
Route::post('/paypal-checkout', 'CheckoutController@paypalCheckout')->name('checkout.paypal');