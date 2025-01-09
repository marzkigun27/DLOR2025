<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('CaAs.loginCaas');
});
Route::get('/landingCaas', function () {
    return view('CaAs.landingCaas');
});
Route::get('/Profile', function () {
    return view('CaAs.Profile');
});
Route::get('/ChangePassword', function () {
    return view('CaAs.ChangePassword');
});
Route::get('/LoginAdmin', function () {
    return view('Admin.loginAdmin');
});

