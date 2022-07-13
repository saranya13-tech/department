<?php

namespace App\Http\Requests;

use App\Http\Base\BaseFormRequest;
use Illuminate\Validation\Rule;
class UpdateOffenceRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'offence'=> ['required'],
            'section'=> ['required'],
            'amount'=> ['required'],
            'vehicle_type'=> ['required'],
            

        ];
    }
}
