<?php

use App\Domains\Area\Http\Controllers\Backend\Area\DeletedAreaController;
use App\Domains\Area\Http\Controllers\Backend\Area\AreaController;
use App\Domains\Area\Models\Area;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'area',
    'as' => 'area.',
], function () {

    Route::get('/', [AreaController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Areas'), route('admin.area.index'));
        });


    Route::get('deleted', [DeletedAreaController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.area.index')
                ->push(__('Deleted  Areas'), route('admin.area.deleted'));
        });


    Route::get('create', [AreaController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.area.index')
                ->push(__('Create Area'), route('admin.area.create'));
        });

    Route::post('/', [AreaController::class, 'store'])->name('store');

    Route::group(['prefix' => '{area}'], function () {
        Route::get('/', [AreaController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Area $area) {
                $trail->parent('admin.area.index')
                    ->push($area->id, route('admin.area.show', $area));
            });

        Route::get('edit', [AreaController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Area $area) {
                $trail->parent('admin.area.show', $area)
                    ->push(__('Edit'), route('admin.area.edit', $area));
            });

        Route::patch('/', [AreaController::class, 'update'])->name('update');
        Route::delete('/', [AreaController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedArea}'], function () {
        Route::patch('restore', [DeletedAreaController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedAreaController::class, 'destroy'])->name('permanently-delete');
    });
});