<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCharacterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:characters|max:150|min:4',
            'image' => 'nullable',
            'description' => 'nullable',
            'type_id' => 'nullable',
            'attack' => 'nullable',
            'defence' => 'nullable',
            'speed' => 'nullable',
            'life' => 'nullable',
        ];
    }

    public function message()
    {
        return [
            'name.required' => 'Il campo titolo è obblibatorio',
        ];
    }
}
