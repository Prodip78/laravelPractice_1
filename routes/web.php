<?php

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

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/','postcontroller@index');



Route::get('contact','student@contact');
Route::get('about','student@about');
Route::get('student','student@student');

Route::get('addCategory','student@addCategory');
Route::get('allCategory','student@allCategory');
Route::get('viewCategory{id}','student@viewCategory');
Route::get('DeleteCategory{id}','student@DeleteCategory');
Route::post('store.catrgory','student@storeCatrgory');
Route::post('UpdateCategory{id}','student@UpdateCategory');
Route::get('EditCategory{id}','student@EditCategory');

//post crud
Route::get('writePost','postcontroller@writePost');
Route::get('allpost','postcontroller@allpost');
Route::post('StorePost','postcontroller@StorePost');
Route::get('viewPost{id}','postcontroller@viewPost');
Route::get('EditPost{id}','postcontroller@EditPost');