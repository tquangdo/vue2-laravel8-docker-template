<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRegister extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // false thi chay postman se hien ERR "403 THIS ACTION IS UNAUTHORIZED."
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed',
        ];
    }
    public function failedValidation(Validator $validator) // KO duoc doi ten ham: "failedValidation"
    {
        throw new HttpResponseException(response()->json([$validator->errors()], 422));
    }
}
