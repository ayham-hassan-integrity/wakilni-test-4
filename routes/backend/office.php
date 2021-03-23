<?php

use App\Domains\Office\Http\Controllers\Backend\Office\DeletedOfficeController;
use App\Domains\Office\Http\Controllers\Backend\Office\OfficeController;
use App\Domains\Office\Models\Office;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'office',
    'as' => 'office.',
], function () {

    Route::get('/', [OfficeController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Offices'), route('admin.office.index'));
        });


    Route::get('deleted', [DeletedOfficeController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.office.index')
                ->push(__('Deleted  Offices'), route('admin.office.deleted'));
        });


    Route::get('create', [OfficeController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.office.index')
                ->push(__('Create Office'), route('admin.office.create'));
        });

    Route::post('/', [OfficeController::class, 'store'])->name('store');

    Route::group(['prefix' => '{office}'], function () {
        Route::get('/', [OfficeController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Office $office) {
                $trail->parent('admin.office.index')
                    ->push($office->id, route('admin.office.show', $office));
            });

        Route::get('edit', [OfficeController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Office $office) {
                $trail->parent('admin.office.show', $office)
                    ->push(__('Edit'), route('admin.office.edit', $office));
            });

        Route::patch('/', [OfficeController::class, 'update'])->name('update');
        Route::delete('/', [OfficeController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedOffice}'], function () {
        Route::patch('restore', [DeletedOfficeController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedOfficeController::class, 'destroy'])->name('permanently-delete');
    });
});