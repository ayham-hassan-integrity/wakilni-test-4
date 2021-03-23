<?php

use App\Domains\File\Http\Controllers\Backend\File\DeletedFileController;
use App\Domains\File\Http\Controllers\Backend\File\FileController;
use App\Domains\File\Models\File;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'file',
    'as' => 'file.',
], function () {

    Route::get('/', [FileController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Files'), route('admin.file.index'));
        });


    Route::get('deleted', [DeletedFileController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.file.index')
                ->push(__('Deleted  Files'), route('admin.file.deleted'));
        });


    Route::get('create', [FileController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.file.index')
                ->push(__('Create File'), route('admin.file.create'));
        });

    Route::post('/', [FileController::class, 'store'])->name('store');

    Route::group(['prefix' => '{file}'], function () {
        Route::get('/', [FileController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, File $file) {
                $trail->parent('admin.file.index')
                    ->push($file->id, route('admin.file.show', $file));
            });

        Route::get('edit', [FileController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, File $file) {
                $trail->parent('admin.file.show', $file)
                    ->push(__('Edit'), route('admin.file.edit', $file));
            });

        Route::patch('/', [FileController::class, 'update'])->name('update');
        Route::delete('/', [FileController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedFile}'], function () {
        Route::patch('restore', [DeletedFileController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedFileController::class, 'destroy'])->name('permanently-delete');
    });
});