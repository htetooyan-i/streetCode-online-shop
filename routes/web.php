<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;
use Illuminate\Http\Request;

Route::get('/',[App\Http\Controllers\displayController::class,'home'])->name('home')->middleware(Admin::class);

Route::get('product-detail/{id}/{color}',[App\Http\Controllers\displayController::class,'displayDetail'])->name('productDetail');
Route::post('product-detail/{id}/{color}',[App\Http\Controllers\displayController::class,'sizeChoice']);

Route::get('news/{id}',[App\Http\Controllers\displayController::class,'news'])->name('aticle');
Route::get('news/',[App\Http\Controllers\displayController::class,'magazine'])->name('magazine');

Route::get('browse/{category}',[App\Http\Controllers\ProductController::class,'browse'])->name('filter');

Route::get('userControl/{formType}', [App\Http\Controllers\displayController::class, 'userControl']);
Route::post('userControl/{formType}', [App\Http\Controllers\UserController::class, 'userControl']);

Route::get('product-detail/{id}/{color}/buy',[App\Http\Controllers\displayController::class,'buyProduct']);
Route::post('product-detail/{id}/{color}/buy',[App\Http\Controllers\ResellController::class,'buyProduct']);

Route::get('cart',[App\Http\Controllers\displayController::class,'cart'])->name('cart');
Route::post('cart',[App\Http\Controllers\displayController::class,'checkout'])->name('cart');

Route::get('cart/edit/{id}',[App\Http\Controllers\OrderController::class,'orderEdit']);

Route::get('about',[App\Http\Controllers\displayController::class,'about']);

Route::get('help',[App\Http\Controllers\displayController::class,'help']);

Route::get('sell',[App\Http\Controllers\displayController::class,'sell']);
Route::post('sell',[App\Http\Controllers\ResellController::class, 'store']);

Route::get('user-acc/personal-detail/{id}',[App\Http\Controllers\displayController::class,'personalDetail'])->name('account.details');

Route::get('user-acc/personal-detail/{id}/billing',[App\Http\Controllers\displayController::class,'billing'])->name('account.billing');
Route::get('user-acc/personal-detail/{id}/billing/create-payment',[App\Http\Controllers\PaymentController::class,'create'])->name('account.billing.create');
Route::post('user-acc/personal-detail/{id}/billing/create-payment',[App\Http\Controllers\PaymentController::class,'store'])->name('account.billing.create');
Route::get('user-acc/personal-detail/{id}/billing/edit-payment/{paymentId}',[App\Http\Controllers\PaymentController::class,'edit'])->name('account.billing.edit');
Route::post('user-acc/personal-detail/{id}/billing/edit-payment/{paymentId}',[App\Http\Controllers\PaymentController::class,'update'])->name('account.billing.edit');
Route::get('user-acc/personal-detail/{id}/billing/delete-payment/{paymentId}',[App\Http\Controllers\PaymentController::class,'destroy'])->name('account.billing.delete');

Route::get('user-acc/personal-detail/{id}/products',[App\Http\Controllers\displayController::class,'products'])->name('account.products');
Route::get('user-acc/personal-detail/{id}/products/edit-product/{productId}', [App\Http\Controllers\ResellController::class, 'edit'])->name('account.products.edit');
Route::post('user-acc/personal-detail/{id}/products/edit-product/{productId}', [App\Http\Controllers\ResellController::class, 'update'])->name('account.products.edit');
Route::get('user-acc/personal-detail/{id}/products/delete-product/{productId}', [App\Http\Controllers\ResellController::class, 'destroy'])->name('account.products.delete');

Route::get('user-acc/personal-detail/{id}/orders',[App\Http\Controllers\displayController::class,'orders'])->name('account.orders');
Route::post('user-acc/personal-detail/{id}/orders',[App\Http\Controllers\OrderController::class,'update'])->name('account.orders');

Route::get('user-acc/personal-detail/{id}/balance',[App\Http\Controllers\displayController::class,'balance'])->name('account.balance');
Route::post('user-acc/personal-detail/{id}',[App\Http\Controllers\UserController::class,'update'])->name('editProfile');

Route::get('user-acc/logout',[App\Http\Controllers\UserController::class,'logout']);

Route::get('user-acc/delete/{id}',[App\Http\Controllers\UserController::class,'destroy']);


Route::get('admin',[App\Http\Controllers\AdminController::class,'index']);
Route::get('admin/user',[App\Http\Controllers\AdminController::class, 'userTable'])->name('userTable');
Route::get('admin/user/{id}/delete',[App\Http\Controllers\AdminController::class, 'destroy']);
Route::get('admin/user/create',[App\Http\Controllers\AdminController::class, 'create']);
Route::post('admin/user/create',[App\Http\Controllers\AdminController::class, 'store']);

Route::get('admin/product',[App\Http\Controllers\ProductController::class, 'index'])->name('productTable');
Route::get('admin/product/{id}/delete',[App\Http\Controllers\ProductController::class, 'destroy']);
Route::get('admin/article',[App\Http\Controllers\ArticleController::class, 'index'])->name('articleTable');
Route::get('admin/article/create',[App\Http\Controllers\ArticleController::class, 'store']);
Route::get('admin/article/{id}/delete',[App\Http\Controllers\ArticleController::class, 'destroy']);
Route::get('test', [App\Http\Controllers\displayController::class, 'test']);

Route::get('admin/product/create',[App\Http\Controllers\ProductController::class, 'create']);
Route::post('admin/product/create',[App\Http\Controllers\ProductController::class, 'store']);

Route::get('admin/product/{id}/edit', [App\Http\Controllers\ProductController::class, 'edit']);
Route::post('admin/product/{id}/edit', [App\Http\Controllers\ProductController::class, 'update']);

Route::get('admin/resell-product',[App\Http\Controllers\ResellController::class, 'index'])->name('resellTable');
Route::get('admin/resell-product/create', [App\Http\Controllers\ResellController::class, 'create']);

Route::get('admin/resell-product/{id}/delete', [App\Http\Controllers\ResellController::class, 'destroy']);

Route::get('admin/payment', [App\Http\Controllers\PaymentController::class, 'index']);
Route::get('admin/payment/create', [App\Http\Controllers\PaymentController::class, 'store']);
Route::get('admin/payment/{id}/delete',[App\Http\Controllers\PaymentController::class, 'destroy']);

Route::get('cart/remove/{id}', [App\Http\Controllers\displayController::class, 'deleteCartProduct']);

Route::get('admin/order', [App\Http\Controllers\OrderController::class, 'index']);
Route::get('admin/order/{id}/delete', [App\Http\Controllers\OrderController::class, 'destroy']);

Route::get('admin/history', [App\Http\Controllers\HistoryController::class, 'index']);
Route::get('admin/history/{id}/delete', [App\Http\Controllers\HistoryController::class, 'destroy']);

Route::post('/',[App\Http\Controllers\displayController::class,'browseProduct'])->name('home');