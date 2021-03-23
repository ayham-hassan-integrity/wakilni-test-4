<?php

namespace App\Domains\Payment\Http\Controllers\Backend\Payment;

use App\Http\Controllers\Controller;
use App\Domains\Payment\Models\Payment;
use App\Domains\Payment\Services\PaymentService;
use App\Domains\Payment\Http\Requests\Backend\Payment\DeletePaymentRequest;
use App\Domains\Payment\Http\Requests\Backend\Payment\EditPaymentRequest;
use App\Domains\Payment\Http\Requests\Backend\Payment\StorePaymentRequest;
use App\Domains\Payment\Http\Requests\Backend\Payment\UpdatePaymentRequest;

/**
 * Class PaymentController.
 */
class PaymentController extends Controller
{
    /**
     * @var PaymentService
     */
    protected $paymentService;

    /**
     * PaymentController constructor.
     *
     * @param PaymentService $paymentService
     */
    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.payment.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.payment.create');
    }

    /**
     * @param StorePaymentRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StorePaymentRequest $request)
    {
        $payment = $this->paymentService->store($request->validated());

        return redirect()->route('admin.payment.show', $payment)->withFlashSuccess(__('The  Payments was successfully created.'));
    }

    /**
     * @param Payment $payment
     *
     * @return mixed
     */
    public function show(Payment $payment)
    {
        return view('backend.payment.show')
            ->withPayment($payment);
    }

    /**
     * @param EditPaymentRequest $request
     * @param Payment $payment
     *
     * @return mixed
     */
    public function edit(EditPaymentRequest $request, Payment $payment)
    {
        return view('backend.payment.edit')
            ->withPayment($payment);
    }

    /**
     * @param UpdatePaymentRequest $request
     * @param Payment $payment
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        $this->paymentService->update($payment, $request->validated());

        return redirect()->route('admin.payment.show', $payment)->withFlashSuccess(__('The  Payments was successfully updated.'));
    }

    /**
     * @param DeletePaymentRequest $request
     * @param Payment $payment
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeletePaymentRequest $request, Payment $payment)
    {
        $this->paymentService->delete($payment);

        return redirect()->route('admin.$payment.deleted')->withFlashSuccess(__('The  Payments was successfully deleted.'));
    }
}