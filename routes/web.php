<?php

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

Route::get("/", "HomeController@index")->name("home.index");
Route::get("artikel/{judul}", "HomeController@article")->name("home.article");
Route::get("jejak/{judul}", "HomeController@jejak")->name("home.jejak");
Route::get("jejak", "HomeController@jejak_index")->name("home.jejak.index");
Route::post("find", "HomeController@find")->name("home.find");
Route::get('news', "HomeController@news")->name('news');

Route::get('find', function() {
    $alumni = "def";
	return view('component.find.index',["alumni"=>$alumni]);
})->name('find');


Route::group(["middleware"=> "LoggedMiddleware"], function(){
    Route::get("login", "LoginController@index")->name("login.index");
    Route::post("login", "LoginController@login")->name("login.login");
});

Route::group(["middleware" => "LoginMiddleware"],function(){
    Route::get("logout", "LoginController@logout")->name("logout");
    Route::prefix("admin")->group(function(){
        Route::get("/", "DashboardController@index")->name("admin.index");
        Route::prefix("berita")->group(function(){
            Route::get("/", "BeritaController@index")->name("admin.berita.index");
            Route::get("edit/{id}", "BeritaController@edit")->name("admin.berita.edit");
            Route::get("add", "BeritaController@add")->name("admin.berita.add");
            Route::get("delte/{id}","BeritaController@delete")->name("admin.berita.delete");
            Route::post("store","BeritaController@store")->name("admin.berita.store");
            Route::post("update/{id}", "BeritaController@update")->name("admin.berita.update");
        });
        Route::prefix("jejak")->group(function(){
            Route::get("/", "JejakController@index")->name("admin.jejak.index");
            Route::get("edit/{id}", "JejakController@edit")->name("admin.jejak.edit");
            Route::get("add", "JejakController@add")->name("admin.jejak.add");
            Route::get("delete/{id}","JejakController@delete")->name("admin.jejak.delete");
            Route::post("store", "JejakController@store")->name("admin.jejak.store");
            Route::post("update/{id}", "JejakController@update")->name("admin.jejak.update");
        });
        Route::prefix("alumni")->group(function(){
            Route::get("/", "AlumniController@index")->name("admin.alumni.index");
            Route::get("add", "AlumniController@add")->name("admin.alumni.add");
            Route::get("edit/{id}", "AlumniController@edit")->name('admin.alumni.edit');
            Route::get("delete/{id}", "AlumniController@delete")->name("admin.alumni.delete");
            Route::post("store", "AlumniController@store")->name('admin.alumni.store');
            Route::post("update/{id}", "AlumniController@update")->name("admin.alumni.update");
        });
    });
});
