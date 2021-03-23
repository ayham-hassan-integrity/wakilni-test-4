<?php

use App\Domains\Barcode\Http\Controllers\Backend\Barcode\DeletedBarcodeController;
use App\Domains\Barcode\Http\Controllers\Backend\Barcode\BarcodeController;
use App\Domains\Barcode\Models\Barcode;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'barcode',
    'as' => 'barcode.',
], function () {

    Route::get('/', [BarcodeController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Barcodes'), route('admin.barcode.index'));
        });


    Route::get('deleted', [DeletedBarcodeController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.barcode.index')
                ->push(__('Deleted  Barcodes'), route('admin.barcode.deleted'));
        });


    Route::get('create', [BarcodeController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.barcode.index')
                ->push(__('Create Barcode'), route('admin.barcode.create'));
        });

    Route::post('/', [BarcodeController::class, 'store'])->name('store');

    Route::group(['prefix' => '{barcode}'], function () {
        Route::get('/', [BarcodeController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Barcode $barcode) {
                $trail->parent('admin.barcode.index')
                    ->push($barcode->id, route('admin.barcode.show', $barcode));
            });

        Route::get('edit', [BarcodeController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Barcode $barcode) {
                $trail->parent('admin.barcode.show', $barcode)
                    ->push(__('Edit'), route('admin.barcode.edit', $barcode));
            });

        Route::patch('/', [BarcodeController::class, 'update'])->name('update');
        Route::delete('/', [BarcodeController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedBarcode}'], function () {
        Route::patch('restore', [DeletedBarcodeController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedBarcodeController::class, 'destroy'])->name('permanently-delete');
    });
});