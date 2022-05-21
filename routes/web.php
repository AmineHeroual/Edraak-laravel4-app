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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('home',function(){
  return view('home');
});

// Route::get('one', function () {
//     return view('one');
// })->middleware(['auth'])->name('one');

// require __DIR__.'/auth.php';



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// //////////////////////////////////////


Route::get('/','ProductController@main');


Route::resource('products', 'ProductController');



Route::get('product/amine', 'ProductController@search');
Route::get('product/soft/delete/{id}', 'ProductController@softDelete')->name('soft.delete');

Route::get('product/trash', 'ProductController@trashedProducts')->name('product.trash');

Route::get('product/back/from/trash/{id}', 'ProductController@backProduct')->name('product.back.from.trash');

Route::get('product/delete/from/database/{id}', 'ProductController@forEverDelete')->name('product.delete.from.database');

