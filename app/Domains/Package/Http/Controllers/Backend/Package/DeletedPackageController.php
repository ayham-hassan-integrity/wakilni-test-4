<?php

namespace App\Domains\Package\Http\Controllers\Backend\Package;

use App\Http\Controllers\Controller;
use App\Domains\Package\Models\Package;
use App\Domains\Package\Services\PackageService;

/**
 * Class DeletedPackageController.
 */
class DeletedPackageController extends Controller
{
    /**
     * @var PackageService
     */
    protected $packageService;

    /**
     * DeletedPackageController constructor.
     *
     * @param  PackageService  $packageService
     */
    public function __construct(PackageService $packageService)
    {
        $this->packageService = $packageService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.package.deleted');
    }

    /**
     * @param  Package  $deletedPackage
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Package $deletedPackage)
    {
        $this->packageService->restore($deletedPackage);

        return redirect()->route('admin.package.index')->withFlashSuccess(__('The  Packages was successfully restored.'));
    }

    /**
     * @param  Package  $deletedPackage
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Package $deletedPackage)
    {
        $this->packageService->destroy($deletedPackage);

        return redirect()->route('admin.package.deleted')->withFlashSuccess(__('The  Packages was permanently deleted.'));
    }
}