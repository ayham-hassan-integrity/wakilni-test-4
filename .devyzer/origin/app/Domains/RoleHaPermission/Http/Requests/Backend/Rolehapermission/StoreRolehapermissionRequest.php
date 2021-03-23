<?php

namespace App\Domains\RoleHaPermission\Http\Requests\Backend\Rolehapermission;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreRolehapermissionRequest.
 */
class StoreRolehapermissionRequest extends FormRequest
{
    /**
     * Determine if the rolehapermission is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'permission_id'=>'required',
            'role_id'=>'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}