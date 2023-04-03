<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get("/", "FrontEndController@homePage")->name('home');
Route::get("movie/{movie_name}", "FrontEndController@singleMovie")->name('single.movie');
Route::get("genre/{genre}", "FrontEndController@genreMovie")->name('genre.movie');


Route::get("login", "LoginController@loginPage")->name('login');
Route::post("loginSubmited", "LoginController@loginSubmited")->name('loginSubmited');
Route::get("signup", "LoginController@signupPage")->name('signup');
Route::group(['middleware' => 'user_auth'], function () {
    Route::get("logout", "LoginController@logout")->name('logout');
    Route::post("add-rating", "LoginController@addRating")->name('add.rating');
});


Route::get("admin", "AdminController@adminLogin")->name('admin.login');
Route::post("AdminloginSubmited", "AdminController@AdminloginSubmited")->name('AdminloginSubmited');
Route::group(['middleware' => 'admin_auth'], function () {
    Route::get("Dashboard", "AdminController@Dashboard")->name('Dashboard');
    Route::get("admin-logout", "AdminController@adminLogout")->name('admin.logout');
    Route::get("add-movie", "AdminController@addMovie")->name('add.movie');
    Route::post("add-movie-submited", "AdminController@addMovieSubmited")->name('addMovie.submited');
    Route::post("edit-movie-submited", "AdminController@editMovieSubmited")->name('editMovie.submited');
    Route::get("edit-movie/{id}", "AdminController@editMovie")->name('edit.movie');
    Route::get("delete-movie/{id}", "AdminController@deleteSubmited")->name('delete.submited');   

    
});


