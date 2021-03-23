<?php

use App\Domains\Migration\Http\Controllers\Backend\Migration\DeletedMigrationController;
use App\Domains\Migration\Http\Controllers\Backend\Migration\MigrationController;
use App\Domains\Migration\Models\Migration;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'migration',
    'as' => 'migration.',
], function () {

    Route::get('/', [MigrationController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Migrations'), route('admin.migration.index'));
        });


    Route::get('deleted', [DeletedMigrationController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.migration.index')
                ->push(__('Deleted  Migrations'), route('admin.migration.deleted'));
        });


    Route::get('create', [MigrationController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.migration.index')
                ->push(__('Create Migration'), route('admin.migration.create'));
        });

    Route::post('/', [MigrationController::class, 'store'])->name('store');

    Route::group(['prefix' => '{migration}'], function () {
        Route::get('/', [MigrationController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Migration $migration) {
                $trail->parent('admin.migration.index')
                    ->push($migration->id, route('admin.migration.show', $migration));
            });

        Route::get('edit', [MigrationController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Migration $migration) {
                $trail->parent('admin.migration.show', $migration)
                    ->push(__('Edit'), route('admin.migration.edit', $migration));
            });

        Route::patch('/', [MigrationController::class, 'update'])->name('update');
        Route::delete('/', [MigrationController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedMigration}'], function () {
        Route::patch('restore', [DeletedMigrationController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedMigrationController::class, 'destroy'])->name('permanently-delete');
    });
});