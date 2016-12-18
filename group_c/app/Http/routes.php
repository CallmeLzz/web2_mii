<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* 3 trang */
Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('/list', [
    'as' => 'list',
    'uses' => 'ListController@index'
]);

Route::get('/detail', [
    'as' => 'detail_product',
    'uses' => 'DetailController@index'
]);

Route::get('/admin', [
    'as' => 'admin',
    'uses' => 'Admin\listadminController@welcome'
]);


/* admin Content */
Route::get('/list_content', 'Admin\listadminController@list_content');
Route::get('/exportContent', 'Admin\listadminController@exportContent');
Route::get('/editView', 'Admin\editController@editView');
Route::post('/editData', 'Admin\editController@editData');
Route::get('/delete', 'Admin\deleteController@deleteData');
Route::get('/add', 'Admin\addController@add');
Route::post('/addData', 'Admin\addController@addData');
Route::get('/searchData', 'Admin\searchController@searchData');

/* admin Content_sml */
Route::get('/list_content_sml', 'Admin\listadminController@list_content_sml');
Route::get('/exportContent_sml', 'Admin\listadminController@exportContent_sml');
Route::get('/edit_content_sml', 'Admin\editController@edit_content_sml');
Route::post('/editData_content_sml',  'Admin\editController@editData_content_sml');
Route::get('/delete_content_sml', 'Admin\deleteController@deleteData_content_sml');
Route::get('/add_content_sml', 'Admin\addController@add_content_sml');
Route::post('/addData_content_sml', 'Admin\addController@addData_content_sml');
Route::get('/searchData_content_sml', 'Admin\searchController@searchData_content_sml');

/* admin Content number */
Route::get('/list_content_number', 'Admin\listadminController@list_content_number');
Route::get('/exportContent_number', 'Admin\listadminController@exportContent_number');
Route::get('/edit_content_number', 'Admin\editController@edit_content_number');
Route::post('/editData_content_number', 'Admin\editController@editData_content_number');
Route::get('/delete_content_number', 'Admin\deleteController@deleteData_content_number');
Route::get('/add_content_number', 'Admin\addController@add_content_number');
Route::post('/addData_content_number', 'Admin\addController@addData_content_number');
Route::get('/searchData_content_number', 'Admin\searchController@searchData_content_number');

/* admin Content News */
Route::get('/list_content_news', 'Admin\listadminController@list_content_news');
Route::get('/exportContent_news', 'Admin\listadminController@exportContent_news');
Route::get('/edit_content_news', 'Admin\editController@edit_content_news');
Route::post('/editData_content_news', 'Admin\editController@editData_content_news');
Route::get('/delete_content_news', 'Admin\deleteController@deleteData_content_news');
Route::get('/add_content_news', 'Admin\addController@add_content_news');
Route::post('/addData_content_news', 'Admin\addController@addData_content_news');
Route::get('/searchData_content_news', 'Admin\searchController@searchData_content_news');


/* admin Content Sentences */
Route::get('/list_content_sentences', 'Admin\listadminController@list_content_sentences');
Route::get('/exportContent_sentences', 'Admin\listadminController@exportContent_sentences');
Route::get('/edit_content_sentences', 'Admin\editController@edit_content_sentences');
Route::post('/editData_content_sentences', 'Admin\editController@editData_content_sentences');
Route::get('/delete_content_sentences', 'Admin\deleteController@deleteData_content_sentences');
Route::get('/add_content_sentences', 'Admin\addController@add_content_sentences');
Route::post('/addData_content_sentences', 'Admin\addController@addData_content_sentences');
Route::get('/searchData_content_sentences', 'Admin\searchController@searchData_content_sentences');



/* admin List Top product */
Route::get('/list_top', 'Admin\listadminController@list_top');
Route::get('/exportList_top', 'Admin\listadminController@exportList_top');
Route::get('/edit_list_top', 'Admin\editController@edit_list_top');
Route::post('/editData_list_top', 'Admin\editController@editData_list_top');
Route::get('/delete_list_top', 'Admin\deleteController@delete_list_top');
Route::get('/add_list_top', 'Admin\addController@add_list_top');
Route::post('/addData_list_top', 'Admin\addController@addData_list_top');
Route::get('/searchData_list_top', 'Admin\searchController@searchData_list_top');

/* admin List Product */
Route::get('/list_product', 'Admin\listadminController@list_product');
Route::get('/exportList_product', 'Admin\listadminController@exportList_product');
Route::get('/edit_list_product', 'Admin\editController@edit_list_product');
Route::post('/editData_list_product', 'Admin\editController@editData_list_product');
Route::get('/delete_list_product', 'Admin\deleteController@delete_list_product');
Route::get('/add_list_product', 'Admin\addController@add_list_product');
Route::post('/addData_list_product', 'Admin\addController@addData_list_product');
Route::get('/searchData_list_product', 'Admin\searchController@searchData_list_product');

/* admin Footer Contact */
Route::get('/footer_contacts', 'Admin\listadminController@footer_contacts');
Route::get('/exportFooter_contacts', 'Admin\listadminController@exportFooter_contacts');
Route::get('/edit_footer_contacts', 'Admin\editController@edit_footer_contacts');
Route::post('/editData_footer_contacts', 'Admin\editController@editData_footer_contacts');
Route::get('/delete_footer_contacts', 'Admin\deleteController@delete_footer_contacts');
Route::get('/add_footer_contacts', 'Admin\addController@add_footer_contacts');
Route::post('/addData_footer_contacts', 'Admin\addController@addData_footer_contacts');
Route::get('/searchData_footer_contacts', 'Admin\searchController@searchData_footer_contacts');


/* admin Footer About */
Route::get('/footer_abouts', 'Admin\listadminController@footer_abouts');
Route::get('/exportFooter_abouts', 'Admin\listadminController@exportFooter_abouts');
Route::get('/edit_footer_abouts', 'Admin\editController@edit_footer_abouts');
Route::post('/editData_footer_abouts', 'Admin\editController@editData_footer_abouts');
Route::get('/delete_footer_abouts', 'Admin\deleteController@delete_footer_abouts');
Route::get('/add_footer_abouts', 'Admin\addController@add_footer_abouts');
Route::post('/addData_footer_abouts', 'Admin\addController@addData_footer_abouts');
Route::get('/searchData_footer_abouts', 'Admin\searchController@searchData_footer_abouts');

/* admin Footer Post */
Route::get('/footer_posts', 'Admin\listadminController@footer_posts');
Route::get('/exportFooter_posts', 'Admin\listadminController@exportFooter_posts');
Route::get('/edit_footer_posts', 'Admin\editController@edit_footer_posts');
Route::post('/editData_footer_posts', 'Admin\editController@editData_footer_posts');
Route::get('/delete_footer_posts', 'Admin\deleteController@delete_footer_posts');
Route::get('/add_footer_posts', 'Admin\addController@add_footer_posts');
Route::post('/addData_footer_posts', 'Admin\addController@addData_footer_posts');
Route::get('/searchData_footer_posts', 'Admin\searchController@searchData_footer_posts');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
