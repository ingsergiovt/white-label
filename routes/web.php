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

Route::get('/', function () {
    return view('index');
})->name('index');



Route::get('/form/{slug?}', 'QuoteController@create')->name('create.quote.company.form');
Route::get('/form', 'QuoteController@create')->name('create.form');

Route::get('/form//vie', 'QuoteController@create')->name('get.form');

Route::get('/edit/quote', 'QuoteController@edit')->name('edit.form');

Route::post('/form/profile', 'QuoteController@store_profile')->name('form.profile.store');
Route::post('/form/vehicle', 'QuoteController@store_vehicle')->name('form.vehicle.store');
Route::post('/form/driver', 'QuoteController@store_driver')->name('form.driver.store');
Route::post('/form/coverage', 'QuoteController@store_quote')->name('form.coverage.store');

Route::get('show/quote/{code}', 'QuoteController@show')->name('quote.show');

Route::get('/tanks', function(){
    return view('quote.thanks');
})->name('thanks');




Auth::routes();
Route::prefix('/admin')->middleware('auth')->group( function () {

    Route::get('/dashboard', 'HomeController@index')->name('home');

    Route::resource('clients','ClientController')->middleware('role:admin_company');
    Route::resource('companies','CompanyController')->middleware('role:super_admin');;

});
// Route::get('/home', 'HomeController@index')->name('home');
// ->middleware('role:company');


