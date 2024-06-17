<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/', function (Request $request) {
    return Redirect::route('home', [$request]);
});
Route::get('/about', function () {
    abort(404);
});

Route::get('/home', function (Request $request) {
    return view('home', [$request]);
})->name("home");




Route::prefix('/test')->name('test.')->group(function () {

    Route::get('/laravel', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/blog', function (Request $request) {
        return [
            "id" => $request->input("id", "0"),
            "title" => "Nom titre",
            "contents" => "content's here",
        ];
    })->name("blog");

    Route::get('/{title}-{id}', function (string $title, string $id) {
        return [
            "id" => $id,
            "title" => $title,
            "contents" => "Bonjour contents",
        ];
    })->where([
        'id' => '[0-9]+',
        'title' => '[a-z0-9\-]+',
    ])->name("compose ");

});

