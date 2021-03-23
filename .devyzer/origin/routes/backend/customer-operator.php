<?php

use App\Domains\CustomerOperator\Http\Controllers\Backend\Customeroperator\DeletedCustomeroperatorController;
use App\Domains\CustomerOperator\Http\Controllers\Backend\Customeroperator\CustomeroperatorController;
use App\Domains\CustomerOperator\Models\Customeroperator;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'customeroperator',
    'as' => 'customeroperator.',
], function () {

    Route::get('/', [CustomeroperatorController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Customeroperators'), route('admin.customeroperator.index'));
        });


    Route::get('deleted', [DeletedCustomeroperatorController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.customeroperator.index')
                ->push(__('Deleted  Customeroperators'), route('admin.customeroperator.deleted'));
        });


    Route::get('create', [CustomeroperatorController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.customeroperator.index')
                ->push(__('Create Customeroperator'), route('admin.customeroperator.create'));
        });

    Route::post('/', [CustomeroperatorController::class, 'store'])->name('store');

    Route::group(['prefix' => '{customeroperator}'], function () {
        Route::get('/', [CustomeroperatorController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Customeroperator $customeroperator) {
                $trail->parent('admin.customeroperator.index')
                    ->push($customeroperator->id, route('admin.customeroperator.show', $customeroperator));
            });

        Route::get('edit', [CustomeroperatorController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Customeroperator $customeroperator) {
                $trail->parent('admin.customeroperator.show', $customeroperator)
                    ->push(__('Edit'), route('admin.customeroperator.edit', $customeroperator));
            });

        Route::patch('/', [CustomeroperatorController::class, 'update'])->name('update');
        Route::delete('/', [CustomeroperatorController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedCustomeroperator}'], function () {
        Route::patch('restore', [DeletedCustomeroperatorController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedCustomeroperatorController::class, 'destroy'])->name('permanently-delete');
    });
});