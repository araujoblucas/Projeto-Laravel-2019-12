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
Route::get('/equipe', 'AboutTeamController@aboutTeam')->name('about_team');
Route::get('/contato', 'ContactController@contact')->name('contact');
Route::get('/team', 'TeamPlainStyleController@teamPlainstyle')->name('team_plain_style');
Route::get('/about-us', 'AboutUsController@aboutUs')->name('about_us');
Route::get('login', 'AdminController@login')->name('login');
Route::post('login', 'AdminController@postLogin')->name('post_login');
Route::get('logout', 'AdminController@logout')->name('logout');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/default', 'AdminController@adminConfig')->name('admin_config');
    Route::get('/home', 'AdminController@Home')->name('admin_home');
    Route::post('/home', 'AdminController@HomeUpdate')->name('admin_home');
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
    Route::get('/partnerEditor/{id}/', 'PartnerController@Edit')->name('PartnerEditor');
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
    Route::get('/ImagemCreate', 'AdminController@ImagemCreate')->name('ImagemCreate');
    Route::post('/ImagemCreate', 'AdminController@ImagemStore')->name('ImagemCreate');
    Route::get('/ImagemEditor/{id}/', 'AdminController@ImagemEditor')->name('ImagemEditor');
    Route::post('/ImagemEditor/{id}/', 'AdminController@ImagemUpdate')->name('ImagemUpdate');
    Route::get('/ImagemDelete/{id}/', 'AdminController@ImagemDelete')->name('ImagemDelete');
    Route::get('/faqCreate', 'AdminController@faqCreate')->name('faqCreate');
    Route::post('/faqCreate', 'AdminController@faqStore')->name('faqCreate');
    Route::get('/faqEditor/{id}/', 'AdminController@faqEditor')->name('faqEditor');
    Route::post('/faqEditor/{id}/', 'AdminController@faqUpdate')->name('faqUpdate');
    Route::get('/faqDelete/{id}/', 'AdminController@faqDelete')->name('faqDelete');
    Route::get('/commentCreate', 'AdminController@commentCreate')->name('commentCreate');
    Route::post('/commentCreate', 'AdminController@commentStore')->name('commentCreate');
    Route::get('/commentEditor/{id}/', 'AdminController@commentEditor')->name('commentEditor');
    Route::post('/commentEditor/{id}/', 'AdminController@commentUpdate')->name('commentUpdate');
    Route::get('/commentDelete/{id}/', 'AdminController@commentDelete')->name('commentDelete');


    Route::get('/{id}/', 'AdminController@AdminPostShow')->name('PostShow');

});
