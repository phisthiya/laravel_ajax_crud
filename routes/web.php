<?php

/**
 * Show Todo Dashboard
 */

Route::get('/', function () {
    return view('ajax.beranda');
});
Route::get('LaravelAjaxCRUD/','TagController@index');
Route::post('LaravelAjaxCRUD/','TagController@store');
Route::get('LaravelAjaxCRUD/{tag_id?}','TagController@edit');
Route::put('LaravelAjaxCRUD/{tag_id?}','TagController@update');
Route::delete('LaravelAjaxCRUD/{tag_id?}','TagController@destroy');





//Route::get('/', 'ItemAjaxController@manageItemAjax');

/**
 *  Show create todo form
 */
Route::get('/todos/create', 'TodoController@create');

/**
 * Add Todo
 */
Route::post('/todos','TodoController@store');

/**
 * Show edit todo
 */
Route::get('todos/{todo}/edit', 'TodoController@edit');

/**
 * update todo
 */
Route::put('todos/{todo}', 'TodoController@update');

/**
 * Delete Todo
 */
Route::get('/todos/{todo}/delete', 'TodoController@delete');


Route::get('manage-item-ajax', 'ItemAjaxController@manageItemAjax');
Route::resource('item-ajax', 'ItemAjaxController');


/**
 * Add Todo
 */
Route::post('manage-item-ajax','ItemAjaxController@store');

/**
 * update todo
 */
Route::put('manage-item-ajax', 'TodoController@update');

/**
 * Delete Todo
 */
Route::get('manage-item-ajax', 'TodoController@destroy');