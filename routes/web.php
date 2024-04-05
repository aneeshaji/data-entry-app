<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\JobQualityRequirementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Routes For JQR's
    Route::resource('admin/job-quality-requirements', JobQualityRequirementController::class, [
        'names' => [
            // 'store' => 'admin.job-quality-requirements.store',
            'show' => 'admin.job-quality-requirements.show',
            'edit' => 'admin.job-quality-requirements.edit',
            'index' => 'admin.job-quality-requirements'
        ]
    ]);
    Route::post('/admin/job-quality-requirements/saveData', [JobQualityRequirementController::class, 'saveData']);
});

require __DIR__.'/auth.php';
