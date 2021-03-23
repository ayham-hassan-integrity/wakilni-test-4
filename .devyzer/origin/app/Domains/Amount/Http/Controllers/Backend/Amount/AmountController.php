<?php

namespace App\Domains\Amount\Http\Controllers\Backend\Amount;

use App\Http\Controllers\Controller;
use App\Domains\Amount\Models\Amount;
use App\Domains\Amount\Services\AmountService;
use App\Domains\Amount\Http\Requests\Backend\Amount\DeleteAmountRequest;
use App\Domains\Amount\Http\Requests\Backend\Amount\EditAmountRequest;
use App\Domains\Amount\Http\Requests\Backend\Amount\StoreAmountRequest;
use App\Domains\Amount\Http\Requests\Backend\Amount\UpdateAmountRequest;

/**
 * Class AmountController.
 */
class AmountController extends Controller
{
    /**
     * @var AmountService
     */
    protected $amountService;

    /**
     * AmountController constructor.
     *
     * @param AmountService $amountService
     */
    public function __construct(AmountService $amountService)
    {
        $this->amountService = $amountService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.amount.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.amount.create');
    }

    /**
     * @param StoreAmountRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreAmountRequest $request)
    {
        $amount = $this->amountService->store($request->validated());

        return redirect()->route('admin.amount.show', $amount)->withFlashSuccess(__('The  Amounts was successfully created.'));
    }

    /**
     * @param Amount $amount
     *
     * @return mixed
     */
    public function show(Amount $amount)
    {
        return view('backend.amount.show')
            ->withAmount($amount);
    }

    /**
     * @param EditAmountRequest $request
     * @param Amount $amount
     *
     * @return mixed
     */
    public function edit(EditAmountRequest $request, Amount $amount)
    {
        return view('backend.amount.edit')
            ->withAmount($amount);
    }

    /**
     * @param UpdateAmountRequest $request
     * @param Amount $amount
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateAmountRequest $request, Amount $amount)
    {
        $this->amountService->update($amount, $request->validated());

        return redirect()->route('admin.amount.show', $amount)->withFlashSuccess(__('The  Amounts was successfully updated.'));
    }

    /**
     * @param DeleteAmountRequest $request
     * @param Amount $amount
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteAmountRequest $request, Amount $amount)
    {
        $this->amountService->delete($amount);

        return redirect()->route('admin.$amount.deleted')->withFlashSuccess(__('The  Amounts was successfully deleted.'));
    }
}