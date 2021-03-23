<?php

namespace App\Http\Livewire;

use App\Domains\ModelHaPermission\Models\Modelhapermission;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class ModelhapermissionTable.
 */
class ModelhapermissionTable extends TableComponent
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
        $query = Modelhapermission::query();

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
            Column::make(__('permission_id'), 'permission_id')
,
            Column::make(__('model_id'), 'model_id')
,
            Column::make(__('model_type'), 'model_type')
,

            Column::make(__('Actions'))
                ->format(function (Modelhapermission $model) {
                    return view('backend.model-ha-permission.includes.actions',  ['modelhapermission' => $model]);
                })
        ];
    }
}