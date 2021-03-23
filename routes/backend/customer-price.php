<?php

use App\Domains\CustomerPrice\Http\Controllers\Backend\Customerprice\DeletedCustomerpriceController;
use App\Domains\CustomerPrice\Http\Controllers\Backend\Customerprice\CustomerpriceController;
use App\Domains\CustomerPrice\Models\Customerprice;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'customerprice',
    'as' => 'customerprice.',
], function () {

    Route::get('/', [CustomerpriceController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Customerprices'), route('admin.customerprice.index'));
        });


    Route::get('deleted', [DeletedCustomerpriceController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.customerprice.index')
                ->push(__('Deleted  Customerprices'), route('admin.customerprice.deleted'));
        });


    Route::get('create', [CustomerpriceController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.customerprice.index')
                ->push(__('Create Customerprice'), route('admin.customerprice.create'));
        });

    Route::post('/', [CustomerpriceController::class, 'store'])->name('store');

    Route::group(['prefix' => '{customerprice}'], function () {
        Route::get('/', [CustomerpriceController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Customerprice $customerprice) {
                $trail->parent('admin.customerprice.index')
                    ->push($customerprice->id, route('admin.customerprice.show', $customerprice));
            });

        Route::get('edit', [CustomerpriceController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Customerprice $customerprice) {
                $trail->parent('admin.customerprice.show', $customerprice)
                    ->push(__('Edit'), route('admin.customerprice.edit', $customerprice));
            });

        Route::patch('/', [CustomerpriceController::class, 'update'])->name('update');
        Route::delete('/', [CustomerpriceController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedCustomerprice}'], function () {
        Route::patch('restore', [DeletedCustomerpriceController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedCustomerpriceController::class, 'destroy'])->name('permanently-delete');
    });
});