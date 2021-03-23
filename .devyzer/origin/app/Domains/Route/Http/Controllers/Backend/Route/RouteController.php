<?php

namespace App\Domains\Route\Http\Controllers\Backend\Route;

use App\Http\Controllers\Controller;
use App\Domains\Route\Models\Route;
use App\Domains\Route\Services\RouteService;
use App\Domains\Route\Http\Requests\Backend\Route\DeleteRouteRequest;
use App\Domains\Route\Http\Requests\Backend\Route\EditRouteRequest;
use App\Domains\Route\Http\Requests\Backend\Route\StoreRouteRequest;
use App\Domains\Route\Http\Requests\Backend\Route\UpdateRouteRequest;

/**
 * Class RouteController.
 */
class RouteController extends Controller
{
    /**
     * @var RouteService
     */
    protected $routeService;

    /**
     * RouteController constructor.
     *
     * @param RouteService $routeService
     */
    public function __construct(RouteService $routeService)
    {
        $this->routeService = $routeService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.route.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.route.create');
    }

    /**
     * @param StoreRouteRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreRouteRequest $request)
    {
        $route = $this->routeService->store($request->validated());

        return redirect()->route('admin.route.show', $route)->withFlashSuccess(__('The  Routes was successfully created.'));
    }

    /**
     * @param Route $route
     *
     * @return mixed
     */
    public function show(Route $route)
    {
        return view('backend.route.show')
            ->withRoute($route);
    }

    /**
     * @param EditRouteRequest $request
     * @param Route $route
     *
     * @return mixed
     */
    public function edit(EditRouteRequest $request, Route $route)
    {
        return view('backend.route.edit')
            ->withRoute($route);
    }

    /**
     * @param UpdateRouteRequest $request
     * @param Route $route
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateRouteRequest $request, Route $route)
    {
        $this->routeService->update($route, $request->validated());

        return redirect()->route('admin.route.show', $route)->withFlashSuccess(__('The  Routes was successfully updated.'));
    }

    /**
     * @param DeleteRouteRequest $request
     * @param Route $route
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteRouteRequest $request, Route $route)
    {
        $this->routeService->delete($route);

        return redirect()->route('admin.$route.deleted')->withFlashSuccess(__('The  Routes was successfully deleted.'));
    }
}