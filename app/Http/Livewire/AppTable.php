<?php

namespace App\Http\Livewire;

use App\Domains\App\Models\App;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class AppTable.
 */
class AppTable extends TableComponent
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
        $query = App::query();

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
            Column::make(__('public'), 'public')
,
            Column::make(__('client_id'), 'client_id')
,
            Column::make(__('client_secret'), 'client_secret')
,
            Column::make(__('random_authentication'), 'random_authentication')
,
            Column::make(__('in_house_development'), 'in_house_development')
,

            Column::make(__('Actions'))
                ->format(function (App $model) {
                    return view('backend.app.includes.actions',  ['app' => $model]);
                })
        ];
    }
}