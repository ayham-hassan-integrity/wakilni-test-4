<?php

namespace App\Domains\ActivityLog\Services;

use App\Domains\ActivityLog\Models\Activitylog;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class ActivitylogService.
 */
class ActivitylogService extends BaseService
{
    /**
     * ActivitylogService constructor.
     *
     * @param Activitylog $activitylog
     */
    public function __construct(Activitylog $activitylog)
    {
        $this->model = $activitylog;
    }

    /**
     * @param array $data
     *
     * @return Activitylog
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Activitylog
    {
        DB::beginTransaction();

        try {
            $activitylog = $this->model::create([
                'log_name' => $data['log_name'],
                'description' => $data['description'],
                'subject_id' => $data['subject_id'],
                'subject_type' => $data['subject_type'],
                'causer_id' => $data['causer_id'],
                'causer_type' => $data['causer_type'],
                'properties' => $data['properties'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this activitylog. Please try again.'));
        }

        DB::commit();

        return $activitylog;
    }

    /**
     * @param Activitylog $activitylog
     * @param array $data
     *
     * @return Activitylog
     * @throws \Throwable
     */
    public function update(Activitylog $activitylog, array $data = []): Activitylog
    {
        DB::beginTransaction();

        try {
            $activitylog->update([
                'log_name' => $data['log_name'],
                'description' => $data['description'],
                'subject_id' => $data['subject_id'],
                'subject_type' => $data['subject_type'],
                'causer_id' => $data['causer_id'],
                'causer_type' => $data['causer_type'],
                'properties' => $data['properties'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this activitylog. Please try again.'));
        }

        DB::commit();

        return $activitylog;
    }

    /**
     * @param Activitylog $activitylog
     *
     * @return Activitylog
     * @throws GeneralException
     */
    public function delete(Activitylog $activitylog): Activitylog
    {
        if ($this->deleteById($activitylog->id)) {
            return $activitylog;
        }

        throw new GeneralException('There was a problem deleting this activitylog. Please try again.');
    }

    /**
     * @param Activitylog $activitylog
     *
     * @return Activitylog
     * @throws GeneralException
     */
    public function restore(Activitylog $activitylog): Activitylog
    {
        if ($activitylog->restore()) {
            return $activitylog;
        }

        throw new GeneralException(__('There was a problem restoring this  Activitylogs. Please try again.'));
    }

    /**
     * @param Activitylog $activitylog
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Activitylog $activitylog): bool
    {
        if ($activitylog->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Activitylogs. Please try again.'));
    }
}