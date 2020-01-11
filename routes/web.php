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
Route::get('/gallery', 'GalleryController@gallery')->name('gallery');
Route::get('/maintenance', 'MaintenanceController@maintenance')->name('maintenance');
Route::get('/blog', 'BlogController@blog')->name('blog');
Route::get('/post/{id}/', 'BlogController@post_show')->name('post_show');
Route::get('/planos', 'PriceTableController@priceTable')->name('price_table');
Route::get('/about-team', 'AboutTeamController@aboutTeam')->name('about_team');
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('/team', 'TeamPlainStyleController@teamPlainstyle')->name('team_plain_style');
Route::get('/about-us', 'AboutUsController@aboutUs')->name('about_us');
Route::get('login', 'AdminController@login')->name('login');
Route::post('login', 'AdminController@postLogin')->name('post_login');
Route::get('logout', 'AdminController@logout')->name('logout');

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/', 'AdminController@adminConfig')->name('admin_config');
    Route::get('/post/{id}/Editor', 'AdminController@Editor')->name('PostEditor');
    Route::get('/post/{id}/postDelete', 'AdminController@postDelete')->name('postDelete');
    Route::post('/post/{id}/postDelete', 'AdminController@postDelete')->name('postDelete');
    Route::put('/post/{id}/PostUpdater', 'AdminController@PostUpdater')->name('PostUpdater');
    Route::post('/post/{id}/PostUpdater', 'AdminController@PostUpdater')->name('PostUpdater');
    Route::get('/post/PostCreator', 'AdminController@PostCreator')->name('PostCreator');
    Route::post('/post/PostCreator', 'AdminController@postStore')->name('PostCreator');
    Route::get('/post/PostList', 'AdminController@PostList')->name('PostList');
    Route::get('/post/{id}/', 'AdminController@AdminPostShow')->name('AdminPostShow');
    Route::get('/about_team', 'AdminController@aboutTeam')->name('admin_about_team');
    Route::post('/about_team', 'AdminController@aboutTeamStore')->name('admin_about_team');
    Route::get('/partnerCreate', 'PartnerController@create')->name('partner_create');
    Route::post('/partnerCreate', 'PartnerController@store')->name('partner_create');
    Route::get('/{id}/partnerEditor', 'PartnerController@Edit')->name('PartnerEditor');
    Route::put('/{id}/PartnerUpdater', 'PartnerController@update')->name('PartnerUpdater');
    Route::get('/partnershow', 'PartnerController@show')->name('partner_show');
    Route::get('/{id}/PartnerDelete', 'PartnerController@destroy')->name('PartnerDelete');
    Route::post('/{id}/PartnerDelete', 'PartnerController@destroy')->name('PartnerDelete');
    Route::get('/contact', 'AdminController@contact')->name('admin_contact');
    Route::post('/contact', 'AdminController@contactUpdate')->name('admin_contact');
    Route::get('/about-us', 'AdminController@aboutUs')->name('admin_about_us');
    Route::post('/about-us', 'AdminController@aboutusUpdate')->name('admin_about_us');
    Route::get('/galeria', 'AdminController@gallery')->name('admin_gallery');
    Route::post('/galeria', 'AdminController@galleryupdate')->name('admin_gallery');
    Route::get('/planos', 'AdminController@price_table')->name('admin_price_table');
    Route::post('/planos', 'AdminController@price_tableUpdate')->name('admin_price_table');

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
