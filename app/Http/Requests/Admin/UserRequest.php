<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Waavi\Sanitizer\Laravel\SanitizesInput;

class UserRequest extends FormRequest
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
        $rules=  [
            'name'     => 'required|max:190|min:3',
            'full_name'  => 'required|max:190|min:3|unique:users',
            'email' => 'required|email|min:2|max:100|unique:users',
            'password' => 'required|max:190|min:6',
            'image'    => 'image|mimes:jpeg,png,jpg',
             'payment'   => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            //'phone' => 'required | numeric | digits:12 | starts_with: 6,7,8,9

        ];


        if ($this->method() == 'PUT') {
            $rules['email'] = $rules['email'] . ",email," . $this->user->id;
            $rules['full_name'] = $rules['full_name'] . $this->user->id;

        }
         return $rules;
    }

    /**
    *  Filters to be applied to the input.
    *
    * @return array
    */
    public function filters()
    {
        return [
            'email'       => 'trim|escape',
            'password'    => 'trim',
        ];
    }


}
