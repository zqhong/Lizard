<?php
/*
 * This file is part of Lizard.
 *
 * @author zqhong <i@zqhong.com>
 * @date 2016/9/9 8:00
 * @filename forum.php
 * @encoding UTF-8
 */

Route::group(['middleware' => 'web'], function () {
    Auth::routes();

    Route::get('/', [
        'as' => 'home',
        'uses' => 'HomeController@index',
    ]);

    Route::resource('thread', 'ThreadController');
});