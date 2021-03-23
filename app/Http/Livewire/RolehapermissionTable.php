<?php

namespace App\Http\Livewire;

use App\Domains\RoleHaPermission\Models\Rolehapermission;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class RolehapermissionTable.
 */
class RolehapermissionTable extends TableComponent
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
        $query = Rolehapermission::query();

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
            Column::make(__('role_id'), 'role_id')
,

            Column::make(__('Actions'))
                ->format(function (Rolehapermission $model) {
                    return view('backend.role-ha-permission.includes.actions',  ['rolehapermission' => $model]);
                })
        ];
    }
}