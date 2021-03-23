<?php

namespace App\Domains\File\Http\Controllers\Backend\File;

use App\Http\Controllers\Controller;
use App\Domains\File\Models\File;
use App\Domains\File\Services\FileService;

/**
 * Class DeletedFileController.
 */
class DeletedFileController extends Controller
{
    /**
     * @var FileService
     */
    protected $fileService;

    /**
     * DeletedFileController constructor.
     *
     * @param  FileService  $fileService
     */
    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.file.deleted');
    }

    /**
     * @param  File  $deletedFile
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(File $deletedFile)
    {
        $this->fileService->restore($deletedFile);

        return redirect()->route('admin.file.index')->withFlashSuccess(__('The  Files was successfully restored.'));
    }

    /**
     * @param  File  $deletedFile
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(File $deletedFile)
    {
        $this->fileService->destroy($deletedFile);

        return redirect()->route('admin.file.deleted')->withFlashSuccess(__('The  Files was permanently deleted.'));
    }
}