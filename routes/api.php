<?php

use Illuminate\Http\Request;


//===============================================================
//
// AUTHENTICATION
//
//===============================================================

Route::post("/register", "AuthController@register");
Route::post("/login", "AuthController@login");

/********************** get countries ****************************************/
Route::get('utilities/countries','UtilityController@countries');

/********************** get cities ****************************************/
Route::get('utilities/cities','UtilityController@cities');

/********************** get categories ****************************************/
Route::get('utilities/categories','UtilityController@categories');

/********************** get page ****************************************/
Route::get('utilities/page/{slug}','UtilityController@page');

/********************** get contacts ****************************************/
Route::get('utilities/contacts','UtilityController@contacts');


Route::group(["middleware" => "auth:api"], function () {

    //===============================================================
    //
    // PHONE ACTIVATION
    //
    //===============================================================

    Route::group(["prefix" => "activate/phone"], function () {
        Route::post("/send", "AccountController@sendPhoneActivationCode");
        Route::post("/", "AccountController@activatePhone");
    });
});