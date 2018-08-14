<?php




//===============================================================
//
// AUTHENTICATION
//
//===============================================================

Route::get("/login", "LoginController@showLoginForm") -> name("admin.login");
Route::post("/login", "LoginController@login");




Route::group([
  // "middleware" => "auth:admin",
  "as"         => "admin."
], function () {

    //===============================================================
    //
    // DASHBOARD
    //
    //===============================================================

    Route::get("/dashboard", "DashboardController@index") -> name("dashboard");











});