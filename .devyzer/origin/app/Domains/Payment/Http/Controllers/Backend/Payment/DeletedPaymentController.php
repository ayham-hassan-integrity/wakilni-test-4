<?php

namespace App\Domains\Payment\Http\Controllers\Backend\Payment;

use App\Http\Controllers\Controller;
use App\Domains\Payment\Models\Payment;
use App\Domains\Payment\Services\PaymentService;

/**
 * Class DeletedPaymentController.
 */
class DeletedPaymentController extends Controller
{
    /**
     * @var PaymentService
     */
    protected $paymentService;

    /**
     * DeletedPaymentController constructor.
     *
     * @param  PaymentService  $paymentService
     */
    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.payment.deleted');
    }

    /**
     * @param  Payment  $deletedPayment
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Payment $deletedPayment)
    {
        $this->paymentService->restore($deletedPayment);

        return redirect()->route('admin.payment.index')->withFlashSuccess(__('The  Payments was successfully restored.'));
    }

    /**
     * @param  Payment  $deletedPayment
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Payment $deletedPayment)
    {
        $this->paymentService->destroy($deletedPayment);

        return redirect()->route('admin.payment.deleted')->withFlashSuccess(__('The  Payments was permanently deleted.'));
    }
}