<?php

namespace App\Http\Livewire;

use App\Domains\Message\Models\Message;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class MessageTable.
 */
class MessageTable extends TableComponent
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
        $query = Message::query();

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
            Column::make(__('title'), 'title')
,
            Column::make(__('message'), 'message')
,
            Column::make(__('status'), 'status')
,
            Column::make(__('receiver_id'), 'receiver_id')
,
            Column::make(__('sender_id'), 'sender_id')
,
            Column::make(__('content_type_id'), 'content_type_id')
,
            Column::make(__('type_id'), 'type_id')
,
            Column::make(__('location_id'), 'location_id')
,

            Column::make(__('Actions'))
                ->format(function (Message $model) {
                    return view('backend.message.includes.actions',  ['message' => $model]);
                })
        ];
    }
}