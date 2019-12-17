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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/coming-soon', 'ComingSoonController@comingSoon')->name('coming_soon');
Route::get('/admin', 'AdminController@admin')->name('admin');
Route::get('/gallery', 'GalleryController@gallery')->name('gallery');
Route::get('/maintenance', 'MaintenanceController@maintenance')->name('maintenance');
Route::get('/blog', 'BlogController@blog')->name('blog');
Route::get('/price-table', 'PriceTableController@priceTable')->name('price_table');
Route::get('/about-team', 'AboutTeamController@aboutTeam')->name('about_team');
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('/team', 'TeamPlainStyleController@teamPlainstyle')->name('team_plain_style');
Route::get('/about-us', 'AboutUsController@aboutUs')->name('about_us');

Route::get('login', 'AdminController@login')->name('login');
Route::post('login', 'AdminController@postLogin')->name('post_login');
Route::get('logout', 'AdminController@logout')->name('logout');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'AdminController@admin')->name('admin.home');
    Route::get('/about-us', 'AdminController@aboutUs')->name('admin.about_us');

    Route::prefix('partners')->group(function(){
        Route::get('/', 'PartnerController@index')->name('admin.partner.index');
        Route::get('/create', 'PartnerController@create')->name('admin.partner.create');
        Route::post('/create', 'PartnerController@store')->name('admin.partner.store');
        Route::get('/{id}', 'PartnerController@show')->name('admin.partner.show');
        Route::get('/edit/{id}', 'PartnerController@edit')->name('admin.partner.edit');
        Route::put('/edit/{id}', 'PartnerController@update')->name('admin.partner.update');
        Route::delete('/{id}', 'PartnerController@destroy')->name('admin.partner.destroy');
    });
});
