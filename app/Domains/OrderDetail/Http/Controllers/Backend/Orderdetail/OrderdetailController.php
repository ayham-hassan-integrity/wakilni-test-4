<?php

namespace App\Domains\OrderDetail\Http\Controllers\Backend\Orderdetail;

use App\Http\Controllers\Controller;
use App\Domains\OrderDetail\Models\Orderdetail;
use App\Domains\OrderDetail\Services\OrderdetailService;
use App\Domains\OrderDetail\Http\Requests\Backend\Orderdetail\DeleteOrderdetailRequest;
use App\Domains\OrderDetail\Http\Requests\Backend\Orderdetail\EditOrderdetailRequest;
use App\Domains\OrderDetail\Http\Requests\Backend\Orderdetail\StoreOrderdetailRequest;
use App\Domains\OrderDetail\Http\Requests\Backend\Orderdetail\UpdateOrderdetailRequest;

/**
 * Class OrderdetailController.
 */
class OrderdetailController extends Controller
{
    /**
     * @var OrderdetailService
     */
    protected $orderdetailService;

    /**
     * OrderdetailController constructor.
     *
     * @param OrderdetailService $orderdetailService
     */
    public function __construct(OrderdetailService $orderdetailService)
    {
        $this->orderdetailService = $orderdetailService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.order-detail.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.order-detail.create');
    }

    /**
     * @param StoreOrderdetailRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreOrderdetailRequest $request)
    {
        $orderdetail = $this->orderdetailService->store($request->validated());

        return redirect()->route('admin.orderdetail.show', $orderdetail)->withFlashSuccess(__('The  Orderdetails was successfully created.'));
    }

    /**
     * @param Orderdetail $orderdetail
     *
     * @return mixed
     */
    public function show(Orderdetail $orderdetail)
    {
        return view('backend.order-detail.show')
            ->withOrderdetail($orderdetail);
    }

    /**
     * @param EditOrderdetailRequest $request
     * @param Orderdetail $orderdetail
     *
     * @return mixed
     */
    public function edit(EditOrderdetailRequest $request, Orderdetail $orderdetail)
    {
        return view('backend.order-detail.edit')
            ->withOrderdetail($orderdetail);
    }

    /**
     * @param UpdateOrderdetailRequest $request
     * @param Orderdetail $orderdetail
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateOrderdetailRequest $request, Orderdetail $orderdetail)
    {
        $this->orderdetailService->update($orderdetail, $request->validated());

        return redirect()->route('admin.orderdetail.show', $orderdetail)->withFlashSuccess(__('The  Orderdetails was successfully updated.'));
    }

    /**
     * @param DeleteOrderdetailRequest $request
     * @param Orderdetail $orderdetail
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteOrderdetailRequest $request, Orderdetail $orderdetail)
    {
        $this->orderdetailService->delete($orderdetail);

        return redirect()->route('admin.$orderdetail.deleted')->withFlashSuccess(__('The  Orderdetails was successfully deleted.'));
    }
}