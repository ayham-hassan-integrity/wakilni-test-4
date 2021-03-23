<?php

namespace App\Domains\Order\Http\Controllers\Backend\Order;

use App\Http\Controllers\Controller;
use App\Domains\Order\Models\Order;
use App\Domains\Order\Services\OrderService;
use App\Domains\Order\Http\Requests\Backend\Order\DeleteOrderRequest;
use App\Domains\Order\Http\Requests\Backend\Order\EditOrderRequest;
use App\Domains\Order\Http\Requests\Backend\Order\StoreOrderRequest;
use App\Domains\Order\Http\Requests\Backend\Order\UpdateOrderRequest;

/**
 * Class OrderController.
 */
class OrderController extends Controller
{
    /**
     * @var OrderService
     */
    protected $orderService;

    /**
     * OrderController constructor.
     *
     * @param OrderService $orderService
     */
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.order.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.order.create');
    }

    /**
     * @param StoreOrderRequest $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreOrderRequest $request)
    {
        $order = $this->orderService->store($request->validated());

        return redirect()->route('admin.order.show', $order)->withFlashSuccess(__('The  Orders was successfully created.'));
    }

    /**
     * @param Order $order
     *
     * @return mixed
     */
    public function show(Order $order)
    {
        return view('backend.order.show')
            ->withOrder($order);
    }

    /**
     * @param EditOrderRequest $request
     * @param Order $order
     *
     * @return mixed
     */
    public function edit(EditOrderRequest $request, Order $order)
    {
        return view('backend.order.edit')
            ->withOrder($order);
    }

    /**
     * @param UpdateOrderRequest $request
     * @param Order $order
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $this->orderService->update($order, $request->validated());

        return redirect()->route('admin.order.show', $order)->withFlashSuccess(__('The  Orders was successfully updated.'));
    }

    /**
     * @param DeleteOrderRequest $request
     * @param Order $order
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteOrderRequest $request, Order $order)
    {
        $this->orderService->delete($order);

        return redirect()->route('admin.$order.deleted')->withFlashSuccess(__('The  Orders was successfully deleted.'));
    }
}