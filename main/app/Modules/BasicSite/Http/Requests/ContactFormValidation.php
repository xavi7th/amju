<?php

namespace App\Modules\BasicSite\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormValidation extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'phone' => 'required|max:35|string',
			'email' => 'required|email',
			'subject' => 'required|max:255|string',
			// 'msg' => 'required|string',
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
			'email.required' => 'Your email cannot be empty',
			'phone.required' => 'We need a number to contact you',
			'phone.required' => 'Tell us what you want to talk about',
		];
	}
}
