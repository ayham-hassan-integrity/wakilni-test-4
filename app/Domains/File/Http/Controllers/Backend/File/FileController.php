<?php

namespace App\Domains\File\Http\Controllers\Backend\File;

use App\Http\Controllers\Controller;
use App\Domains\File\Models\File;
use App\Domains\File\Services\FileService;
use App\Domains\File\Http\Requests\Backend\File\DeleteFileRequest;
use App\Domains\File\Http\Requests\Backend\File\EditFileRequest;
use App\Domains\File\Http\Requests\Backend\File\StoreFileRequest;
use App\Domains\File\Http\Requests\Backend\File\UpdateFileRequest;

/**
 * Class FileController.
 */
class FileController extends Controller
{
    /**
     * @var FileService
     */
    protected $fileService;

    /**
     * FileController constructor.
     *
     * @param FileService $fileService
     */
    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.file.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.file.create');
    }

    /**
     * @param StoreFileRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreFileRequest $request)
    {
        $file = $this->fileService->store($request->validated());

        return redirect()->route('admin.file.show', $file)->withFlashSuccess(__('The  Files was successfully created.'));
    }

    /**
     * @param File $file
     *
     * @return mixed
     */
    public function show(File $file)
    {
        return view('backend.file.show')
            ->withFile($file);
    }

    /**
     * @param EditFileRequest $request
     * @param File $file
     *
     * @return mixed
     */
    public function edit(EditFileRequest $request, File $file)
    {
        return view('backend.file.edit')
            ->withFile($file);
    }

    /**
     * @param UpdateFileRequest $request
     * @param File $file
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateFileRequest $request, File $file)
    {
        $this->fileService->update($file, $request->validated());

        return redirect()->route('admin.file.show', $file)->withFlashSuccess(__('The  Files was successfully updated.'));
    }

    /**
     * @param DeleteFileRequest $request
     * @param File $file
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteFileRequest $request, File $file)
    {
        $this->fileService->delete($file);

        return redirect()->route('admin.$file.deleted')->withFlashSuccess(__('The  Files was successfully deleted.'));
    }
}