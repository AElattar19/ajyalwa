<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Waavi\Sanitizer\Laravel\SanitizesInput;

class RegisterRequest extends FormRequest
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
        $passwordRules = 'min:8|max:100';
        $imageRules = 'mimes:jpg,jpeg,png';
        $acceptRules = 'required';

        $rules = [

            'name'     => 'required|max:190|min:3',
            'email'    => 'required|email|min:2|max:100|unique:users',
            'gender'   => 'required',
            'phone'   => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'professional_specialization'   => 'required',
            'work_location'   => 'required',
            'city_id'   => 'required',
            'country_id'   => 'required',
            'payment'   => 'required',
        ];

        if ($this->method() == 'POST') {
            $rules['password'] = $passwordRules ."|required";
            $rules['image'] = $imageRules ."|required";
            $rules['accept'] = $acceptRules;

        }

        if ($this->method() == 'PUT') {
            $rules['email'] = $rules['email'] . ",email," .auth()->user()->id;
            if ($this->password) {
                $rules['password'] = $passwordRules;
            }
            if ($this->image) {
                $rules['image'] = $imageRules;
            }
        }

        return $rules;
    }
}
