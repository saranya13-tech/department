<?php

namespace App\Http\Requests;

use App\Http\Base\BaseFormRequest;
use Illuminate\Validation\Rule;
class UpdateDistrictAdminRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'=> ['required',],
            'password'=> ['required'],
            'district_id'=> ['required'],
            'name'=> ['required'],
        ];
    }
}
