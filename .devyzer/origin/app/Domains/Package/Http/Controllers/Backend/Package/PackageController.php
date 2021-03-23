<?php

namespace App\Domains\Package\Http\Controllers\Backend\Package;

use App\Http\Controllers\Controller;
use App\Domains\Package\Models\Package;
use App\Domains\Package\Services\PackageService;
use App\Domains\Package\Http\Requests\Backend\Package\DeletePackageRequest;
use App\Domains\Package\Http\Requests\Backend\Package\EditPackageRequest;
use App\Domains\Package\Http\Requests\Backend\Package\StorePackageRequest;
use App\Domains\Package\Http\Requests\Backend\Package\UpdatePackageRequest;

/**
 * Class PackageController.
 */
class PackageController extends Controller
{
    /**
     * @var PackageService
     */
    protected $packageService;

    /**
     * PackageController constructor.
     *
     * @param PackageService $packageService
     */
    public function __construct(PackageService $packageService)
    {
        $this->packageService = $packageService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.package.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.package.create');
    }

    /**
     * @param StorePackageRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StorePackageRequest $request)
    {
        $package = $this->packageService->store($request->validated());

        return redirect()->route('admin.package.show', $package)->withFlashSuccess(__('The  Packages was successfully created.'));
    }

    /**
     * @param Package $package
     *
     * @return mixed
     */
    public function show(Package $package)
    {
        return view('backend.package.show')
            ->withPackage($package);
    }

    /**
     * @param EditPackageRequest $request
     * @param Package $package
     *
     * @return mixed
     */
    public function edit(EditPackageRequest $request, Package $package)
    {
        return view('backend.package.edit')
            ->withPackage($package);
    }

    /**
     * @param UpdatePackageRequest $request
     * @param Package $package
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdatePackageRequest $request, Package $package)
    {
        $this->packageService->update($package, $request->validated());

        return redirect()->route('admin.package.show', $package)->withFlashSuccess(__('The  Packages was successfully updated.'));
    }

    /**
     * @param DeletePackageRequest $request
     * @param Package $package
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeletePackageRequest $request, Package $package)
    {
        $this->packageService->delete($package);

        return redirect()->route('admin.$package.deleted')->withFlashSuccess(__('The  Packages was successfully deleted.'));
    }
}