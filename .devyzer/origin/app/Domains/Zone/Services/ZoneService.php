<?php

namespace App\Domains\Zone\Services;

use App\Domains\Zone\Models\Zone;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class ZoneService.
 */
class ZoneService extends BaseService
{
    /**
     * ZoneService constructor.
     *
     * @param Zone $zone
     */
    public function __construct(Zone $zone)
    {
        $this->model = $zone;
    }

    /**
     * @param array $data
     *
     * @return Zone
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Zone
    {
        DB::beginTransaction();

        try {
            $zone = $this->model::create([
                'label' => $data['label'],
                'area' => $data['area'],
                'store_id' => $data['store_id'],
                'description' => $data['description'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this zone. Please try again.'));
        }

        DB::commit();

        return $zone;
    }

    /**
     * @param Zone $zone
     * @param array $data
     *
     * @return Zone
     * @throws \Throwable
     */
    public function update(Zone $zone, array $data = []): Zone
    {
        DB::beginTransaction();

        try {
            $zone->update([
                'label' => $data['label'],
                'area' => $data['area'],
                'store_id' => $data['store_id'],
                'description' => $data['description'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this zone. Please try again.'));
        }

        DB::commit();

        return $zone;
    }

    /**
     * @param Zone $zone
     *
     * @return Zone
     * @throws GeneralException
     */
    public function delete(Zone $zone): Zone
    {
        if ($this->deleteById($zone->id)) {
            return $zone;
        }

        throw new GeneralException('There was a problem deleting this zone. Please try again.');
    }

    /**
     * @param Zone $zone
     *
     * @return Zone
     * @throws GeneralException
     */
    public function restore(Zone $zone): Zone
    {
        if ($zone->restore()) {
            return $zone;
        }

        throw new GeneralException(__('There was a problem restoring this  Zones. Please try again.'));
    }

    /**
     * @param Zone $zone
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Zone $zone): bool
    {
        if ($zone->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Zones. Please try again.'));
    }
}