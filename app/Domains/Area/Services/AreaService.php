<?php

namespace App\Domains\Area\Services;

use App\Domains\Area\Models\Area;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class AreaService.
 */
class AreaService extends BaseService
{
    /**
     * AreaService constructor.
     *
     * @param Area $area
     */
    public function __construct(Area $area)
    {
        $this->model = $area;
    }

    /**
     * @param array $data
     *
     * @return Area
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Area
    {
        DB::beginTransaction();

        try {
            $area = $this->model::create([
                'name' => $data['name'],
                'zone_id' => $data['zone_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this area. Please try again.'));
        }

        DB::commit();

        return $area;
    }

    /**
     * @param Area $area
     * @param array $data
     *
     * @return Area
     * @throws \Throwable
     */
    public function update(Area $area, array $data = []): Area
    {
        DB::beginTransaction();

        try {
            $area->update([
                'name' => $data['name'],
                'zone_id' => $data['zone_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this area. Please try again.'));
        }

        DB::commit();

        return $area;
    }

    /**
     * @param Area $area
     *
     * @return Area
     * @throws GeneralException
     */
    public function delete(Area $area): Area
    {
        if ($this->deleteById($area->id)) {
            return $area;
        }

        throw new GeneralException('There was a problem deleting this area. Please try again.');
    }

    /**
     * @param Area $area
     *
     * @return Area
     * @throws GeneralException
     */
    public function restore(Area $area): Area
    {
        if ($area->restore()) {
            return $area;
        }

        throw new GeneralException(__('There was a problem restoring this  Areas. Please try again.'));
    }

    /**
     * @param Area $area
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Area $area): bool
    {
        if ($area->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Areas. Please try again.'));
    }
}