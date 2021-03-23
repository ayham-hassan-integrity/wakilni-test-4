<?php

namespace App\Domains\CustomerPrice\Http\Controllers\Backend\Customerprice;

use App\Http\Controllers\Controller;
use App\Domains\CustomerPrice\Models\Customerprice;
use App\Domains\CustomerPrice\Services\CustomerpriceService;

/**
 * Class DeletedCustomerpriceController.
 */
class DeletedCustomerpriceController extends Controller
{
    /**
     * @var CustomerpriceService
     */
    protected $customerpriceService;

    /**
     * DeletedCustomerpriceController constructor.
     *
     * @param  CustomerpriceService  $customerpriceService
     */
    public function __construct(CustomerpriceService $customerpriceService)
    {
        $this->customerpriceService = $customerpriceService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.customer-price.deleted');
    }

    /**
     * @param  Customerprice  $deletedCustomerprice
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Customerprice $deletedCustomerprice)
    {
        $this->customerpriceService->restore($deletedCustomerprice);

        return redirect()->route('admin.customerprice.index')->withFlashSuccess(__('The  Customerprices was successfully restored.'));
    }

    /**
     * @param  Customerprice  $deletedCustomerprice
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Customerprice $deletedCustomerprice)
    {
        $this->customerpriceService->destroy($deletedCustomerprice);

        return redirect()->route('admin.customerprice.deleted')->withFlashSuccess(__('The  Customerprices was permanently deleted.'));
    }
}