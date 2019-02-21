<?php

Route::group(['middleware' => ['web'], 'prefix' => 'anphat'], function()
{

    Route::get('', 'FrontendController@homepage')->name('homepage');


    Route::get('/loai-cong-nghe/{id}/{slug}', 'FrontendController@getLoaicongnghe')->name('frontend.loaicongnghe');
    Route::get('/cong-nghe/{id}/{slug}', 'FrontendController@getCongnghe')->name('frontend.congnghe');
    Route::get('/san-pham/{id}/{slug}', 'FrontendController@getSanpham')->name('frontend.sanpham');
    Route::get('/loai-san-pham/{id}/{slug}', 'FrontendController@getLoaisanpham')->name('frontend.loaisanpham');
    Route::get('/loai-du-an/{id}/{slug}', 'FrontendController@getLoaiduan')->name('frontend.loaiduan');
    Route::get('/du-an/{id}/{slug}', 'FrontendController@getDuan')->name('frontend.duan');
    Route::get('/tin-tuc', 'FrontendController@getTintuc')->name('frontend.tintuc.list');
    Route::get('/tin-tuc/{id}/{slug}', 'FrontendController@getTintucdetail')->name('frontend.tintuc');


    Route::get('/page/{id}/{slug?}', 'FrontendController@getPage')->name('frontend.get.page');
    Route::get('/search', 'FrontendController@getSearch')->name('frontend.search');

    Route::get('/lien-he', 'FrontendController@getLienhe')->name('frontend.lienhe');
    Route::post('/lien-he', 'FrontendController@postLienhe')->name('frontend.post.lienhe');
    Route::get('/lien-he-thanh-cong', 'FrontendController@getLienhethanhcong')->name('frontend.get.thanhcong');

});
