<?php

namespace App\Http\Livewire;

use App\Domains\Driver\Models\Driver;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class DriverTable.
 */
class DriverTable extends TableComponent
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
        $query = Driver::query();

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
            Column::make(__('nationality'), 'nationality')
,
            Column::make(__('color'), 'color')
,
            Column::make(__('has_gps'), 'has_gps')
,
            Column::make(__('has_internet'), 'has_internet')
,
            Column::make(__('status'), 'status')
,
            Column::make(__('user_id'), 'user_id')
,
            Column::make(__('type_id'), 'type_id')
,
            Column::make(__('now_driving'), 'now_driving')
,
            Column::make(__('is_active'), 'is_active')
,

            Column::make(__('Actions'))
                ->format(function (Driver $model) {
                    return view('backend.driver.includes.actions',  ['driver' => $model]);
                })
        ];
    }
}