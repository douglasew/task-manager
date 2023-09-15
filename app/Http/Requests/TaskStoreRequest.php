<?php

namespace App\Http\Requests;

use App\Rules\FinishDateRule;
use Illuminate\Foundation\Http\FormRequest;

class TaskStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'title' => [
                'required',
                'max:50'
            ],
            'description' => [
                'required'
            ],
            'finish_date' => [
                'required',
                'date',
                new FinishDateRule()
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'O titulo é obrigatório',
            'description.required' => 'A descrição é obrigatória',
            'title.max' => 'Tamanho do titulo muito grande'
        ];
    }
}
