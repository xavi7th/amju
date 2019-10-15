<?php

namespace App\Modules\BasicSite\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use App\Modules\BasicSite\Exceptions\AxiosValidationExceptionBuilder;

class RegistrationValidation extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users,email',
			'currency' => 'required|string',
			'country' => 'required|string|not_in:null',
			'phone' => 'required|regex:/^[\+]?[0-9\Q()\E\s]+$/i|unique:users,phone',
			'password' => 'required|string|min:6|confirmed',
			'id_card' => 'required|file|mimes:jpeg,bmp,png,pdf',
			'agreement' => 'required|in:1,true,"true"',
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
			// 'primary_contact_name.required' => 'The name of the primary contact is required',
			// 'primary_contact_name.alpha_dash' => 'The name of the primary contact can only contain alphabets, numbers underscores and dashes',
			// 'primary_contact_number.required' => 'The phone number of the primary contact is required',
			// 'primary_contact_email.required' => 'The email provided for the primary contact is invalid',
			// 'accommodation_name.required' => 'The name of the accommodation is required',
			// 'price.required' => 'The price of the accommodation is required',
			// 'space_type_id.exists' => 'Selected space type is invalid',
			'country.not_in' => 'You must select a country',
			'phone.numeric' => 'Invalid phone number',
			'id_card.required' => 'Upload a valid ID Card for verification purposes',
			'id_card.mimes' => 'Your ID Card must be an image of a pdf file',
			'agreement.required' => 'You must accept our terms and conditions to register',
		];
	}

	/**
	 * Overwrite the validator response so we can customise it per the structure requested from the fronend
	 *
	 * @param \Illuminate\Contracts\Validation\Validator $validator
	 * @return void
	 */
	protected function failedValidation(Validator $validator)
	{
		/**
		 * * Alternatively throw new AuthenticationFailedException($validator). Remember to use App\Exceptions\Admin\AuthenticationFailedException;
		 * * And handle there. That will help for reuse. Handling here for compactness purposes
		 * ? Who knows they might ask for a different format for the enxt validation
		 */
		throw new AxiosValidationExceptionBuilder($validator);
	}
}
