<?php

use App\Http\Controllers\FrontEnd\HomeController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/generate', function () {
    $publicStoragePath = public_path('storage');

    // Cek apakah symbolic link sudah ada
    if (File::exists($publicStoragePath)) {
        // Hapus symbolic link yang sudah ada
        File::delete($publicStoragePath);
    }

    // Buat symbolic link baru
    Artisan::call('storage:link');

    redirect()->back();
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail/{slug}', [HomeController::class, 'single'])->name('single');


