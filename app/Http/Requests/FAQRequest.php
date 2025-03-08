<?php

namespace App\Http\Requests;

use App\Constants\ValidationRules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class FAQRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'question' => ValidationRules::INPUT_FORM_STRING,
            'answer' => 'required|string|max:1000',
            'status' => ValidationRules::INPUT_FORM_STRING,
        ];
    }
}
