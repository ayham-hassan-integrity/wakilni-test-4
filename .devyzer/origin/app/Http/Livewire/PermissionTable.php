<?php

namespace App\Http\Livewire;

use App\Domains\Permission\Models\Permission;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class PermissionTable.
 */
class PermissionTable extends TableComponent
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
        $query = Permission::query();

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
            Column::make(__('name'), 'name')
,
            Column::make(__('guard_name'), 'guard_name')
,

            Column::make(__('Actions'))
                ->format(function (Permission $model) {
                    return view('backend.permission.includes.actions',  ['permission' => $model]);
                })
        ];
    }
}