<?php

namespace App\Http\Livewire;

use App\Domains\SettingStore\Models\Settingstore;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class SettingstoreTable.
 */
class SettingstoreTable extends TableComponent
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
        $query = Settingstore::query();

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
            Column::make(__('store_id'), 'store_id')
,
            Column::make(__('setting_id'), 'setting_id')
,
            Column::make(__('value'), 'value')
,

            Column::make(__('Actions'))
                ->format(function (Settingstore $model) {
                    return view('backend.setting-store.includes.actions',  ['settingstore' => $model]);
                })
        ];
    }
}