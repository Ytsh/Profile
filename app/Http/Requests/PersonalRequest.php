<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalRequest extends FormRequest
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
        // dd('j');
        return [
            'name' => [
                'required', 'min:3'
            ],
            'father_name' => [
                'required', 'min:3'
            ],
            'mother_name' => [
                'required', 'min:3'
            ],
            'grandfather_name' => [
                'required', 'min:3'
            ],
            'ward' => [
                'required', 'max:2'
            ],
            'phone' => [
                'required', 'min:10','max:10'
            ],
            'address' => [
                'required', 'min:3'
            ],
            'email' => [
                'required',
            ],
        ];
    }
    
    
}
