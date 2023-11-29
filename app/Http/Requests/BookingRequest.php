<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BookingRequest extends FormRequest
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
        'item_id' => 'required|integer|exists:items,id',
        'user_id' => 'required|integer|exists:users,id',
        'start_date' => 'required|date',
        'end_date' => 'nullable|date',
        'total' => 'nullable|numeric',
        'status' => 'nullable|string|in:PENDING,SUCCESS,CANCEL',
        ];
    }
}
