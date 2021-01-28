<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['nullable', 'string' ,'min:2', 'max:40'],
            'surname' => ['nullable', 'string' ,'min:2', 'max:40'],
            'email' => ['string', 'email', 'max:255', Rule::unique('users')->ignore(auth()->user()->id)],
            'password' => [$this->route()->profile ? 'nullable' : 'required', 'string', 'min:6', 'confirmed'],
        ];
    }
}
