<?php

namespace App\Domains\Currency\Http\Controllers\Backend\Currency;

use App\Http\Controllers\Controller;
use App\Domains\Currency\Models\Currency;
use App\Domains\Currency\Services\CurrencyService;
use App\Domains\Currency\Http\Requests\Backend\Currency\DeleteCurrencyRequest;
use App\Domains\Currency\Http\Requests\Backend\Currency\EditCurrencyRequest;
use App\Domains\Currency\Http\Requests\Backend\Currency\StoreCurrencyRequest;
use App\Domains\Currency\Http\Requests\Backend\Currency\UpdateCurrencyRequest;

/**
 * Class CurrencyController.
 */
class CurrencyController extends Controller
{
    /**
     * @var CurrencyService
     */
    protected $currencyService;

    /**
     * CurrencyController constructor.
     *
     * @param CurrencyService $currencyService
     */
    public function __construct(CurrencyService $currencyService)
    {
        $this->currencyService = $currencyService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.currency.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.currency.create');
    }

    /**
     * @param StoreCurrencyRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreCurrencyRequest $request)
    {
        $currency = $this->currencyService->store($request->validated());

        return redirect()->route('admin.currency.show', $currency)->withFlashSuccess(__('The  Currencies was successfully created.'));
    }

    /**
     * @param Currency $currency
     *
     * @return mixed
     */
    public function show(Currency $currency)
    {
        return view('backend.currency.show')
            ->withCurrency($currency);
    }

    /**
     * @param EditCurrencyRequest $request
     * @param Currency $currency
     *
     * @return mixed
     */
    public function edit(EditCurrencyRequest $request, Currency $currency)
    {
        return view('backend.currency.edit')
            ->withCurrency($currency);
    }

    /**
     * @param UpdateCurrencyRequest $request
     * @param Currency $currency
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateCurrencyRequest $request, Currency $currency)
    {
        $this->currencyService->update($currency, $request->validated());

        return redirect()->route('admin.currency.show', $currency)->withFlashSuccess(__('The  Currencies was successfully updated.'));
    }

    /**
     * @param DeleteCurrencyRequest $request
     * @param Currency $currency
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteCurrencyRequest $request, Currency $currency)
    {
        $this->currencyService->delete($currency);

        return redirect()->route('admin.$currency.deleted')->withFlashSuccess(__('The  Currencies was successfully deleted.'));
    }
}