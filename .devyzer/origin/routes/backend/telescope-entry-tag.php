<?php

use App\Domains\TelescopeEntryTag\Http\Controllers\Backend\Telescopeentrytag\DeletedTelescopeentrytagController;
use App\Domains\TelescopeEntryTag\Http\Controllers\Backend\Telescopeentrytag\TelescopeentrytagController;
use App\Domains\TelescopeEntryTag\Models\Telescopeentrytag;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'telescopeentrytag',
    'as' => 'telescopeentrytag.',
], function () {

    Route::get('/', [TelescopeentrytagController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Telescopeentrytags'), route('admin.telescopeentrytag.index'));
        });


    Route::get('deleted', [DeletedTelescopeentrytagController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.telescopeentrytag.index')
                ->push(__('Deleted  Telescopeentrytags'), route('admin.telescopeentrytag.deleted'));
        });


    Route::get('create', [TelescopeentrytagController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.telescopeentrytag.index')
                ->push(__('Create Telescopeentrytag'), route('admin.telescopeentrytag.create'));
        });

    Route::post('/', [TelescopeentrytagController::class, 'store'])->name('store');

    Route::group(['prefix' => '{telescopeentrytag}'], function () {
        Route::get('/', [TelescopeentrytagController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Telescopeentrytag $telescopeentrytag) {
                $trail->parent('admin.telescopeentrytag.index')
                    ->push($telescopeentrytag->id, route('admin.telescopeentrytag.show', $telescopeentrytag));
            });

        Route::get('edit', [TelescopeentrytagController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Telescopeentrytag $telescopeentrytag) {
                $trail->parent('admin.telescopeentrytag.show', $telescopeentrytag)
                    ->push(__('Edit'), route('admin.telescopeentrytag.edit', $telescopeentrytag));
            });

        Route::patch('/', [TelescopeentrytagController::class, 'update'])->name('update');
        Route::delete('/', [TelescopeentrytagController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedTelescopeentrytag}'], function () {
        Route::patch('restore', [DeletedTelescopeentrytagController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedTelescopeentrytagController::class, 'destroy'])->name('permanently-delete');
    });
});