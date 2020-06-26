<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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

            'inputName' => 'required',
            'inputGender' => 'required',
            'inputEmail' => 'required',
            'inputAddress' => 'required',
            'inputPhoneNumber' => 'required|numeric',
            'inputNote'=>'required'
        ];
    }

    public function messages(){
		return [
			'inputName.required' => 'Name không được bỏ trống',
			'inputGender.required' => 'Gioi tinh khong duoc de trong',
			'inputEmail.required' => 'Email  không được bỏ trống',
            'inputAddress.required' => 'Address không được bỏ trống',
            'inputPhoneNumber.numeric' => 'Vui long nhap so',
            'inputPhoneNumber.required' => 'Khoong duoc de trong',
            'inputNote.required' => 'Khoong duoc de trong'
		];
	}
}
