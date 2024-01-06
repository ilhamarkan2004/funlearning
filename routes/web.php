<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\BlogController;
use App\Models\Galery;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
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

    $galerys = Galery::get();
    return view('dashboard', [
        'galerys' => $galerys
    ]);
});



Route::get('/dashboard', function () {
    if (Auth::user()->role == 'admin') {
        return view('admin.dashboard');
    } else {
        $galerys = Galery::get();
        return view('dashboard', [
            'galerys' => $galerys
        ]);
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('apps', AppController::class)->middleware('auth');
Route::resource('galery', GaleryController::class)->middleware('auth');
Route::resource('blog', BlogController::class)->middleware('auth');
Route::resource('market', MarketController::class);
Route::resource('contact', ContactController::class);
Route::resource('keranjang', KeranjangController::class)->middleware('auth');
Route::get('/koleksi', [KeranjangController::class, 'koleksi'])->name('keranjang.koleksi')->middleware('auth');
Route::get('/transaction/{keranjang}', [KeranjangController::class, 'show'])->middleware('auth');
Route::get('/artikel', function () {
    $populers = Blog::take(4)->orderBy('created_at', 'desc')->get();
    $blogs = Blog::get();
    return view('cardblog', [
        'blogs' => $blogs,
        'populers' => $populers
    ]);
});
Route::get('/artikel/{id}', function ($id) {
    $blog = Blog::find($id);
    $artikels = Blog::orderBy('created_at', 'desc')->get();

    if (!$blog) {
        abort(404);
    }

    return view('blog', [
        'blog' => $blog,
        'artikels' => $artikels
    ]);
});


Route::get('/tes', function () {
    return view('blog');
});



// Route::put('/pembelian/{pembelianId}/update-status/{status}', 'PembelianController@updateStatus')
//     ->name('pembelian.updateStatus');

// Route::get('/kontributor/{buku}/create', [KontributorController::class, 'create'])->middleware('auth')->name('kontributor.create');
// Route::resource('kontributor/{buku}',KontributorController::class)->middleware('auth');

// Route::get('/kontributor/create',[KontributorController::class, 'create'])->name('kontributor.create');
// Route::get('/kontributor/create', [KontributorController::class, 'create'])->middleware('auth')->name('kontributor.create');
// Route::get('/kontributor/{kontributor}/edit', [KontributorController::class, 'edit'])->name('kontributor.edit')->middleware('auth');
// Route::delete('/kontributor/{kontributor}', [KontributorController::class, 'destroy'])->name('kontributor.destroy')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth::routes(['verified' => true]);

require __DIR__ . '/auth.php';
