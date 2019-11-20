<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use LangleyFoxall\LaravelNISTPasswordRules\PasswordRules;

class StoreUserRequest extends FormRequest
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
            'first_name' => ['required', 'max:191'],
            'last_name'  => ['required', 'max:191'],
            'user_name'  => ['required', 'max:191'],
            'email'      => ['required', 'email', 'max:191', Rule::unique('users')],
            'password'   => ['required', 'max:191'],
        ];
    }
}
