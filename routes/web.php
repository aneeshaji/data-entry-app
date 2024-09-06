<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\JobQualityRequirementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/admin/dashboard', [JobQualityRequirementController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/admin/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

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

    // Download pdf
    Route::get('/generate-pdf/{id}', [JobQualityRequirementController::class, 'generatePDF']);

    Route::get('admin/doc-status-report', [JobQualityRequirementController::class, 'docStatusReport']);

    Route::get('admin/get-doc-status-report', [JobQualityRequirementController::class, 'getDocStatusReport']);

    Route::get('admin/view-doc-status-report', [JobQualityRequirementController::class, 'viewDocStatusReport']);

    Route::get('admin/download-doc-status-report', [JobQualityRequirementController::class, 'downloadDocStatusReport']);

    // Download pdf v2 - Short Report
    // Route::get('/generate-pdf-v2/{id}', [JobQualityRequirementController::class, 'generatePDFv2']);

    // AJAX Routes
    Route::post('/admin/job-quality-requirements/saveData', [JobQualityRequirementController::class, 'saveData']);
    Route::post('/admin/job-quality-requirements/saveSpecialData', [JobQualityRequirementController::class, 'saveSpecialData']);
    Route::post('/admin/job-quality-requirements/saveGeneralData', [JobQualityRequirementController::class, 'saveGeneralData']);
    Route::post('/admin/job-quality-requirements/saveServiceData', [JobQualityRequirementController::class, 'saveServiceData']);
    Route::post('/admin/job-quality-requirements/saveStructuralSkidData', [JobQualityRequirementController::class, 'saveStructuralSkidData']);
    Route::post('/admin/job-quality-requirements/savePressureVesselsData', [JobQualityRequirementController::class, 'savePressureVesselsData']);
    Route::post('/admin/job-quality-requirements/saveNoCodeVesselsData', [JobQualityRequirementController::class, 'saveNoCodeVesselsData']);
    Route::post('/admin/job-quality-requirements/saveProcessPipingData', [JobQualityRequirementController::class, 'saveProcessPipingData']);
    Route::post('/admin/job-quality-requirements/saveBoltingData', [JobQualityRequirementController::class, 'saveBoltingData']);
    Route::post('/admin/job-quality-requirements/saveGasketsData', [JobQualityRequirementController::class, 'saveGasketsData']);
    Route::post('/admin/job-quality-requirements/saveTubingData', [JobQualityRequirementController::class, 'saveTubingData']);
    Route::post('/admin/job-quality-requirements/saveButtPipingData', [JobQualityRequirementController::class, 'saveButtPipingData']);
    Route::post('/admin/job-quality-requirements/saveThreadedPipingData', [JobQualityRequirementController::class, 'saveThreadedPipingData']);
    Route::post('/admin/job-quality-requirements/saveElectricalData', [JobQualityRequirementController::class, 'saveElectricalData']);
    Route::post('/admin/job-quality-requirements/savePreservationData', [JobQualityRequirementController::class, 'savePreservationData']);
    Route::post('/admin/job-quality-requirements/savePackageTestingData', [JobQualityRequirementController::class, 'savePackageTestingData']);
});

require __DIR__.'/auth.php';
