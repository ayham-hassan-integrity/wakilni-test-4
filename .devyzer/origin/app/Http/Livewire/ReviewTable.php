<?php

namespace App\Http\Livewire;

use App\Domains\Review\Models\Review;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class ReviewTable.
 */
class ReviewTable extends TableComponent
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
        $query = Review::query();

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
            Column::make(__('order_id'), 'order_id')
,
            Column::make(__('customer_id'), 'customer_id')
,
            Column::make(__('recipient_id'), 'recipient_id')
,
            Column::make(__('rate'), 'rate')
,
            Column::make(__('feedback_message'), 'feedback_message')
,
            Column::make(__('viewed'), 'viewed')
,

            Column::make(__('Actions'))
                ->format(function (Review $model) {
                    return view('backend.review.includes.actions',  ['review' => $model]);
                })
        ];
    }
}