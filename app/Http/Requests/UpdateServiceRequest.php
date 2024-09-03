<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Assuming all authenticated admin users can update services
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'nullable|numeric|min:0',
            'duration' => 'nullable|string',
            'is_featured' => 'boolean',
            'icon' => 'nullable|string|max:50',
        ];
    }
}
