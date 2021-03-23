<?php

use App\Domains\DriverSubmission\Http\Controllers\Backend\Driversubmission\DeletedDriversubmissionController;
use App\Domains\DriverSubmission\Http\Controllers\Backend\Driversubmission\DriversubmissionController;
use App\Domains\DriverSubmission\Models\Driversubmission;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'driversubmission',
    'as' => 'driversubmission.',
], function () {

    Route::get('/', [DriversubmissionController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Driversubmissions'), route('admin.driversubmission.index'));
        });


    Route::get('deleted', [DeletedDriversubmissionController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.driversubmission.index')
                ->push(__('Deleted  Driversubmissions'), route('admin.driversubmission.deleted'));
        });


    Route::get('create', [DriversubmissionController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.driversubmission.index')
                ->push(__('Create Driversubmission'), route('admin.driversubmission.create'));
        });

    Route::post('/', [DriversubmissionController::class, 'store'])->name('store');

    Route::group(['prefix' => '{driversubmission}'], function () {
        Route::get('/', [DriversubmissionController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Driversubmission $driversubmission) {
                $trail->parent('admin.driversubmission.index')
                    ->push($driversubmission->id, route('admin.driversubmission.show', $driversubmission));
            });

        Route::get('edit', [DriversubmissionController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Driversubmission $driversubmission) {
                $trail->parent('admin.driversubmission.show', $driversubmission)
                    ->push(__('Edit'), route('admin.driversubmission.edit', $driversubmission));
            });

        Route::patch('/', [DriversubmissionController::class, 'update'])->name('update');
        Route::delete('/', [DriversubmissionController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedDriversubmission}'], function () {
        Route::patch('restore', [DeletedDriversubmissionController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedDriversubmissionController::class, 'destroy'])->name('permanently-delete');
    });
});