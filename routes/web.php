<?php

use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SectionsController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/invoices/invoices', 'InvoicesController@index')->name('invoices.invoices');
/*Section*/
Route::get('/sections/sections', 'SectionsController@index')->name('sections.sections');
Route::post('/sections/destroy', 'SectionsController@destroy')->name('sections.destroy');
Route::post('/sections/store', 'SectionsController@store')->name('sections.store');
Route::post('/sections/update', 'SectionsController@update')->name('sections.update');
/*Product*/
Route::get('/Products/Products','ProductsController@index')->name('Products.Products');
Route::post('/Products/store','ProductsController@store')->name('Products.store');
Route::post('/Products/update','ProductsController@update')->name('Products.update');
Route::post('/Products/destroy','ProductsController@destroy')->name('Products.destroy');
Route::get('/{page}', 'AdminController@index');


