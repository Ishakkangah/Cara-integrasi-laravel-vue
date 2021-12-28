<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class studentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:100|min:3',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'nim' => 'required|numeric',
            'email' => 'required|email|max:200',
            'jurusan' => 'required|string|max:200|'
        ];
    }
}
