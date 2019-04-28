<?php

// Billing Information
$route = env('PACKAGE_ROUTE', '').'/billing_informations/';
$controller = 'Increment\Account\Http\BillingInformationController@';
Route::post($route.'create', $controller."create");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'update', $controller."update");
Route::post($route.'delete', $controller."delete");
Route::get($route.'test', $controller."test");

// Account Information
$route = env('PACKAGE_ROUTE', '').'/account_informations/';
$controller = 'Increment\Account\Http\AccountInformationController@';
Route::post($route.'create', $controller."create");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'update', $controller."update");
Route::post($route.'delete', $controller."delete");
Route::get($route.'test', $controller."test");

// Account
$route = env('PACKAGE_ROUTE', '').'/accounts/';
$controller = 'Increment\Account\Http\AccountController@';
Route::post($route.'create', $controller."create");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'update', $controller."update");
Route::post($route.'update_verification', $controller."updateByVerification");
Route::post($route.'delete', $controller."delete");
Route::get($route.'test', $controller."test");
Route::post($route.'mail',  $controller."testMail");
Route::post($route.'verify', $controller."verify");
Route::post($route.'request_reset',  $controller."requestReset");


// Account Profile
$route = env('PACKAGE_ROUTE', '').'/account_profiles/';
$controller = 'Increment\Account\Http\AccountProfileController@';
Route::post($route.'create', $controller."create");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'update', $controller."update");
Route::post($route.'delete', $controller."delete");
Route::get($route.'test', $controller."test");
