<?php

namespace App\Http\Livewire;

use App\Domains\AppToken\Models\Apptoken;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class ApptokenTable.
 */
class ApptokenTable extends TableComponent
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
        $query = Apptoken::query();

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
            Column::make(__('shop'), 'shop')
,
            Column::make(__('access_token'), 'access_token')
,
            Column::make(__('customer_id'), 'customer_id')
,
            Column::make(__('app_id'), 'app_id')
,
            Column::make(__('location_id'), 'location_id')
,
            Column::make(__('code'), 'code')
,
            Column::make(__('authenticated'), 'authenticated')
,
            Column::make(__('remember_token'), 'remember_token')
,
            Column::make(__('country_code'), 'country_code')
,
            Column::make(__('extra'), 'extra')
,

            Column::make(__('Actions'))
                ->format(function (Apptoken $model) {
                    return view('backend.app-token.includes.actions',  ['apptoken' => $model]);
                })
        ];
    }
}