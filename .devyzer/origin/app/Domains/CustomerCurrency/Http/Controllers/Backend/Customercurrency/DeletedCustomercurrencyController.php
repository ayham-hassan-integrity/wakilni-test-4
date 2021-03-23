<?php

namespace App\Domains\CustomerCurrency\Http\Controllers\Backend\Customercurrency;

use App\Http\Controllers\Controller;
use App\Domains\CustomerCurrency\Models\Customercurrency;
use App\Domains\CustomerCurrency\Services\CustomercurrencyService;

/**
 * Class DeletedCustomercurrencyController.
 */
class DeletedCustomercurrencyController extends Controller
{
    /**
     * @var CustomercurrencyService
     */
    protected $customercurrencyService;

    /**
     * DeletedCustomercurrencyController constructor.
     *
     * @param  CustomercurrencyService  $customercurrencyService
     */
    public function __construct(CustomercurrencyService $customercurrencyService)
    {
        $this->customercurrencyService = $customercurrencyService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.customer-currency.deleted');
    }

    /**
     * @param  Customercurrency  $deletedCustomercurrency
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Customercurrency $deletedCustomercurrency)
    {
        $this->customercurrencyService->restore($deletedCustomercurrency);

        return redirect()->route('admin.customercurrency.index')->withFlashSuccess(__('The  Customercurrencies was successfully restored.'));
    }

    /**
     * @param  Customercurrency  $deletedCustomercurrency
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Customercurrency $deletedCustomercurrency)
    {
        $this->customercurrencyService->destroy($deletedCustomercurrency);

        return redirect()->route('admin.customercurrency.deleted')->withFlashSuccess(__('The  Customercurrencies was permanently deleted.'));
    }
}