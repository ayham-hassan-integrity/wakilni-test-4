<?php

use App\Domains\FailedJob\Http\Controllers\Backend\Failedjob\DeletedFailedjobController;
use App\Domains\FailedJob\Http\Controllers\Backend\Failedjob\FailedjobController;
use App\Domains\FailedJob\Models\Failedjob;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'failedjob',
    'as' => 'failedjob.',
], function () {

    Route::get('/', [FailedjobController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Failedjobs'), route('admin.failedjob.index'));
        });


    Route::get('deleted', [DeletedFailedjobController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.failedjob.index')
                ->push(__('Deleted  Failedjobs'), route('admin.failedjob.deleted'));
        });


    Route::get('create', [FailedjobController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.failedjob.index')
                ->push(__('Create Failedjob'), route('admin.failedjob.create'));
        });

    Route::post('/', [FailedjobController::class, 'store'])->name('store');

    Route::group(['prefix' => '{failedjob}'], function () {
        Route::get('/', [FailedjobController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Failedjob $failedjob) {
                $trail->parent('admin.failedjob.index')
                    ->push($failedjob->id, route('admin.failedjob.show', $failedjob));
            });

        Route::get('edit', [FailedjobController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Failedjob $failedjob) {
                $trail->parent('admin.failedjob.show', $failedjob)
                    ->push(__('Edit'), route('admin.failedjob.edit', $failedjob));
            });

        Route::patch('/', [FailedjobController::class, 'update'])->name('update');
        Route::delete('/', [FailedjobController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedFailedjob}'], function () {
        Route::patch('restore', [DeletedFailedjobController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedFailedjobController::class, 'destroy'])->name('permanently-delete');
    });
});