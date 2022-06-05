<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('UserSite.Pages.Home');
});
Route::get('/doctorProfile', function () {
    return view('UserSite.Pages.doctorProfile');
});
Route::get('/newsAndBlogs', function () {
    return view('UserSite.Pages.newsAndBlogs');
});
Route::get('/researchAndPublication', function () {
    return view('UserSite.Pages.researchAndPublications');
});

Route::get('/makeAppointment', function () {
    return view('UserSite.Pages.appointment');
});

