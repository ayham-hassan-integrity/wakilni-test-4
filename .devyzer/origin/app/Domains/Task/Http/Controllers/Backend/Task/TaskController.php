<?php

namespace App\Domains\Task\Http\Controllers\Backend\Task;

use App\Http\Controllers\Controller;
use App\Domains\Task\Models\Task;
use App\Domains\Task\Services\TaskService;
use App\Domains\Task\Http\Requests\Backend\Task\DeleteTaskRequest;
use App\Domains\Task\Http\Requests\Backend\Task\EditTaskRequest;
use App\Domains\Task\Http\Requests\Backend\Task\StoreTaskRequest;
use App\Domains\Task\Http\Requests\Backend\Task\UpdateTaskRequest;

/**
 * Class TaskController.
 */
class TaskController extends Controller
{
    /**
     * @var TaskService
     */
    protected $taskService;

    /**
     * TaskController constructor.
     *
     * @param TaskService $taskService
     */
    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.task.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.task.create');
    }

    /**
     * @param StoreTaskRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreTaskRequest $request)
    {
        $task = $this->taskService->store($request->validated());

        return redirect()->route('admin.task.show', $task)->withFlashSuccess(__('The  Tasks was successfully created.'));
    }

    /**
     * @param Task $task
     *
     * @return mixed
     */
    public function show(Task $task)
    {
        return view('backend.task.show')
            ->withTask($task);
    }

    /**
     * @param EditTaskRequest $request
     * @param Task $task
     *
     * @return mixed
     */
    public function edit(EditTaskRequest $request, Task $task)
    {
        return view('backend.task.edit')
            ->withTask($task);
    }

    /**
     * @param UpdateTaskRequest $request
     * @param Task $task
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $this->taskService->update($task, $request->validated());

        return redirect()->route('admin.task.show', $task)->withFlashSuccess(__('The  Tasks was successfully updated.'));
    }

    /**
     * @param DeleteTaskRequest $request
     * @param Task $task
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteTaskRequest $request, Task $task)
    {
        $this->taskService->delete($task);

        return redirect()->route('admin.$task.deleted')->withFlashSuccess(__('The  Tasks was successfully deleted.'));
    }
}