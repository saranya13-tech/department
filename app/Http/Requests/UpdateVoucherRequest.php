<?php

namespace App\Http\Requests;

use App\Http\Base\BaseFormRequest;
use Illuminate\Validation\Rule;
class UpdateVoucherRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'voucher_no'=> ['required'],
            'prefix'=> ['required'],
            'circle_id'=> ['required'],
        ];
    }
}
