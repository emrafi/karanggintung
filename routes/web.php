<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CctvController;

Route::get('/', function () {
    return view('frontend.main');
});

Route::get('/pantau', function(){
    return view('frontend.pantau');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/cctv', [CctvController::class, 'index'])->middleware('auth');

require __DIR__.'/auth.php';
