<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/myCallbackEndpoint', function (Request $request) {

    $new = new App\Transaction();
        $new->name = 'fk';
        $new->mpesaReceiptNumber = 'test';
        $new->phone = 'test';
        $new->amount = 1;
       
        //$new->amount = $request->Body->stkCallback->CallbackMetadata->Item
        $new->save();
    return ;
    //  response()->json([
    //      'responce'=> $request->attributes
    //  ]);
    
});

