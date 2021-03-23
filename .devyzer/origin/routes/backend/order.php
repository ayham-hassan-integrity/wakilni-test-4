<?php

use App\Domains\Order\Http\Controllers\Backend\Order\DeletedOrderController;
use App\Domains\Order\Http\Controllers\Backend\Order\OrderController;
use App\Domains\Order\Models\Order;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'order',
    'as' => 'order.',
], function () {

    Route::get('/', [OrderController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Orders'), route('admin.order.index'));
        });


    Route::get('deleted', [DeletedOrderController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.order.index')
                ->push(__('Deleted  Orders'), route('admin.order.deleted'));
        });


    Route::get('create', [OrderController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.order.index')
                ->push(__('Create Order'), route('admin.order.create'));
        });

    Route::post('/', [OrderController::class, 'store'])->name('store');

    Route::group(['prefix' => '{order}'], function () {
        Route::get('/', [OrderController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Order $order) {
                $trail->parent('admin.order.index')
                    ->push($order->id, route('admin.order.show', $order));
            });

        Route::get('edit', [OrderController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Order $order) {
                $trail->parent('admin.order.show', $order)
                    ->push(__('Edit'), route('admin.order.edit', $order));
            });

        Route::patch('/', [OrderController::class, 'update'])->name('update');
        Route::delete('/', [OrderController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedOrder}'], function () {
        Route::patch('restore', [DeletedOrderController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedOrderController::class, 'destroy'])->name('permanently-delete');
    });
});