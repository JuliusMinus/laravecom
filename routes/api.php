<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CartController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
    
    
    
    } );


 Route::get('cart/count', [CartController::class, 'count'])
        ->name('cart.count');

    Route::apiResource('cart', CartController::class);


   

    Route::get('products/count', [CartController::class, 'count'])
        ->name('products.count');
    Route::apiResource('products', CartController::class);

   
   
});

