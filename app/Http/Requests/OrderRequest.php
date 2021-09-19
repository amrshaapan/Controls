<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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


            // 'port_id' => 'required',
            // 'category_id' => 'required',
            'move_from' => 'required',
            'move_to' => 'required',
            // 'distraint_date' => 'required',
            // 'description_order' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'move_from.required'  => 'هذا الحقل مطلوب',
            'move_to.required'  => 'هذا الحقل مطلوب'
        ];
    }
}
