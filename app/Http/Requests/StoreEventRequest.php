<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Assuming all authenticated admin users can create events
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'event_date' => 'required|date|after:today',
            'location' => 'required|string|max:255',
            'is_featured' => 'boolean',
            'max_participants' => 'nullable|integer|min:1',
            'category_id' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
