<?php

use App\Domains\PiggyBank\Http\Controllers\Backend\Piggybank\DeletedPiggybankController;
use App\Domains\PiggyBank\Http\Controllers\Backend\Piggybank\PiggybankController;
use App\Domains\PiggyBank\Models\Piggybank;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'piggybank',
    'as' => 'piggybank.',
], function () {

    Route::get('/', [PiggybankController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Piggybanks'), route('admin.piggybank.index'));
        });


    Route::get('deleted', [DeletedPiggybankController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.piggybank.index')
                ->push(__('Deleted  Piggybanks'), route('admin.piggybank.deleted'));
        });


    Route::get('create', [PiggybankController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.piggybank.index')
                ->push(__('Create Piggybank'), route('admin.piggybank.create'));
        });

    Route::post('/', [PiggybankController::class, 'store'])->name('store');

    Route::group(['prefix' => '{piggybank}'], function () {
        Route::get('/', [PiggybankController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Piggybank $piggybank) {
                $trail->parent('admin.piggybank.index')
                    ->push($piggybank->id, route('admin.piggybank.show', $piggybank));
            });

        Route::get('edit', [PiggybankController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Piggybank $piggybank) {
                $trail->parent('admin.piggybank.show', $piggybank)
                    ->push(__('Edit'), route('admin.piggybank.edit', $piggybank));
            });

        Route::patch('/', [PiggybankController::class, 'update'])->name('update');
        Route::delete('/', [PiggybankController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedPiggybank}'], function () {
        Route::patch('restore', [DeletedPiggybankController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedPiggybankController::class, 'destroy'])->name('permanently-delete');
    });
});