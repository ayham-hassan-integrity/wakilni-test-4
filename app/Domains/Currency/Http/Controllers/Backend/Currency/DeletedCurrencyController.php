<?php

namespace App\Domains\Currency\Http\Controllers\Backend\Currency;

use App\Http\Controllers\Controller;
use App\Domains\Currency\Models\Currency;
use App\Domains\Currency\Services\CurrencyService;

/**
 * Class DeletedCurrencyController.
 */
class DeletedCurrencyController extends Controller
{
    /**
     * @var CurrencyService
     */
    protected $currencyService;

    /**
     * DeletedCurrencyController constructor.
     *
     * @param  CurrencyService  $currencyService
     */
    public function __construct(CurrencyService $currencyService)
    {
        $this->currencyService = $currencyService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.currency.deleted');
    }

    /**
     * @param  Currency  $deletedCurrency
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Currency $deletedCurrency)
    {
        $this->currencyService->restore($deletedCurrency);

        return redirect()->route('admin.currency.index')->withFlashSuccess(__('The  Currencies was successfully restored.'));
    }

    /**
     * @param  Currency  $deletedCurrency
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Currency $deletedCurrency)
    {
        $this->currencyService->destroy($deletedCurrency);

        return redirect()->route('admin.currency.deleted')->withFlashSuccess(__('The  Currencies was permanently deleted.'));
    }
}