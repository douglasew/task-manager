<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'photo' => [
                'image',
                'mimes:jpg,png',
                'max:1024',
                'dimensions:min_width=500,min_height=500,max_width=500,max_height=500'
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'photo.max' => 'Tamanho máximo da imagem é de 1M',
            'photo.mimes' => 'Formato incorreto',
            'photo.dimensions' => 'Dimensão 500 x 500'
        ];
    }
}
