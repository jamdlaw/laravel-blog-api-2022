<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:10',
            'body' => 'required',
        ];
    }

    public function messages()
    {
        return  [
            'title.required' => 'title is required',
            'title.max'=> 'title must be 10 characters or less',
            'body.required' => 'body is required.',
        
        ];
    }
}