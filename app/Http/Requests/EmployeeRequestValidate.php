<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequestValidate extends FormRequest
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
            'fullName' => 'required|min:2|max:30',
            'dob'=>'required',
            'email' => 'required|email',
            'phone' => 'required|min:10|max:10',
            'address'=>'required|min:5|max:255'
        ];
    }

    public function messages()
    {
        return [
            'fullName.required'=>'Không được để trống',
            'fullName.min'=>'Tên quá ngắn',
            'fullName.max'=>'Tên không hợp lệ!',
            'email.required' => 'Không được để trống!',
            'phone.required' => 'Không được để trống!',
            'phone.min' => 'Không hợp lệ!',
            'phone.max' => 'Không hợp lệ!',
            'address.required' => 'Không được để trống!',
            'address.min' => 'Không hợp lệ!',
            'address.max' => 'Không hợp lệ!',
            'dob.required' => 'Không hợp lệ!'
        ];
    }
}
