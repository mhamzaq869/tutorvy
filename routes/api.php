<?php

<<<<<<< HEAD
=======
use App\Events\ChatMessage;
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD
=======

Route::get('/ship', function (Request $request)
{
    $id = $request->input('id');
    event(new ChatMessage($id)); // trigger event
    return Response::make('Order Shipped!');
});
>>>>>>> bde60e339f8f6b6c5e731844541df755e099d249
