<?php

use App\Domains\OrderDetail\Http\Controllers\Backend\Orderdetail\DeletedOrderdetailController;
use App\Domains\OrderDetail\Http\Controllers\Backend\Orderdetail\OrderdetailController;
use App\Domains\OrderDetail\Models\Orderdetail;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'orderdetail',
    'as' => 'orderdetail.',
], function () {

    Route::get('/', [OrderdetailController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Orderdetails'), route('admin.orderdetail.index'));
        });


    Route::get('deleted', [DeletedOrderdetailController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.orderdetail.index')
                ->push(__('Deleted  Orderdetails'), route('admin.orderdetail.deleted'));
        });


    Route::get('create', [OrderdetailController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.orderdetail.index')
                ->push(__('Create Orderdetail'), route('admin.orderdetail.create'));
        });

    Route::post('/', [OrderdetailController::class, 'store'])->name('store');

    Route::group(['prefix' => '{orderdetail}'], function () {
        Route::get('/', [OrderdetailController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Orderdetail $orderdetail) {
                $trail->parent('admin.orderdetail.index')
                    ->push($orderdetail->id, route('admin.orderdetail.show', $orderdetail));
            });

        Route::get('edit', [OrderdetailController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Orderdetail $orderdetail) {
                $trail->parent('admin.orderdetail.show', $orderdetail)
                    ->push(__('Edit'), route('admin.orderdetail.edit', $orderdetail));
            });

        Route::patch('/', [OrderdetailController::class, 'update'])->name('update');
        Route::delete('/', [OrderdetailController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedOrderdetail}'], function () {
        Route::patch('restore', [DeletedOrderdetailController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedOrderdetailController::class, 'destroy'])->name('permanently-delete');
    });
});