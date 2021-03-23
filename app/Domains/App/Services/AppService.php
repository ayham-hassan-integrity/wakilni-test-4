<?php

namespace App\Domains\App\Services;

use App\Domains\App\Models\App;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class AppService.
 */
class AppService extends BaseService
{
    /**
     * AppService constructor.
     *
     * @param App $app
     */
    public function __construct(App $app)
    {
        $this->model = $app;
    }

    /**
     * @param array $data
     *
     * @return App
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): App
    {
        DB::beginTransaction();

        try {
            $app = $this->model::create([
                'name' => $data['name'],
                'public' => $data['public'],
                'client_id' => $data['client_id'],
                'client_secret' => $data['client_secret'],
                'random_authentication' => $data['random_authentication'],
                'in_house_development' => $data['in_house_development'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this app. Please try again.'));
        }

        DB::commit();

        return $app;
    }

    /**
     * @param App $app
     * @param array $data
     *
     * @return App
     * @throws \Throwable
     */
    public function update(App $app, array $data = []): App
    {
        DB::beginTransaction();

        try {
            $app->update([
                'name' => $data['name'],
                'public' => $data['public'],
                'client_id' => $data['client_id'],
                'client_secret' => $data['client_secret'],
                'random_authentication' => $data['random_authentication'],
                'in_house_development' => $data['in_house_development'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this app. Please try again.'));
        }

        DB::commit();

        return $app;
    }

    /**
     * @param App $app
     *
     * @return App
     * @throws GeneralException
     */
    public function delete(App $app): App
    {
        if ($this->deleteById($app->id)) {
            return $app;
        }

        throw new GeneralException('There was a problem deleting this app. Please try again.');
    }

    /**
     * @param App $app
     *
     * @return App
     * @throws GeneralException
     */
    public function restore(App $app): App
    {
        if ($app->restore()) {
            return $app;
        }

        throw new GeneralException(__('There was a problem restoring this  Apps. Please try again.'));
    }

    /**
     * @param App $app
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(App $app): bool
    {
        if ($app->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Apps. Please try again.'));
    }
}