<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class On_ADD_hall extends FormRequest
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
         'hall_name'=>'string|required|Alpha',
         'hall_location'=>'required|string',
         'hall_contact'=>'max:11|min:11',
         'hall_city'=>'required|Alpha',
            'images' =>'required',
        ];
    }
}
