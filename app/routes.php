<?php

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'))->before('auth');
Route::post('/',array('uses' => 'HomeController@postIndex'))->before('csrf');
Route::get('/new' , array('as' => 'new','uses' =>'HomeController@getNew'));
Route::get('/delete/{task}', array('as' =>'delete','uses' => 'HomeController@getDelete'));
Route::post('/new',array('uses' =>'HomeController@postNew'))->before('csrf');
Route::get('/login', array('as' => 'login', 'uses' => 'AuthController@getLogin'))->before('guest');
Route::post('login' , array('uses' =>'AuthController@postLogin'))->before('csrf');