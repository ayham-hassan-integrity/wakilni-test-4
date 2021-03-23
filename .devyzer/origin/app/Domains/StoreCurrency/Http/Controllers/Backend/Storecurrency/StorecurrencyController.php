<?php

namespace App\Domains\StoreCurrency\Http\Controllers\Backend\Storecurrency;

use App\Http\Controllers\Controller;
use App\Domains\StoreCurrency\Models\Storecurrency;
use App\Domains\StoreCurrency\Services\StorecurrencyService;
use App\Domains\StoreCurrency\Http\Requests\Backend\Storecurrency\DeleteStorecurrencyRequest;
use App\Domains\StoreCurrency\Http\Requests\Backend\Storecurrency\EditStorecurrencyRequest;
use App\Domains\StoreCurrency\Http\Requests\Backend\Storecurrency\StoreStorecurrencyRequest;
use App\Domains\StoreCurrency\Http\Requests\Backend\Storecurrency\UpdateStorecurrencyRequest;

/**
 * Class StorecurrencyController.
 */
class StorecurrencyController extends Controller
{
    /**
     * @var StorecurrencyService
     */
    protected $storecurrencyService;

    /**
     * StorecurrencyController constructor.
     *
     * @param StorecurrencyService $storecurrencyService
     */
    public function __construct(StorecurrencyService $storecurrencyService)
    {
        $this->storecurrencyService = $storecurrencyService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.store-currency.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.store-currency.create');
    }

    /**
     * @param StoreStorecurrencyRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreStorecurrencyRequest $request)
    {
        $storecurrency = $this->storecurrencyService->store($request->validated());

        return redirect()->route('admin.storecurrency.show', $storecurrency)->withFlashSuccess(__('The  Storecurrencies was successfully created.'));
    }

    /**
     * @param Storecurrency $storecurrency
     *
     * @return mixed
     */
    public function show(Storecurrency $storecurrency)
    {
        return view('backend.store-currency.show')
            ->withStorecurrency($storecurrency);
    }

    /**
     * @param EditStorecurrencyRequest $request
     * @param Storecurrency $storecurrency
     *
     * @return mixed
     */
    public function edit(EditStorecurrencyRequest $request, Storecurrency $storecurrency)
    {
        return view('backend.store-currency.edit')
            ->withStorecurrency($storecurrency);
    }

    /**
     * @param UpdateStorecurrencyRequest $request
     * @param Storecurrency $storecurrency
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateStorecurrencyRequest $request, Storecurrency $storecurrency)
    {
        $this->storecurrencyService->update($storecurrency, $request->validated());

        return redirect()->route('admin.storecurrency.show', $storecurrency)->withFlashSuccess(__('The  Storecurrencies was successfully updated.'));
    }

    /**
     * @param DeleteStorecurrencyRequest $request
     * @param Storecurrency $storecurrency
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteStorecurrencyRequest $request, Storecurrency $storecurrency)
    {
        $this->storecurrencyService->delete($storecurrency);

        return redirect()->route('admin.$storecurrency.deleted')->withFlashSuccess(__('The  Storecurrencies was successfully deleted.'));
    }
}