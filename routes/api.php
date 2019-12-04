<?php

use Illuminate\Http\Request;

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

Route::get('contacts', 'ContactController@index');
Route::get('contacts/{id}', 'ContactController@show');
Route::post('contactsadd', 'ContactController@store');
Route::put('contactsmodify/{id}', 'ContactController@update');
Route::delete('contactsdel/{id}', 'ContactController@destroy');


//頭像上傳
Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');