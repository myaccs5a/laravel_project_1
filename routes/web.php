<?php

use Illuminate\Support\Facades\Route;

Route::get('admin/login', 'Admin\LoginController@getLogin')->name('get.login');
Route::post('admin/login', 'Admin\LoginController@postLogin')->name('post.login');
Route::get('/logout', 'Admin\LoginController@logout')->name('get.logout');



Route::group(['prefix' => 'member', 'namespace' => 'Member',], function () {
 Route::get('/' ,'MemberController@index')->name('member.index');
 Route::get('showPost/' ,'MemberController@showPost')->name('showPost');
 Route::get('showDetail/{id}' ,'MemberController@showDetail')->name('showDetail');
 Route::get('/destroy/{$id}' ,'MemberController@destroy')->name('member.destroy');
 Route::post('/store' ,'MemberController@upprofile')->name('update.profile');
});


Route::group(['prefix' => 'home', 'namespace' => 'Admin', 'middleware' => 'checkrole',], function () {
    Route::get('/', 'DashbroadController@index')->name('home');
    Route::get('/profile','DashbroadController@showprofile')->name('profile');

    /*View user route */
    /* Users */
    Route::group(['prefix' => 'users', 'as' => 'users.',], function () {
        Route::get('/', 'UserController@index')->name('index'); // hiển thị tất cả tài nguyên
        Route::get('/create', 'UserController@create')->name('create'); //tạo mới
        Route::post('/store', 'UserController@store')->name('store'); //lưu trữ một tài nguyên mới
        Route::get('/edit/{id}', 'UserController@edit')->name('edit'); // sửa một tài nguyên theo tham số truyền vào
        Route::post('/update', 'UserController@update')->name('update'); //cập nhật 1 tài nguyên theo tham số truyền vào
        Route::post('/destroy/{id}', 'UserController@destroy')->name('destroy'); //xóa 1 tài nguyên
    });
    /* Posts */
    Route::group(['prefix' => 'posts', 'as' => 'posts.',], function () {
        Route::get('/', 'PostsController@index')->name('index'); // hiển thị tất cả tài nguyên
        Route::get('/create', 'PostsController@create')->name('create'); //tạo mới
        Route::post('/store', 'PostsController@store')->name('store'); //lưu trữ một tài nguyên mới
        Route::get('/edit/{id}', 'PostsController@edit')->name('edit'); // sửa một tài nguyên theo tham số truyền vào
        Route::post('/update', 'PostsController@update')->name('update'); //cập nhật 1 tài nguyên theo tham số truyền vào
        Route::post('/destroy/{id}', 'PostsController@destroy')->name('destroy'); //xóa 1 tài nguyên
    });
    /* Categories */
    Route::group(['prefix' => 'categories', 'as' => 'categories.',], function () {
        Route::get('/', 'CategorieController@index')->name('index'); // hiển thị tất cả tài nguyên
        Route::get('/create', 'CategorieController@create')->name('create'); //tạo mới
        Route::post('/store', 'CategorieController@store')->name('store'); //lưu trữ một tài nguyên mới
        Route::get('/edit/{id}', 'CategorieController@edit')->name('edit'); // sửa một tài nguyên theo tham số truyền vào
        Route::post('/update', 'CategorieController@update')->name('update'); //cập nhật 1 tài nguyên theo tham số truyền vào
        Route::post('/destroy/{id}', 'CategorieController@destroy')->name('destroy'); //xóa 1 tài nguyên
    });
    Route::group(['prefix' => 'comments', 'as' => 'comments.',], function () {
        Route::get('/', 'CommentController@index')->name('index'); // hiển thị tất cả tài nguyên
        Route::get('/create', 'CommentController@create')->name('create'); //tạo mới
        Route::post('/store', 'CommentController@store')->name('store'); //lưu trữ một tài nguyên mới
        Route::get('/edit/{id}', 'CommentController@edit')->name('edit'); // sửa một tài nguyên theo tham số truyền vào
        Route::post('/update', 'CommentController@update')->name('update'); //cập nhật 1 tài nguyên theo tham số truyền vào
        Route::post('/destroy/{id}', 'CommentController@destroy')->name('destroy'); //xóa 1 tài nguyên
    });
});
