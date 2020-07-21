<?php
Route::get('admin-login','Admin\LoginController@AdminLogin')->name('admin.login.get');
Route::post('admin-login','Admin\LoginController@login')->name('admin.login');
Route::get('admin-forgot-password','Admin\ForgotPasswordController@adminLinkRequestForm')->name('admin.forgot.password');
Route::post('admin-forgot-mail','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password-reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin-password-update','Admin\ResetPasswordController@reset')->name('admin.password.update');

Route::group(['middleware'=>'auth:admin'],function(){
    Route::get('dashboard','AdminController@dashboard')->name('admin.dashboard');
    Route::post('admin-logout','AdminController@logout')->name('admin.logout');
});