<?php

use App\Domains\TimeSheet\Http\Controllers\Backend\Timesheet\DeletedTimesheetController;
use App\Domains\TimeSheet\Http\Controllers\Backend\Timesheet\TimesheetController;
use App\Domains\TimeSheet\Models\Timesheet;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'timesheet',
    'as' => 'timesheet.',
], function () {

    Route::get('/', [TimesheetController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Timesheets'), route('admin.timesheet.index'));
        });


    Route::get('deleted', [DeletedTimesheetController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.timesheet.index')
                ->push(__('Deleted  Timesheets'), route('admin.timesheet.deleted'));
        });


    Route::get('create', [TimesheetController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.timesheet.index')
                ->push(__('Create Timesheet'), route('admin.timesheet.create'));
        });

    Route::post('/', [TimesheetController::class, 'store'])->name('store');

    Route::group(['prefix' => '{timesheet}'], function () {
        Route::get('/', [TimesheetController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Timesheet $timesheet) {
                $trail->parent('admin.timesheet.index')
                    ->push($timesheet->id, route('admin.timesheet.show', $timesheet));
            });

        Route::get('edit', [TimesheetController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Timesheet $timesheet) {
                $trail->parent('admin.timesheet.show', $timesheet)
                    ->push(__('Edit'), route('admin.timesheet.edit', $timesheet));
            });

        Route::patch('/', [TimesheetController::class, 'update'])->name('update');
        Route::delete('/', [TimesheetController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedTimesheet}'], function () {
        Route::patch('restore', [DeletedTimesheetController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedTimesheetController::class, 'destroy'])->name('permanently-delete');
    });
});