<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubscriptionController;

use App\Http\Controllers\Admin\InfluencersController;

use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\UserSubscriptionController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FavoriteController;

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'store'])->name('login')->middleware('guest');

Route::get('/register',[RegisterController::class,'index'])->name('register')->middleware('guest');
Route::post('/register',[RegisterController::class,'store'])->name('register')->middleware('guest');


Route::get('/logout',function(){
auth()->logout();
return redirect()->route('login');
})->name('logout');

Route::get('/', [PostController::class,'index'])->name('home');
Route::get('/product/{id}/show',[PostController::class,'show'])->name('show_product');
Route::get('/product/search/{text}', [PostController::class,'search'])->name('search');

Route::get('/subscriptions', [UserSubscriptionController::class,'index'])->name('user_subscriptions')->middleware('auth');



Route::get('/checkout',[CheckoutController::class,'checkout'])->middleware('auth');
Route::post('/checkout',[CheckoutController::class,'afterpayment'])->name('checkout.credit-card')->middleware('auth');



Route::post('/favorite_or_unfavorite/{id}',[FavoriteController::class,'store'])->name('favorite_or_unfavorite_post')->middleware('auth');
Route::get('/get_favorite_products',[FavoriteController::class,'index'])->name('get_favorite_products')->middleware('auth');

Route::prefix('admin')->group(function () {
//Admin Users Routes
Route::get('/',[UsersController::class,'index'])->name('admin_home')->middleware('auth');

Route::get('/user/{id}/edit',[UsersController::class,'edit'])->name('edit_user')->middleware('auth');
Route::post('/user/{id}/update',[UsersController::class,'update'])->name('update_user')->middleware('auth');
Route::get('/add_user',[UsersController::class,'create'])->name('add_user')->middleware('auth');
Route::post('/add_user',[UsersController::class,'store'])->name('add_user')->middleware('auth');

Route::get('/user/{id}/delete',[UsersController::class,'destroy'])->name('delete_user')->middleware('auth');


//Admin Product Categories Routes

Route::get('/categories',[CategoryController::class,'index'])->name('categories')->middleware('auth');
Route::post('/categories',[CategoryController::class,'store'])->name('categories')->middleware('auth');
Route::get('/categories/{id}/edit',[CategoryController::class,'edit'])->name('edit_category')->middleware('auth');
Route::post('/categories/{id}/update',[CategoryController::class,'update'])->name('update_category')->middleware('auth');

Route::get('/categories/{id}/delete',[CategoryController::class,'destroy'])->name('delete_category')->middleware('auth');









//Admin Posts Routes
Route::get('/products',[PostsController::class,'index'])->name('products')->middleware('auth');
Route::get('/product/{id}/delete',[PostsController::class,'destroy'])->name('delete_product')->middleware('auth');
Route::get('/product/{id}/show',[PostsController::class,'show'])->name('show_product')->middleware('auth');
Route::get('/product/{id}/edit',[PostsController::class,'edit'])->name('edit_product')->middleware('auth');
Route::post('/product/{id}/update',[PostsController::class,'update'])->name('update_product')->middleware('auth');

Route::get('/add_product',[PostsController::class,'create'])->name('add_product')->middleware('auth');
Route::post('/add_product',[PostsController::class,'store'])->name('add_product')->middleware('auth');



//Admin Subscription

Route::get('/subscriptions',[SubscriptionController::class,'index'])->name('subscriptions')->middleware('auth');
Route::post('/subscriptions',[SubscriptionController::class,'store'])->name('add_subscription')->middleware('auth');
Route::get('/subscription/{id}/delete',[SubscriptionController::class,'destroy'])->name('delete_subscription')->middleware('auth');
Route::get('/subscription/{id}/edit',[SubscriptionController::class,'edit'])->name('edit_subscription')->middleware('auth');
Route::post('/subscription/{id}/update',[SubscriptionController::class,'update'])->name('update_subscription')->middleware('auth');

});

