<?php

namespace App\Domains\Amount\Http\Controllers\Backend\Amount;

use App\Http\Controllers\Controller;
use App\Domains\Amount\Models\Amount;
use App\Domains\Amount\Services\AmountService;

/**
 * Class DeletedAmountController.
 */
class DeletedAmountController extends Controller
{
    /**
     * @var AmountService
     */
    protected $amountService;

    /**
     * DeletedAmountController constructor.
     *
     * @param  AmountService  $amountService
     */
    public function __construct(AmountService $amountService)
    {
        $this->amountService = $amountService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.amount.deleted');
    }

    /**
     * @param  Amount  $deletedAmount
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Amount $deletedAmount)
    {
        $this->amountService->restore($deletedAmount);

        return redirect()->route('admin.amount.index')->withFlashSuccess(__('The  Amounts was successfully restored.'));
    }

    /**
     * @param  Amount  $deletedAmount
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Amount $deletedAmount)
    {
        $this->amountService->destroy($deletedAmount);

        return redirect()->route('admin.amount.deleted')->withFlashSuccess(__('The  Amounts was permanently deleted.'));
    }
}