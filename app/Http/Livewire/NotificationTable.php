<?php

namespace App\Http\Livewire;

use App\Domains\Notification\Models\Notification;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class NotificationTable.
 */
class NotificationTable extends TableComponent
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
        $query = Notification::query();

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
            Column::make(__('type_id'), 'type_id')
,
            Column::make(__('notifiable_id'), 'notifiable_id')
,
            Column::make(__('notifiable_type'), 'notifiable_type')
,
            Column::make(__('data'), 'data')
,
            Column::make(__('read_at'), 'read_at')
,
            Column::make(__('objectable_id'), 'objectable_id')
,
            Column::make(__('objectable_type'), 'objectable_type')
,

            Column::make(__('Actions'))
                ->format(function (Notification $model) {
                    return view('backend.notification.includes.actions',  ['notification' => $model]);
                })
        ];
    }
}