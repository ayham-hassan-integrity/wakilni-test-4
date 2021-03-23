<?php

namespace App\Domains\Location\Services;

use App\Domains\Location\Models\Location;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class LocationService.
 */
class LocationService extends BaseService
{
    /**
     * LocationService constructor.
     *
     * @param Location $location
     */
    public function __construct(Location $location)
    {
        $this->model = $location;
    }

    /**
     * @param array $data
     *
     * @return Location
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Location
    {
        DB::beginTransaction();

        try {
            $location = $this->model::create([
                'building' => $data['building'],
                'floor' => $data['floor'],
                'directions' => $data['directions'],
                'longitude' => $data['longitude'],
                'latitude' => $data['latitude'],
                'area_id' => $data['area_id'],
                'personable_id' => $data['personable_id'],
                'personable_type' => $data['personable_type'],
                'type_id' => $data['type_id'],
                'is_active' => $data['is_active'],
                'image_id' => $data['image_id'],
                'app_token_id' => $data['app_token_id'],
                'app_ref_id' => $data['app_ref_id'],
                'voice' => $data['voice'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this location. Please try again.'));
        }

        DB::commit();

        return $location;
    }

    /**
     * @param Location $location
     * @param array $data
     *
     * @return Location
     * @throws \Throwable
     */
    public function update(Location $location, array $data = []): Location
    {
        DB::beginTransaction();

        try {
            $location->update([
                'building' => $data['building'],
                'floor' => $data['floor'],
                'directions' => $data['directions'],
                'longitude' => $data['longitude'],
                'latitude' => $data['latitude'],
                'area_id' => $data['area_id'],
                'personable_id' => $data['personable_id'],
                'personable_type' => $data['personable_type'],
                'type_id' => $data['type_id'],
                'is_active' => $data['is_active'],
                'image_id' => $data['image_id'],
                'app_token_id' => $data['app_token_id'],
                'app_ref_id' => $data['app_ref_id'],
                'voice' => $data['voice'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this location. Please try again.'));
        }

        DB::commit();

        return $location;
    }

    /**
     * @param Location $location
     *
     * @return Location
     * @throws GeneralException
     */
    public function delete(Location $location): Location
    {
        if ($this->deleteById($location->id)) {
            return $location;
        }

        throw new GeneralException('There was a problem deleting this location. Please try again.');
    }

    /**
     * @param Location $location
     *
     * @return Location
     * @throws GeneralException
     */
    public function restore(Location $location): Location
    {
        if ($location->restore()) {
            return $location;
        }

        throw new GeneralException(__('There was a problem restoring this  Locations. Please try again.'));
    }

    /**
     * @param Location $location
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Location $location): bool
    {
        if ($location->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Locations. Please try again.'));
    }
}