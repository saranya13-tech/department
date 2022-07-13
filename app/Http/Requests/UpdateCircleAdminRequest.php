<?php

namespace App\Http\Requests;

use App\Http\Base\BaseFormRequest;
use Illuminate\Validation\Rule;
class UpdateCircleAdminRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'district_admin_id'=> ['required'],
            'circle_name'=> ['required'],
            'thaluk_id'=> ['required'],
            'username'=> ['required'],
            'password'=> ['required'],
            'phone'=> ['required'],
        ];
    }
}
