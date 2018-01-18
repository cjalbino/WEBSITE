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
});

Route::get('/index', 'IndexController@showIndex')->name('index');
Route::get('/blog', 'BlogController@showBlog')->name('blog');
Route::get('/contacts', 'ContactsController@showContacts')->name('contacts');
Route::get('/portfolio', 'PortfolioController@showPortfolio')->name('portfolio');
Route::get('/zamboanga_delnorte', 'ZamdelnorteController@showZamdelnorte')->name('zamdelnorte');
Route::get('/zamboanga_delsur', 'ZamdelsurController@showZamdelsur')->name('zamdelsur');
Route::get('/zamboanga_sibugay', 'ZamsibugayController@showZamsibugay')->name('zamsibugay');

