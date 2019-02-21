<?php

Route::group(['prefix' => 'admin'], function() {

    config(['session.cookie' => 'dreamhouse_admin_cookie']);

    Route::get('/login', 'BackendLoginController@showLoginForm')->name('backend.login');
    Route::post('/login', 'BackendLoginController@login')->name('backend.login.submit');
    Route::get('/logout', 'BackendLoginController@logout')->name('backend.logout');

    // indexData
    Route::get('/user/indexData', 'UserController@indexData')->name('backend.user.indexData');
    Route::get('/slide/indexData', 'SlideController@indexData')->name('backend.slide.indexData');
    Route::get('/lienhe/indexData', 'LienheController@indexData')->name('backend.lienhe.indexData');
    Route::get('/loaicongnghe/indexData', 'LoaicongngheController@indexData')->name('backend.loaicongnghe.indexData');
    Route::get('/loaisanpham/indexData', 'LoaisanphamController@indexData')->name('backend.loaisanpham.indexData');
    Route::get('/loaiduan/indexData', 'LoaiduanController@indexData')->name('backend.loaiduan.indexData');
    Route::get('/congnghe/indexData', 'CongngheController@indexData')->name('backend.congnghe.indexData');
    Route::get('/sanpham/indexData', 'SanphamController@indexData')->name('backend.sanpham.indexData');
    Route::get('/duan/indexData', 'DuanController@indexData')->name('backend.duan.indexData');
    Route::get('/tintuc/indexData', 'TintucController@indexData')->name('backend.tintuc.indexData');

//    Route::post('/room/image/delete/{room_id}', 'RoomController@deleteImage')->name('backend.room.image.delete');
//    Route::post('/product/image/delete/{product_id}', 'ProductController@deleteImage')->name('backend.product.image.delete');
//    Route::post('/upload', 'ProductController@uploadImage')->name('backend.uploadPhoto');

    Route::group(['middleware' => ['adminLogin']], function() {

        Route::get('/', 'CongngheController@index')->name('backend.dashboard');

        // Management
        Route::get('/user', 'UserController@index')->name('backend.user.index');
        Route::get('/user/create', 'UserController@create')->name('backend.user.create');
        Route::post('/user', 'UserController@store')->name('backend.user.store');
        Route::get('/user/view/{id}', 'UserController@show')->name('backend.user.show');
        Route::get('/user/update/{id}', 'UserController@edit')->name('backend.user.edit');
        Route::put('/user/update/{id}', 'UserController@update')->name('backend.user.update');
        Route::delete('/user/delete/{id}', 'UserController@destroy')->name('backend.user.destroy');

        // Management
        Route::get('/slide', 'SlideController@index')->name('backend.slide.index');
        Route::get('/slide/create', 'SlideController@create')->name('backend.slide.create');
        Route::post('/slide', 'SlideController@store')->name('backend.slide.store');
        Route::get('/slide/view/{id}', 'SlideController@show')->name('backend.slide.show');
        Route::get('/slide/update/{id}', 'SlideController@edit')->name('backend.slide.edit');
        Route::put('/slide/update/{id}', 'SlideController@update')->name('backend.slide.update');
        Route::delete('/slide/delete/{id}', 'SlideController@destroy')->name('backend.slide.destroy');

        // Management
        Route::get('/lienhe', 'LienheController@index')->name('backend.lienhe.index');
        Route::get('/lienhe/create', 'LienheController@create')->name('backend.lienhe.create');
        Route::post('/lienhe', 'LienheController@store')->name('backend.lienhe.store');
        Route::get('/lienhe/view/{id}', 'LienheController@show')->name('backend.lienhe.show');
        Route::get('/lienhe/update/{id}', 'LienheController@edit')->name('backend.lienhe.edit');
        Route::put('/lienhe/update/{id}', 'LienheController@update')->name('backend.lienhe.update');
        Route::delete('/lienhe/delete/{id}', 'LienheController@destroy')->name('backend.lienhe.destroy');

        // Management
        Route::get('/loaicongnghe', 'LoaicongngheController@index')->name('backend.loaicongnghe.index');
        Route::get('/loaicongnghe/create', 'LoaicongngheController@create')->name('backend.loaicongnghe.create');
        Route::post('/loaicongnghe', 'LoaicongngheController@store')->name('backend.loaicongnghe.store');
        Route::get('/loaicongnghe/view/{id}', 'LoaicongngheController@show')->name('backend.loaicongnghe.show');
        Route::get('/loaicongnghe/update/{id}', 'LoaicongngheController@edit')->name('backend.loaicongnghe.edit');
        Route::put('/loaicongnghe/update/{id}', 'LoaicongngheController@update')->name('backend.loaicongnghe.update');
        Route::delete('/loaicongnghe/delete/{id}', 'LoaicongngheController@destroy')->name('backend.loaicongnghe.destroy');

        // Management
        Route::get('/loaisanpham', 'LoaisanphamController@index')->name('backend.loaisanpham.index');
        Route::get('/loaisanpham/create', 'LoaisanphamController@create')->name('backend.loaisanpham.create');
        Route::post('/loaisanpham', 'LoaisanphamController@store')->name('backend.loaisanpham.store');
        Route::get('/loaisanpham/view/{id}', 'LoaisanphamController@show')->name('backend.loaisanpham.show');
        Route::get('/loaisanpham/update/{id}', 'LoaisanphamController@edit')->name('backend.loaisanpham.edit');
        Route::put('/loaisanpham/update/{id}', 'LoaisanphamController@update')->name('backend.loaisanpham.update');
        Route::delete('/loaisanpham/delete/{id}', 'LoaisanphamController@destroy')->name('backend.loaisanpham.destroy');

        // Management
        Route::get('/loaiduan', 'LoaiduanController@index')->name('backend.loaiduan.index');
        Route::get('/loaiduan/create', 'LoaiduanController@create')->name('backend.loaiduan.create');
        Route::post('/loaiduan', 'LoaiduanController@store')->name('backend.loaiduan.store');
        Route::get('/loaiduan/view/{id}', 'LoaiduanController@show')->name('backend.loaiduan.show');
        Route::get('/loaiduan/update/{id}', 'LoaiduanController@edit')->name('backend.loaiduan.edit');
        Route::put('/loaiduan/update/{id}', 'LoaiduanController@update')->name('backend.loaiduan.update');
        Route::delete('/loaiduan/delete/{id}', 'LoaiduanController@destroy')->name('backend.loaiduan.destroy');

        // Management
        Route::get('/congnghe', 'CongngheController@index')->name('backend.congnghe.index');
        Route::get('/congnghe/create', 'CongngheController@create')->name('backend.congnghe.create');
        Route::post('/congnghe', 'CongngheController@store')->name('backend.congnghe.store');
        Route::get('/congnghe/view/{id}', 'CongngheController@show')->name('backend.congnghe.show');
        Route::get('/congnghe/update/{id}', 'CongngheController@edit')->name('backend.congnghe.edit');
        Route::put('/congnghe/update/{id}', 'CongngheController@update')->name('backend.congnghe.update');
        Route::delete('/congnghe/delete/{id}', 'CongngheController@destroy')->name('backend.congnghe.destroy');

        // Management
        Route::get('/sanpham', 'SanphamController@index')->name('backend.sanpham.index');
        Route::get('/sanpham/create', 'SanphamController@create')->name('backend.sanpham.create');
        Route::post('/sanpham', 'SanphamController@store')->name('backend.sanpham.store');
        Route::get('/sanpham/view/{id}', 'SanphamController@show')->name('backend.sanpham.show');
        Route::get('/sanpham/update/{id}', 'SanphamController@edit')->name('backend.sanpham.edit');
        Route::put('/sanpham/update/{id}', 'SanphamController@update')->name('backend.sanpham.update');
        Route::delete('/sanpham/delete/{id}', 'SanphamController@destroy')->name('backend.sanpham.destroy');

        // Management
        Route::get('/duan', 'DuanController@index')->name('backend.duan.index');
        Route::get('/duan/create', 'DuanController@create')->name('backend.duan.create');
        Route::post('/duan', 'DuanController@store')->name('backend.duan.store');
        Route::get('/duan/view/{id}', 'DuanController@show')->name('backend.duan.show');
        Route::get('/duan/update/{id}', 'DuanController@edit')->name('backend.duan.edit');
        Route::put('/duan/update/{id}', 'DuanController@update')->name('backend.duan.update');
        Route::delete('/duan/delete/{id}', 'DuanController@destroy')->name('backend.duan.destroy');

        // Management
        Route::get('/tintuc', 'TintucController@index')->name('backend.tintuc.index');
        Route::get('/tintuc/create', 'TintucController@create')->name('backend.tintuc.create');
        Route::post('/tintuc', 'TintucController@store')->name('backend.tintuc.store');
        Route::get('/tintuc/view/{id}', 'TintucController@show')->name('backend.tintuc.show');
        Route::get('/tintuc/update/{id}', 'TintucController@edit')->name('backend.tintuc.edit');
        Route::put('/tintuc/update/{id}', 'TintucController@update')->name('backend.tintuc.update');
        Route::delete('/tintuc/delete/{id}', 'TintucController@destroy')->name('backend.tintuc.destroy');

    });
});
