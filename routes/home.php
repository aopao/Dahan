<?php

/**
 * 前台界面路由
 */

/**
 * 登录路由
 */
##系统登录路由##
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
##第三方登录路由##
#composer require laravel/socialite
#composer require socialiteproviders/weixin
//TODO::后期添加
##QQ互联登录##
//Route::get('/auth/qq/oauth', 'Auth\AuthQQController@oauth');  //用户点击登录按钮时请求的地址
//Route::get('/auth/qq/callback', 'Auth\AuthQQController@callback'); //QQ登录接口回调地址
//##微信登录##
//Route::get('/auth/weixin/oauth', 'Auth\AuthWeixinController@oauth');  //用户点击登录按钮时请求的地址
//Route::get('/auth/weixin/callback', 'Auth\AuthWeixinController@callback'); //微信登录接口回调地址
//##微博登录##
//Route::get('/auth/weibo/oauth', 'Auth\AuthWeiboController@oauth');  //用户点击登录按钮时请求的地址
//Route::get('/auth/weibo/callback', 'Auth\AuthWeiboController@callback'); //微博登录接口回调地址