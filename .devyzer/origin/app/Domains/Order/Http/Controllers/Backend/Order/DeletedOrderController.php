<?php

namespace App\Domains\Order\Http\Controllers\Backend\Order;

use App\Http\Controllers\Controller;
use App\Domains\Order\Models\Order;
use App\Domains\Order\Services\OrderService;

/**
 * Class DeletedOrderController.
 */
class DeletedOrderController extends Controller
{
    /**
     * @var OrderService
     */
    protected $orderService;

    /**
     * DeletedOrderController constructor.
     *
     * @param  OrderService  $orderService
     */
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.order.deleted');
    }

    /**
     * @param  Order  $deletedOrder
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Order $deletedOrder)
    {
        $this->orderService->restore($deletedOrder);

        return redirect()->route('admin.order.index')->withFlashSuccess(__('The  Orders was successfully restored.'));
    }

    /**
     * @param  Order  $deletedOrder
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Order $deletedOrder)
    {
        $this->orderService->destroy($deletedOrder);

        return redirect()->route('admin.order.deleted')->withFlashSuccess(__('The  Orders was permanently deleted.'));
    }
}