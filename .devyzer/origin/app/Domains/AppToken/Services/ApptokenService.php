<?php

namespace App\Domains\AppToken\Services;

use App\Domains\AppToken\Models\Apptoken;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class ApptokenService.
 */
class ApptokenService extends BaseService
{
    /**
     * ApptokenService constructor.
     *
     * @param Apptoken $apptoken
     */
    public function __construct(Apptoken $apptoken)
    {
        $this->model = $apptoken;
    }

    /**
     * @param array $data
     *
     * @return Apptoken
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Apptoken
    {
        DB::beginTransaction();

        try {
            $apptoken = $this->model::create([
                'shop' => $data['shop'],
                'access_token' => $data['access_token'],
                'customer_id' => $data['customer_id'],
                'app_id' => $data['app_id'],
                'location_id' => $data['location_id'],
                'code' => $data['code'],
                'authenticated' => $data['authenticated'],
                'remember_token' => $data['remember_token'],
                'country_code' => $data['country_code'],
                'extra' => $data['extra'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this apptoken. Please try again.'));
        }

        DB::commit();

        return $apptoken;
    }

    /**
     * @param Apptoken $apptoken
     * @param array $data
     *
     * @return Apptoken
     * @throws \Throwable
     */
    public function update(Apptoken $apptoken, array $data = []): Apptoken
    {
        DB::beginTransaction();

        try {
            $apptoken->update([
                'shop' => $data['shop'],
                'access_token' => $data['access_token'],
                'customer_id' => $data['customer_id'],
                'app_id' => $data['app_id'],
                'location_id' => $data['location_id'],
                'code' => $data['code'],
                'authenticated' => $data['authenticated'],
                'remember_token' => $data['remember_token'],
                'country_code' => $data['country_code'],
                'extra' => $data['extra'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this apptoken. Please try again.'));
        }

        DB::commit();

        return $apptoken;
    }

    /**
     * @param Apptoken $apptoken
     *
     * @return Apptoken
     * @throws GeneralException
     */
    public function delete(Apptoken $apptoken): Apptoken
    {
        if ($this->deleteById($apptoken->id)) {
            return $apptoken;
        }

        throw new GeneralException('There was a problem deleting this apptoken. Please try again.');
    }

    /**
     * @param Apptoken $apptoken
     *
     * @return Apptoken
     * @throws GeneralException
     */
    public function restore(Apptoken $apptoken): Apptoken
    {
        if ($apptoken->restore()) {
            return $apptoken;
        }

        throw new GeneralException(__('There was a problem restoring this  Apptokens. Please try again.'));
    }

    /**
     * @param Apptoken $apptoken
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Apptoken $apptoken): bool
    {
        if ($apptoken->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Apptokens. Please try again.'));
    }
}