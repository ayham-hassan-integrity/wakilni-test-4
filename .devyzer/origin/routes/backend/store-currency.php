<?php

use App\Domains\StoreCurrency\Http\Controllers\Backend\Storecurrency\DeletedStorecurrencyController;
use App\Domains\StoreCurrency\Http\Controllers\Backend\Storecurrency\StorecurrencyController;
use App\Domains\StoreCurrency\Models\Storecurrency;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'storecurrency',
    'as' => 'storecurrency.',
], function () {

    Route::get('/', [StorecurrencyController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Storecurrencies'), route('admin.storecurrency.index'));
        });


    Route::get('deleted', [DeletedStorecurrencyController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.storecurrency.index')
                ->push(__('Deleted  Storecurrencies'), route('admin.storecurrency.deleted'));
        });


    Route::get('create', [StorecurrencyController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.storecurrency.index')
                ->push(__('Create Storecurrency'), route('admin.storecurrency.create'));
        });

    Route::post('/', [StorecurrencyController::class, 'store'])->name('store');

    Route::group(['prefix' => '{storecurrency}'], function () {
        Route::get('/', [StorecurrencyController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Storecurrency $storecurrency) {
                $trail->parent('admin.storecurrency.index')
                    ->push($storecurrency->id, route('admin.storecurrency.show', $storecurrency));
            });

        Route::get('edit', [StorecurrencyController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Storecurrency $storecurrency) {
                $trail->parent('admin.storecurrency.show', $storecurrency)
                    ->push(__('Edit'), route('admin.storecurrency.edit', $storecurrency));
            });

        Route::patch('/', [StorecurrencyController::class, 'update'])->name('update');
        Route::delete('/', [StorecurrencyController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedStorecurrency}'], function () {
        Route::patch('restore', [DeletedStorecurrencyController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedStorecurrencyController::class, 'destroy'])->name('permanently-delete');
    });
});