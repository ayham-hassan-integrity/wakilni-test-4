<?php

namespace App\Domains\Route\Http\Controllers\Backend\Route;

use App\Http\Controllers\Controller;
use App\Domains\Route\Models\Route;
use App\Domains\Route\Services\RouteService;

/**
 * Class DeletedRouteController.
 */
class DeletedRouteController extends Controller
{
    /**
     * @var RouteService
     */
    protected $routeService;

    /**
     * DeletedRouteController constructor.
     *
     * @param  RouteService  $routeService
     */
    public function __construct(RouteService $routeService)
    {
        $this->routeService = $routeService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.route.deleted');
    }

    /**
     * @param  Route  $deletedRoute
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Route $deletedRoute)
    {
        $this->routeService->restore($deletedRoute);

        return redirect()->route('admin.route.index')->withFlashSuccess(__('The  Routes was successfully restored.'));
    }

    /**
     * @param  Route  $deletedRoute
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Route $deletedRoute)
    {
        $this->routeService->destroy($deletedRoute);

        return redirect()->route('admin.route.deleted')->withFlashSuccess(__('The  Routes was permanently deleted.'));
    }
}