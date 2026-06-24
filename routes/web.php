<?php
use App\Http\Controllers\Frontend\CustomerDashboardController;
use App\Http\Controllers\Frontend\SellerDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/project/{id}', [FrontendController::class, 'projectDetail'])->name('project.detail');

Route::group(['middleware' => ['auth:web', 'verified', 'check_role:customer'], 'prefix' => 'customer', 'as' => 'c.'], function () {
    Route::get('/dashboard', [CustomerDashboardController::class, 'index'])->name('dashboard');
});
Route::group(['middleware' => ['auth:web', 'verified', 'check_role:seller'], 'prefix' => 'seller', 'as' => 's.'], function () {
    Route::get('/dashboard', [SellerDashboardController::class, 'index'])->name('dashboard');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/admin/dashboard', function () {
    return view('backend.page.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');
require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
