<?php

namespace App\Domains\OrderDetail\Http\Controllers\Backend\Orderdetail;

use App\Http\Controllers\Controller;
use App\Domains\OrderDetail\Models\Orderdetail;
use App\Domains\OrderDetail\Services\OrderdetailService;

/**
 * Class DeletedOrderdetailController.
 */
class DeletedOrderdetailController extends Controller
{
    /**
     * @var OrderdetailService
     */
    protected $orderdetailService;

    /**
     * DeletedOrderdetailController constructor.
     *
     * @param  OrderdetailService  $orderdetailService
     */
    public function __construct(OrderdetailService $orderdetailService)
    {
        $this->orderdetailService = $orderdetailService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.order-detail.deleted');
    }

    /**
     * @param  Orderdetail  $deletedOrderdetail
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Orderdetail $deletedOrderdetail)
    {
        $this->orderdetailService->restore($deletedOrderdetail);

        return redirect()->route('admin.orderdetail.index')->withFlashSuccess(__('The  Orderdetails was successfully restored.'));
    }

    /**
     * @param  Orderdetail  $deletedOrderdetail
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Orderdetail $deletedOrderdetail)
    {
        $this->orderdetailService->destroy($deletedOrderdetail);

        return redirect()->route('admin.orderdetail.deleted')->withFlashSuccess(__('The  Orderdetails was permanently deleted.'));
    }
}