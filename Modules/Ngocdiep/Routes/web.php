<?php

Route::group(['middleware' => ['web'], 'prefix' => ''], function()
{

    Route::get('', 'FrontendController@homepage')->name('trangchu');


    Route::get('/loai-cong-nghe/{id}/{slug}', 'FrontendController@getLoaicongnghe')->name('loaicongnghe');
    Route::get('/cong-nghe/{id}/{slug}', 'FrontendController@getCongnghe')->name('congnghe');
    Route::get('/san-pham/{id}/{slug}', 'FrontendController@getSanpham')->name('sanpham');
    Route::get('/loai-san-pham/{id}/{slug}', 'FrontendController@getLoaisanpham')->name('loaisanpham');
    Route::get('/loai-du-an/{id}/{slug}', 'FrontendController@getLoaiduan')->name('loaiduan');
    Route::get('/du-an/{id}/{slug}', 'FrontendController@getDuan')->name('duan');
    Route::get('/tin-tuc', 'FrontendController@getTintuc')->name('tintuc.list');
    Route::get('/tin-tuc/{id}/{slug}', 'FrontendController@getTintucdetail')->name('tintuc');
    Route::get('/gioi-thieu', 'FrontendController@getGioithieu')->name('gioithieu');
    Route::get('/tuyen-dung', 'FrontendController@getTuyendung')->name('tuyendung');
    Route::get('/sitemap', 'FrontendController@getSitemap')->name('sitemap');
    Route::get('/catalogs', 'FrontendController@getCatalogs')->name('catalogs');

    Route::get('/page/{id}/{slug?}', 'FrontendController@getPage')->name('get.page');
    Route::get('/search', 'FrontendController@getSearch')->name('search');

    Route::get('/lien-he', 'FrontendController@getLienhe')->name('lienhe');
    Route::post('/lien-he', 'FrontendController@postLienhe')->name('post.lienhe');
    Route::get('/lien-he-thanh-cong', 'FrontendController@getLienhethanhcong')->name('get.thanhcong');

});
