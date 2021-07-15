<?php

Route::name('auth.')->group(function () {
    // 登入
    Route::middleware('guest')->group(function () {
        Route::get('login', 'Auth\AuthenticatedSessionController@login')->name('login');
        Route::post('login', 'Auth\AuthenticatedSessionController@auth')->name('auth');
    });

    // 登出
    Route::get('logout', 'Auth\AuthenticatedSessionController@logout')->middleware('auth')->name('logout');
});
