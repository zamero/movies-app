<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\regUserController;
use App\Models\User;
use App\Models\Film;
use Illuminate\Support\Facades\Auth;
use App\Models\Watchlist;
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


//Följande funktion borde ligga i RegisteredUserController.php under en readAll()-funktion kanske?
Route::get('/dashboard', function () {
    $users = User::all();
    return view('dashboard', ["users" => $users]);
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    $users = User::all();
    return view('home', ["users" => $users]);
});


Route::get('/helpcenter', function () {
    $user_id = null;
    if (Auth::check()) {
        $user_id = Auth::user()->id;
    }
    return view('helpcenter', ["user_id" => $user_id]);
});


Route::get('/kategori', function () {
    return view('kategori');
});


Route::get('/film-view', function () {
    return view('film-view');
});

Route::get('/user', function () {
    if (Auth::check()) {
        $user_id = Auth::user()->id;
    }
    return view('user', ['user_id' => $user_id]);
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/forgot-password', function () {
    return view('forgotpass');
});

Route::get('/movie', function () {
    $users = User::all();
    return view('movie', ["users" => $users])->name('movie');
});

Route::get('/show', function () {
    $users = User::all();
    return view('show', ["users" => $users])->name('show');
});

Route::get('/watchlist', function () {
    $users = User::all();
    return view('watchlist', ["users" => $users])->name('watchlist');
});;




Route::post('add-comment/{id}', [RegisteredUserController::class, 'add_comment'])->name('add-comment');

route::get('/film-view', [RegisteredUserController::class, 'filmview']);



Route::post('movie/add-movie', [RegisteredUserController::class, 'createMovie'])->middleware(['auth', 'verified'])->name('add.movie'); // Test route!
Route::post('movie/add-show', [RegisteredUserController::class, 'createShow'])->middleware(['auth', 'verified'])->name('add.show');
Route::get('/movie', [RegisteredUserController::class, 'readAllMovies'])->name('movie');
Route::get('/show', [RegisteredUserController::class, 'readAllShows'])->name('show');


Route::delete('movie/deletemovie/{id}', [RegisteredUserController::class, "deleteMovies"])->middleware(['auth', 'verified'])->name('movie.delete');
Route::delete('dashboard/d/{id}', [RegisteredUserController::class, "deleteUser"])->middleware(['auth', 'verified'])->name('user.delete');
Route::put('dashboard/admin/{id}', [RegisteredUserController::class, "makeAdmin"])->middleware(['auth', 'verified'])->name('user.admin');
Route::delete('show/deleteshow/{id}', [RegisteredUserController::class, "deleteShows"])->middleware(['auth', 'verified'])->name('show.delete');
Route::delete('comments/{id}', [RegisteredUserController::class, "deleteComment"])->name('comment.delete');
Route::get('/kategori', [RegisteredUserController::class, "displayGenre"]);
Route::get('film-view/{id}', [RegisteredUserController::class, "filmView"])->name('film-view');
Route::get('/editmovie/{id}', [RegisteredUserController::class, 'showMovie'])->middleware(['auth', 'verified'])->name('edit.movie');
Route::get('/editshow/{id}', [RegisteredUserController::class, 'showShow'])->middleware(['auth', 'verified'])->name('edit.show');
Route::post('/editmovie', [RegisteredUserController::class, 'updateMovie'])->middleware(['auth', 'verified']);
Route::post('/editshow', [RegisteredUserController::class, 'updateShow'])->middleware(['auth', 'verified']);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/', [RegisteredUserController::class, 'home'])->name('home');

Route::post('add-watchlist', [RegisteredUserController::class, 'storeWatchlist'])->name('add-watchlist');
Route::delete('delete-watchlist/{id}', [RegisteredUserController::class, 'destroyWatchlist'])->name('delete-watchlist');

///////////////////////////////////////////////////////////////////////

// Route::get('/watchlist', function () {
//     $users = User::all();
//     return view('watchlist', ["users" => $users])->name('watchlist');
// });;

Route::get('watchlist{id}', [RegisteredUserController::class, 'readAllWatchlist'])->middleware(['auth', 'verified'])->name('watchlist');
// Route::get('watchlist', [RegisteredUserController::class, 'readAllWatchlist'])->name('watchlist');

require __DIR__ . '/auth.php';
