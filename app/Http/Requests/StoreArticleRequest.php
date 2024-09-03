<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Assuming all authenticated admin users can create articles
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'required|string|max:255',
            // 'author_id' => 'required|exists:users,id',
            'published_at' => 'nullable|date',
            'category_id' => 'required|integer',
            'is_featured' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
