<?php

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

Route::get('image/upload', function () {
    return view('upload');
});

Route::get('users', function () {
    return App\Models\User::search('example.com')->get();
});

Route::post('image/upload', 'Common\OssController@upload')->name('image.upload');

Route::any('{all}', function () {
    return view('app');
})->where(['all' => '.*']);
