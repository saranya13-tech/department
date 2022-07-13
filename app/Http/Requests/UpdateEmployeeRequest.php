<?php

namespace App\Http\Requests;

use App\Http\Base\BaseFormRequest;

use Illuminate\Validation\Rule;

class UpdateEmployeeRequest extends BaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'EMAIL_ID'=> ['required'],
            'GENERAL_NO'=> ['required','numeric'],
            'District'=> ['required'],
            'circle_id'=> ['required'],
            'EmployeeName' => ['required'],
            'PEN' => ['required','numeric']
        ];
    }
}
