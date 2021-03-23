<?php

namespace App\Http\Livewire;

use App\Domains\ActivityLog\Models\Activitylog;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class ActivitylogTable.
 */
class ActivitylogTable extends TableComponent
{
    /**
     * @var string
     */
    public $sortField = 'id';

    /**
     * @var string
     */
    public $status;

    /**
     * @param string $status
     */
    public function mount($status = null): void
    {
        $this->status = $status;
    }

    /**
     * @return Builder
     */
    public function query(): Builder
    {
        $query = Activitylog::query();

        if ($this->status === 'deleted') {
            return $query->onlyTrashed();
        }

        return $query;
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            Column::make(__('id'), 'id')
,
            Column::make(__('log_name'), 'log_name')
,
            Column::make(__('description'), 'description')
,
            Column::make(__('subject_id'), 'subject_id')
,
            Column::make(__('subject_type'), 'subject_type')
,
            Column::make(__('causer_id'), 'causer_id')
,
            Column::make(__('causer_type'), 'causer_type')
,
            Column::make(__('properties'), 'properties')
,

            Column::make(__('Actions'))
                ->format(function (Activitylog $model) {
                    return view('backend.activity-log.includes.actions',  ['activitylog' => $model]);
                })
        ];
    }
}