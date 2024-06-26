<?php

namespace App\Http\Requests\MyPage\Profile;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'profile_img' => ['file', 'image'],
            'name' => ['required', 'max:255', 'string'],
            'email' => ['required'],
            'description' => ['nullable'],
        ];
    }
}
