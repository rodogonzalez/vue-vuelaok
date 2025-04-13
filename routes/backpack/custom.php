<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\CRUD.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes

    
    /*
    Route::crud('local', 'LocalCrudController');
    Route::crud('product', 'ProductCrudController');
    Route::crud('order', 'OrderCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('customer', 'CustomerCrudController');
    Route::crud('order-item', 'OrderItemCrudController');
    Route::crud('payment', 'PaymentCrudController');
    Route::crud('setting', 'SettingCrudController');


    
    Route::get('pos/{id}', [IndexController::class, 'show_pos_dashboard']);
    Route::crud('category', 'CategoryCrudController');
    Route::crud('store', 'StoreCrudController');
    Route::crud('wallet', 'WalletCrudController');
    Route::crud('local-type', 'LocalTypeCrudController');
    Route::crud('crypto-order-payment', 'CryptoOrderPaymentCrudController');


    Route::get('order/view/{id}', [IndexController::class, 'show_order']);    
    */
    Route::crud('airlines', 'AirlinesCrudController');
    Route::crud('country', 'CountryCrudController');
    Route::crud('country-division', 'CountryDivisionCrudController');
    Route::crud('country-division-part', 'CountryDivisionPartCrudController');
    Route::crud('country-division-part-destination', 'CountryDivisionPartDestinationCrudController');
}); // this should be the absolute last line of this file

/**
 * DO NOT ADD ANYTHING HERE.
 */
