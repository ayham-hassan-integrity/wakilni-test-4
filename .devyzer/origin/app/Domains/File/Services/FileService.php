<?php

namespace App\Domains\File\Services;

use App\Domains\File\Models\File;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class FileService.
 */
class FileService extends BaseService
{
    /**
     * FileService constructor.
     *
     * @param File $file
     */
    public function __construct(File $file)
    {
        $this->model = $file;
    }

    /**
     * @param array $data
     *
     * @return File
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): File
    {
        DB::beginTransaction();

        try {
            $file = $this->model::create([
                'mime' => $data['mime'],
                'filename' => $data['filename'],
                'size' => $data['size'],
                'storage_path' => $data['storage_path'],
                'disk' => $data['disk'],
                'status' => $data['status'],
                'fileable_id' => $data['fileable_id'],
                'fileable_type' => $data['fileable_type'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this file. Please try again.'));
        }

        DB::commit();

        return $file;
    }

    /**
     * @param File $file
     * @param array $data
     *
     * @return File
     * @throws \Throwable
     */
    public function update(File $file, array $data = []): File
    {
        DB::beginTransaction();

        try {
            $file->update([
                'mime' => $data['mime'],
                'filename' => $data['filename'],
                'size' => $data['size'],
                'storage_path' => $data['storage_path'],
                'disk' => $data['disk'],
                'status' => $data['status'],
                'fileable_id' => $data['fileable_id'],
                'fileable_type' => $data['fileable_type'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this file. Please try again.'));
        }

        DB::commit();

        return $file;
    }

    /**
     * @param File $file
     *
     * @return File
     * @throws GeneralException
     */
    public function delete(File $file): File
    {
        if ($this->deleteById($file->id)) {
            return $file;
        }

        throw new GeneralException('There was a problem deleting this file. Please try again.');
    }

    /**
     * @param File $file
     *
     * @return File
     * @throws GeneralException
     */
    public function restore(File $file): File
    {
        if ($file->restore()) {
            return $file;
        }

        throw new GeneralException(__('There was a problem restoring this  Files. Please try again.'));
    }

    /**
     * @param File $file
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(File $file): bool
    {
        if ($file->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Files. Please try again.'));
    }
}