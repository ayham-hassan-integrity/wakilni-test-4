<?php

use App\Domains\Package\Http\Controllers\Backend\Package\DeletedPackageController;
use App\Domains\Package\Http\Controllers\Backend\Package\PackageController;
use App\Domains\Package\Models\Package;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'package',
    'as' => 'package.',
], function () {

    Route::get('/', [PackageController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Packages'), route('admin.package.index'));
        });


    Route::get('deleted', [DeletedPackageController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.package.index')
                ->push(__('Deleted  Packages'), route('admin.package.deleted'));
        });


    Route::get('create', [PackageController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.package.index')
                ->push(__('Create Package'), route('admin.package.create'));
        });

    Route::post('/', [PackageController::class, 'store'])->name('store');

    Route::group(['prefix' => '{package}'], function () {
        Route::get('/', [PackageController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Package $package) {
                $trail->parent('admin.package.index')
                    ->push($package->id, route('admin.package.show', $package));
            });

        Route::get('edit', [PackageController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Package $package) {
                $trail->parent('admin.package.show', $package)
                    ->push(__('Edit'), route('admin.package.edit', $package));
            });

        Route::patch('/', [PackageController::class, 'update'])->name('update');
        Route::delete('/', [PackageController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedPackage}'], function () {
        Route::patch('restore', [DeletedPackageController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedPackageController::class, 'destroy'])->name('permanently-delete');
    });
});