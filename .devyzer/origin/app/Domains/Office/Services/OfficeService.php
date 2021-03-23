<?php

namespace App\Domains\Office\Services;

use App\Domains\Office\Models\Office;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class OfficeService.
 */
class OfficeService extends BaseService
{
    /**
     * OfficeService constructor.
     *
     * @param Office $office
     */
    public function __construct(Office $office)
    {
        $this->model = $office;
    }

    /**
     * @param array $data
     *
     * @return Office
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Office
    {
        DB::beginTransaction();

        try {
            $office = $this->model::create([
                'name' => $data['name'],
                'area' => $data['area'],
                'store_id' => $data['store_id'],
                'phone_number' => $data['phone_number'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this office. Please try again.'));
        }

        DB::commit();

        return $office;
    }

    /**
     * @param Office $office
     * @param array $data
     *
     * @return Office
     * @throws \Throwable
     */
    public function update(Office $office, array $data = []): Office
    {
        DB::beginTransaction();

        try {
            $office->update([
                'name' => $data['name'],
                'area' => $data['area'],
                'store_id' => $data['store_id'],
                'phone_number' => $data['phone_number'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this office. Please try again.'));
        }

        DB::commit();

        return $office;
    }

    /**
     * @param Office $office
     *
     * @return Office
     * @throws GeneralException
     */
    public function delete(Office $office): Office
    {
        if ($this->deleteById($office->id)) {
            return $office;
        }

        throw new GeneralException('There was a problem deleting this office. Please try again.');
    }

    /**
     * @param Office $office
     *
     * @return Office
     * @throws GeneralException
     */
    public function restore(Office $office): Office
    {
        if ($office->restore()) {
            return $office;
        }

        throw new GeneralException(__('There was a problem restoring this  Offices. Please try again.'));
    }

    /**
     * @param Office $office
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Office $office): bool
    {
        if ($office->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Offices. Please try again.'));
    }
}