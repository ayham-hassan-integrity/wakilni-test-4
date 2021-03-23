<?php

namespace App\Domains\LocationLog\Services;

use App\Domains\LocationLog\Models\Locationlog;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class LocationlogService.
 */
class LocationlogService extends BaseService
{
    /**
     * LocationlogService constructor.
     *
     * @param Locationlog $locationlog
     */
    public function __construct(Locationlog $locationlog)
    {
        $this->model = $locationlog;
    }

    /**
     * @param array $data
     *
     * @return Locationlog
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Locationlog
    {
        DB::beginTransaction();

        try {
            $locationlog = $this->model::create([
                'data' => $data['data'],
                'location_id' => $data['location_id'],
                'driver_id' => $data['driver_id'],
                'type_id' => $data['type_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this locationlog. Please try again.'));
        }

        DB::commit();

        return $locationlog;
    }

    /**
     * @param Locationlog $locationlog
     * @param array $data
     *
     * @return Locationlog
     * @throws \Throwable
     */
    public function update(Locationlog $locationlog, array $data = []): Locationlog
    {
        DB::beginTransaction();

        try {
            $locationlog->update([
                'data' => $data['data'],
                'location_id' => $data['location_id'],
                'driver_id' => $data['driver_id'],
                'type_id' => $data['type_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this locationlog. Please try again.'));
        }

        DB::commit();

        return $locationlog;
    }

    /**
     * @param Locationlog $locationlog
     *
     * @return Locationlog
     * @throws GeneralException
     */
    public function delete(Locationlog $locationlog): Locationlog
    {
        if ($this->deleteById($locationlog->id)) {
            return $locationlog;
        }

        throw new GeneralException('There was a problem deleting this locationlog. Please try again.');
    }

    /**
     * @param Locationlog $locationlog
     *
     * @return Locationlog
     * @throws GeneralException
     */
    public function restore(Locationlog $locationlog): Locationlog
    {
        if ($locationlog->restore()) {
            return $locationlog;
        }

        throw new GeneralException(__('There was a problem restoring this  Locationlogs. Please try again.'));
    }

    /**
     * @param Locationlog $locationlog
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Locationlog $locationlog): bool
    {
        if ($locationlog->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Locationlogs. Please try again.'));
    }
}