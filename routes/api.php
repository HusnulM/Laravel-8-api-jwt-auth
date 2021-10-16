<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\BookController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('book', [BookController::class, 'book']);

Route::post('register', 'UserController@register');
Route::post('login',    'UserController@login');
Route::post('logout',   'UserController@logout');
// Route::get('logout', [ApiController::class, 'logout']);
Route::get('book',      'BookController@book');

Route::get('bookall',   'BookController@bookAuth')->middleware('jwt.verify');
Route::get('user',      'UserController@getAuthenticatedUser')->middleware('jwt.verify');