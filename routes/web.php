<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])
    ->name('admin.dashboard.index');
    Route::get('admin/category', [\App\Http\controllers\CategoryController::class, 'index'])
    ->name('admin.category.index');







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


//resource 
Route::resource('/category', App\Http\Controllers\CategoryController::class, [
    'names' => [
        'index' => 'Category'
    ]
]);