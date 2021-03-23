<?php

namespace App\Http\Livewire;

use App\Domains\TelescopeMonitoring\Models\Telescopemonitoring;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class TelescopemonitoringTable.
 */
class TelescopemonitoringTable extends TableComponent
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
        $query = Telescopemonitoring::query();

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
            Column::make(__('tag'), 'tag')
,

            Column::make(__('Actions'))
                ->format(function (Telescopemonitoring $model) {
                    return view('backend.telescope-monitoring.includes.actions',  ['telescopemonitoring' => $model]);
                })
        ];
    }
}