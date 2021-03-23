<?php

use App\Domains\Payment\Http\Controllers\Backend\Payment\DeletedPaymentController;
use App\Domains\Payment\Http\Controllers\Backend\Payment\PaymentController;
use App\Domains\Payment\Models\Payment;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'payment',
    'as' => 'payment.',
], function () {

    Route::get('/', [PaymentController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Payments'), route('admin.payment.index'));
        });


    Route::get('deleted', [DeletedPaymentController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.payment.index')
                ->push(__('Deleted  Payments'), route('admin.payment.deleted'));
        });


    Route::get('create', [PaymentController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.payment.index')
                ->push(__('Create Payment'), route('admin.payment.create'));
        });

    Route::post('/', [PaymentController::class, 'store'])->name('store');

    Route::group(['prefix' => '{payment}'], function () {
        Route::get('/', [PaymentController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Payment $payment) {
                $trail->parent('admin.payment.index')
                    ->push($payment->id, route('admin.payment.show', $payment));
            });

        Route::get('edit', [PaymentController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Payment $payment) {
                $trail->parent('admin.payment.show', $payment)
                    ->push(__('Edit'), route('admin.payment.edit', $payment));
            });

        Route::patch('/', [PaymentController::class, 'update'])->name('update');
        Route::delete('/', [PaymentController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedPayment}'], function () {
        Route::patch('restore', [DeletedPaymentController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedPaymentController::class, 'destroy'])->name('permanently-delete');
    });
});