<?php

namespace App\Modules\BasicSite\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountCreationFormValidation extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'phone' => 'required|string|max:35|unique:users,phone',
			'email' => 'required|email|max:100|unique:users,email',
			'full_name' => 'required|max:255|string|unique:users,full_name',
			'gender' => 'required|string',
			'acc_type' => 'required|string|max:15',
			'bvn' => 'nullable|numeric|digits:20|unique:users,bvn',
			'dob' => 'required|date',
			'user_passport' => 'required| mimes:jpeg,bmp,png',
			'address' => 'required|string',
		];
	}

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
	 * Configure the error messages for the defined validation rules.
	 *
	 * @return array
	 */
	public function messages()
	{
		return [
			'dob.required' => 'You must supply your date of birth',
			'dob.date' => 'Invalid date type in date of birth',
			'acc_type.required' => 'Select an account type',
			'acc_type.string' => 'Invalid account type',
			'acc_type.max' => 'Invalid account type selection',
			'email.email' => 'The email you supplied is invalid',
		];
	}
}
