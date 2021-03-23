<?php

namespace App\Http\Livewire;

use App\Domains\Comment\Models\Comment;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class CommentTable.
 */
class CommentTable extends TableComponent
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
        $query = Comment::query();

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
            Column::make(__('comment'), 'comment')
,
            Column::make(__('is_public'), 'is_public')
,
            Column::make(__('order_id'), 'order_id')
,
            Column::make(__('user_id'), 'user_id')
,

            Column::make(__('Actions'))
                ->format(function (Comment $model) {
                    return view('backend.comment.includes.actions',  ['comment' => $model]);
                })
        ];
    }
}