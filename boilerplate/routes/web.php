<?php

// Auth
require __DIR__.'/auth.php';

// 首頁
Route::get('/', function() {
    return 'Welcome!';
})->name('index');

Route::resource('customers', CustomerController::class);
