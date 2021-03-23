<?php

use App\Domains\Task\Http\Controllers\Backend\Task\DeletedTaskController;
use App\Domains\Task\Http\Controllers\Backend\Task\TaskController;
use App\Domains\Task\Models\Task;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'task',
    'as' => 'task.',
], function () {

    Route::get('/', [TaskController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Tasks'), route('admin.task.index'));
        });


    Route::get('deleted', [DeletedTaskController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.task.index')
                ->push(__('Deleted  Tasks'), route('admin.task.deleted'));
        });


    Route::get('create', [TaskController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.task.index')
                ->push(__('Create Task'), route('admin.task.create'));
        });

    Route::post('/', [TaskController::class, 'store'])->name('store');

    Route::group(['prefix' => '{task}'], function () {
        Route::get('/', [TaskController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Task $task) {
                $trail->parent('admin.task.index')
                    ->push($task->id, route('admin.task.show', $task));
            });

        Route::get('edit', [TaskController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Task $task) {
                $trail->parent('admin.task.show', $task)
                    ->push(__('Edit'), route('admin.task.edit', $task));
            });

        Route::patch('/', [TaskController::class, 'update'])->name('update');
        Route::delete('/', [TaskController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedTask}'], function () {
        Route::patch('restore', [DeletedTaskController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedTaskController::class, 'destroy'])->name('permanently-delete');
    });
});