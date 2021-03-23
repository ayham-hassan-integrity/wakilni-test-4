<?php

use App\Domains\Route\Http\Controllers\Backend\Route\DeletedRouteController;
use App\Domains\Route\Http\Controllers\Backend\Route\RouteController;
use App\Domains\Route\Models\Route;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'route',
    'as' => 'route.',
], function () {

    Route::get('/', [RouteController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Routes'), route('admin.route.index'));
        });


    Route::get('deleted', [DeletedRouteController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.route.index')
                ->push(__('Deleted  Routes'), route('admin.route.deleted'));
        });


    Route::get('create', [RouteController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.route.index')
                ->push(__('Create Route'), route('admin.route.create'));
        });

    Route::post('/', [RouteController::class, 'store'])->name('store');

    Route::group(['prefix' => '{route}'], function () {
        Route::get('/', [RouteController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Route $route) {
                $trail->parent('admin.route.index')
                    ->push($route->id, route('admin.route.show', $route));
            });

        Route::get('edit', [RouteController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Route $route) {
                $trail->parent('admin.route.show', $route)
                    ->push(__('Edit'), route('admin.route.edit', $route));
            });

        Route::patch('/', [RouteController::class, 'update'])->name('update');
        Route::delete('/', [RouteController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedRoute}'], function () {
        Route::patch('restore', [DeletedRouteController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedRouteController::class, 'destroy'])->name('permanently-delete');
    });
});