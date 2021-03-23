<?php

namespace App\Domains\CustomerCurrency\Http\Controllers\Backend\Customercurrency;

use App\Http\Controllers\Controller;
use App\Domains\CustomerCurrency\Models\Customercurrency;
use App\Domains\CustomerCurrency\Services\CustomercurrencyService;
use App\Domains\CustomerCurrency\Http\Requests\Backend\Customercurrency\DeleteCustomercurrencyRequest;
use App\Domains\CustomerCurrency\Http\Requests\Backend\Customercurrency\EditCustomercurrencyRequest;
use App\Domains\CustomerCurrency\Http\Requests\Backend\Customercurrency\StoreCustomercurrencyRequest;
use App\Domains\CustomerCurrency\Http\Requests\Backend\Customercurrency\UpdateCustomercurrencyRequest;

/**
 * Class CustomercurrencyController.
 */
class CustomercurrencyController extends Controller
{
    /**
     * @var CustomercurrencyService
     */
    protected $customercurrencyService;

    /**
     * CustomercurrencyController constructor.
     *
     * @param CustomercurrencyService $customercurrencyService
     */
    public function __construct(CustomercurrencyService $customercurrencyService)
    {
        $this->customercurrencyService = $customercurrencyService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.customer-currency.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.customer-currency.create');
    }

    /**
     * @param StoreCustomercurrencyRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreCustomercurrencyRequest $request)
    {
        $customercurrency = $this->customercurrencyService->store($request->validated());

        return redirect()->route('admin.customercurrency.show', $customercurrency)->withFlashSuccess(__('The  Customercurrencies was successfully created.'));
    }

    /**
     * @param Customercurrency $customercurrency
     *
     * @return mixed
     */
    public function show(Customercurrency $customercurrency)
    {
        return view('backend.customer-currency.show')
            ->withCustomercurrency($customercurrency);
    }

    /**
     * @param EditCustomercurrencyRequest $request
     * @param Customercurrency $customercurrency
     *
     * @return mixed
     */
    public function edit(EditCustomercurrencyRequest $request, Customercurrency $customercurrency)
    {
        return view('backend.customer-currency.edit')
            ->withCustomercurrency($customercurrency);
    }

    /**
     * @param UpdateCustomercurrencyRequest $request
     * @param Customercurrency $customercurrency
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateCustomercurrencyRequest $request, Customercurrency $customercurrency)
    {
        $this->customercurrencyService->update($customercurrency, $request->validated());

        return redirect()->route('admin.customercurrency.show', $customercurrency)->withFlashSuccess(__('The  Customercurrencies was successfully updated.'));
    }

    /**
     * @param DeleteCustomercurrencyRequest $request
     * @param Customercurrency $customercurrency
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteCustomercurrencyRequest $request, Customercurrency $customercurrency)
    {
        $this->customercurrencyService->delete($customercurrency);

        return redirect()->route('admin.$customercurrency.deleted')->withFlashSuccess(__('The  Customercurrencies was successfully deleted.'));
    }
}