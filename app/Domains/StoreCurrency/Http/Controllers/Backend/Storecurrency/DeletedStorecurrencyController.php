<?php

namespace App\Domains\StoreCurrency\Http\Controllers\Backend\Storecurrency;

use App\Http\Controllers\Controller;
use App\Domains\StoreCurrency\Models\Storecurrency;
use App\Domains\StoreCurrency\Services\StorecurrencyService;

/**
 * Class DeletedStorecurrencyController.
 */
class DeletedStorecurrencyController extends Controller
{
    /**
     * @var StorecurrencyService
     */
    protected $storecurrencyService;

    /**
     * DeletedStorecurrencyController constructor.
     *
     * @param  StorecurrencyService  $storecurrencyService
     */
    public function __construct(StorecurrencyService $storecurrencyService)
    {
        $this->storecurrencyService = $storecurrencyService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.store-currency.deleted');
    }

    /**
     * @param  Storecurrency  $deletedStorecurrency
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Storecurrency $deletedStorecurrency)
    {
        $this->storecurrencyService->restore($deletedStorecurrency);

        return redirect()->route('admin.storecurrency.index')->withFlashSuccess(__('The  Storecurrencies was successfully restored.'));
    }

    /**
     * @param  Storecurrency  $deletedStorecurrency
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Storecurrency $deletedStorecurrency)
    {
        $this->storecurrencyService->destroy($deletedStorecurrency);

        return redirect()->route('admin.storecurrency.deleted')->withFlashSuccess(__('The  Storecurrencies was permanently deleted.'));
    }
}