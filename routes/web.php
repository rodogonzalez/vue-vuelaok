<?php
/*
use App\Helpers\BlockBee;
use App\Helpers\WalletObserver;
use App\Models\CryptoOrderPayment;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
*/
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;



 Route::group([
    'prefix'    => '/',
    'namespace' => 'App\Http\Controllers',
], function () {
    Route::get('/', [IndexController::class, 'index']);
    Route::get('{country}',[IndexController::class, 'show_country'])->name('show_country');
    Route::get('{country}/{country_part}',[IndexController::class, 'show_country_part'])->name('show_country_part');
    Route::get('{country}/{country_part}/{destination}',[IndexController::class, 'show_country_part_destination'])->name('show_country_part_destination');

});
