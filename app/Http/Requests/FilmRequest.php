<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            'title' => ['min: 3', 'max: 20', 'required'],
            'category' => ['min: 3', 'max: 25', 'nullable'],
            'body' => ['min: 3', 'max: 60', 'required'],
            'image' => ['image', 'max:2048', 'nullable']
        ];
    }
}
