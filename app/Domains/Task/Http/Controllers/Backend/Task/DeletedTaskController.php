<?php

namespace App\Domains\Task\Http\Controllers\Backend\Task;

use App\Http\Controllers\Controller;
use App\Domains\Task\Models\Task;
use App\Domains\Task\Services\TaskService;

/**
 * Class DeletedTaskController.
 */
class DeletedTaskController extends Controller
{
    /**
     * @var TaskService
     */
    protected $taskService;

    /**
     * DeletedTaskController constructor.
     *
     * @param  TaskService  $taskService
     */
    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.task.deleted');
    }

    /**
     * @param  Task  $deletedTask
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Task $deletedTask)
    {
        $this->taskService->restore($deletedTask);

        return redirect()->route('admin.task.index')->withFlashSuccess(__('The  Tasks was successfully restored.'));
    }

    /**
     * @param  Task  $deletedTask
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Task $deletedTask)
    {
        $this->taskService->destroy($deletedTask);

        return redirect()->route('admin.task.deleted')->withFlashSuccess(__('The  Tasks was permanently deleted.'));
    }
}