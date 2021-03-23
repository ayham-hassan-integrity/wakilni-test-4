<?php

namespace App\Domains\CustomerOperator\Http\Controllers\Backend\Customeroperator;

use App\Http\Controllers\Controller;
use App\Domains\CustomerOperator\Models\Customeroperator;
use App\Domains\CustomerOperator\Services\CustomeroperatorService;

/**
 * Class DeletedCustomeroperatorController.
 */
class DeletedCustomeroperatorController extends Controller
{
    /**
     * @var CustomeroperatorService
     */
    protected $customeroperatorService;

    /**
     * DeletedCustomeroperatorController constructor.
     *
     * @param  CustomeroperatorService  $customeroperatorService
     */
    public function __construct(CustomeroperatorService $customeroperatorService)
    {
        $this->customeroperatorService = $customeroperatorService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.customer-operator.deleted');
    }

    /**
     * @param  Customeroperator  $deletedCustomeroperator
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Customeroperator $deletedCustomeroperator)
    {
        $this->customeroperatorService->restore($deletedCustomeroperator);

        return redirect()->route('admin.customeroperator.index')->withFlashSuccess(__('The  Customeroperators was successfully restored.'));
    }

    /**
     * @param  Customeroperator  $deletedCustomeroperator
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Customeroperator $deletedCustomeroperator)
    {
        $this->customeroperatorService->destroy($deletedCustomeroperator);

        return redirect()->route('admin.customeroperator.deleted')->withFlashSuccess(__('The  Customeroperators was permanently deleted.'));
    }
}