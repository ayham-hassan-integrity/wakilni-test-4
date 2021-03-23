<?php

use App\Domains\CustomerCurrency\Http\Controllers\Backend\Customercurrency\DeletedCustomercurrencyController;
use App\Domains\CustomerCurrency\Http\Controllers\Backend\Customercurrency\CustomercurrencyController;
use App\Domains\CustomerCurrency\Models\Customercurrency;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'customercurrency',
    'as' => 'customercurrency.',
], function () {

    Route::get('/', [CustomercurrencyController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Customercurrencies'), route('admin.customercurrency.index'));
        });


    Route::get('deleted', [DeletedCustomercurrencyController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.customercurrency.index')
                ->push(__('Deleted  Customercurrencies'), route('admin.customercurrency.deleted'));
        });


    Route::get('create', [CustomercurrencyController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.customercurrency.index')
                ->push(__('Create Customercurrency'), route('admin.customercurrency.create'));
        });

    Route::post('/', [CustomercurrencyController::class, 'store'])->name('store');

    Route::group(['prefix' => '{customercurrency}'], function () {
        Route::get('/', [CustomercurrencyController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Customercurrency $customercurrency) {
                $trail->parent('admin.customercurrency.index')
                    ->push($customercurrency->id, route('admin.customercurrency.show', $customercurrency));
            });

        Route::get('edit', [CustomercurrencyController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Customercurrency $customercurrency) {
                $trail->parent('admin.customercurrency.show', $customercurrency)
                    ->push(__('Edit'), route('admin.customercurrency.edit', $customercurrency));
            });

        Route::patch('/', [CustomercurrencyController::class, 'update'])->name('update');
        Route::delete('/', [CustomercurrencyController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedCustomercurrency}'], function () {
        Route::patch('restore', [DeletedCustomercurrencyController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedCustomercurrencyController::class, 'destroy'])->name('permanently-delete');
    });
});