<?php

namespace App\Http\Livewire;

use App\Domains\File\Models\File;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class FileTable.
 */
class FileTable extends TableComponent
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
        $query = File::query();

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
            Column::make(__('mime'), 'mime')
,
            Column::make(__('filename'), 'filename')
,
            Column::make(__('size'), 'size')
,
            Column::make(__('storage_path'), 'storage_path')
,
            Column::make(__('disk'), 'disk')
,
            Column::make(__('status'), 'status')
,
            Column::make(__('fileable_id'), 'fileable_id')
,
            Column::make(__('fileable_type'), 'fileable_type')
,

            Column::make(__('Actions'))
                ->format(function (File $model) {
                    return view('backend.file.includes.actions',  ['file' => $model]);
                })
        ];
    }
}