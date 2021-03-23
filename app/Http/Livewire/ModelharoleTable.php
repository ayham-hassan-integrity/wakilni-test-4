<?php

namespace App\Http\Livewire;

use App\Domains\ModelHaRole\Models\Modelharole;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class ModelharoleTable.
 */
class ModelharoleTable extends TableComponent
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
        $query = Modelharole::query();

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
            Column::make(__('role_id'), 'role_id')
,
            Column::make(__('model_id'), 'model_id')
,
            Column::make(__('model_type'), 'model_type')
,

            Column::make(__('Actions'))
                ->format(function (Modelharole $model) {
                    return view('backend.model-ha-role.includes.actions',  ['modelharole' => $model]);
                })
        ];
    }
}