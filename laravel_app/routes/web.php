<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
  return view('form');
});

Route::post('/create', function (Request $request) {
  $validator = Validator::make($request->all(), [
    //TODO вся валидация https://laravel.ru/docs/v5/quickstart
    'fio' => 'required|max:100',
  ]);

  if ($validator->fails()) {
    return redirect('/')
      ->withInput()
      ->withErrors($validator);
  }

  // Создание задачи...
});