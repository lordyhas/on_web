<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
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


Route::get('/', function () {
    return Redirect::route('home', []);
});

Route::get('/about', function () {
    abort(404);
});

Route::get('/home', function (Request $request) {
    return view('home', [$request]);
})->name("home");


Route::prefix('/cours')->name('course.')->group(function () {
    Route::get('/', function (Request $request) {
        return view('course', [$request]);
    })->name("index");

    Route::get('/420-7A4-FE', function (Request $request) {
        abort(404);
    })->name("c420");

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';

Route::prefix('/test-x')->name('test.')->group(function () {

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
    ])->name("compose-x");

});
