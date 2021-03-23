<?php

use App\Domains\ModelHaRole\Http\Controllers\Backend\Modelharole\DeletedModelharoleController;
use App\Domains\ModelHaRole\Http\Controllers\Backend\Modelharole\ModelharoleController;
use App\Domains\ModelHaRole\Models\Modelharole;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'modelharole',
    'as' => 'modelharole.',
], function () {

    Route::get('/', [ModelharoleController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Modelharoles'), route('admin.modelharole.index'));
        });


    Route::get('deleted', [DeletedModelharoleController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.modelharole.index')
                ->push(__('Deleted  Modelharoles'), route('admin.modelharole.deleted'));
        });


    Route::get('create', [ModelharoleController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.modelharole.index')
                ->push(__('Create Modelharole'), route('admin.modelharole.create'));
        });

    Route::post('/', [ModelharoleController::class, 'store'])->name('store');

    Route::group(['prefix' => '{modelharole}'], function () {
        Route::get('/', [ModelharoleController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Modelharole $modelharole) {
                $trail->parent('admin.modelharole.index')
                    ->push($modelharole->id, route('admin.modelharole.show', $modelharole));
            });

        Route::get('edit', [ModelharoleController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Modelharole $modelharole) {
                $trail->parent('admin.modelharole.show', $modelharole)
                    ->push(__('Edit'), route('admin.modelharole.edit', $modelharole));
            });

        Route::patch('/', [ModelharoleController::class, 'update'])->name('update');
        Route::delete('/', [ModelharoleController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedModelharole}'], function () {
        Route::patch('restore', [DeletedModelharoleController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedModelharoleController::class, 'destroy'])->name('permanently-delete');
    });
});