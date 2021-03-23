<?php

namespace App\Domains\Route\Services;

use App\Domains\Route\Models\Route;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class RouteService.
 */
class RouteService extends BaseService
{
    /**
     * RouteService constructor.
     *
     * @param Route $route
     */
    public function __construct(Route $route)
    {
        $this->model = $route;
    }

    /**
     * @param array $data
     *
     * @return Route
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Route
    {
        DB::beginTransaction();

        try {
            $route = $this->model::create([
                'route' => $data['route'],
                'km/day' => $data['km/day'],
                'today' => $data['today'],
                'driver_id' => $data['driver_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating this route. Please try again.'));
        }

        DB::commit();

        return $route;
    }

    /**
     * @param Route $route
     * @param array $data
     *
     * @return Route
     * @throws \Throwable
     */
    public function update(Route $route, array $data = []): Route
    {
        DB::beginTransaction();

        try {
            $route->update([
                'route' => $data['route'],
                'km/day' => $data['km/day'],
                'today' => $data['today'],
                'driver_id' => $data['driver_id'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this route. Please try again.'));
        }

        DB::commit();

        return $route;
    }

    /**
     * @param Route $route
     *
     * @return Route
     * @throws GeneralException
     */
    public function delete(Route $route): Route
    {
        if ($this->deleteById($route->id)) {
            return $route;
        }

        throw new GeneralException('There was a problem deleting this route. Please try again.');
    }

    /**
     * @param Route $route
     *
     * @return Route
     * @throws GeneralException
     */
    public function restore(Route $route): Route
    {
        if ($route->restore()) {
            return $route;
        }

        throw new GeneralException(__('There was a problem restoring this  Routes. Please try again.'));
    }

    /**
     * @param Route $route
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Route $route): bool
    {
        if ($route->forceDelete()) {
            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this  Routes. Please try again.'));
    }
}