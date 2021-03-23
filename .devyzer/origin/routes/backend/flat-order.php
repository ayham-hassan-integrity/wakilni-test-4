<?php

use App\Domains\FlatOrder\Http\Controllers\Backend\Flatorder\DeletedFlatorderController;
use App\Domains\FlatOrder\Http\Controllers\Backend\Flatorder\FlatorderController;
use App\Domains\FlatOrder\Models\Flatorder;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'flatorder',
    'as' => 'flatorder.',
], function () {

    Route::get('/', [FlatorderController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Flatorders'), route('admin.flatorder.index'));
        });


    Route::get('deleted', [DeletedFlatorderController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.flatorder.index')
                ->push(__('Deleted  Flatorders'), route('admin.flatorder.deleted'));
        });


    Route::get('create', [FlatorderController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.flatorder.index')
                ->push(__('Create Flatorder'), route('admin.flatorder.create'));
        });

    Route::post('/', [FlatorderController::class, 'store'])->name('store');

    Route::group(['prefix' => '{flatorder}'], function () {
        Route::get('/', [FlatorderController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Flatorder $flatorder) {
                $trail->parent('admin.flatorder.index')
                    ->push($flatorder->id, route('admin.flatorder.show', $flatorder));
            });

        Route::get('edit', [FlatorderController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Flatorder $flatorder) {
                $trail->parent('admin.flatorder.show', $flatorder)
                    ->push(__('Edit'), route('admin.flatorder.edit', $flatorder));
            });

        Route::patch('/', [FlatorderController::class, 'update'])->name('update');
        Route::delete('/', [FlatorderController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedFlatorder}'], function () {
        Route::patch('restore', [DeletedFlatorderController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedFlatorderController::class, 'destroy'])->name('permanently-delete');
    });
});