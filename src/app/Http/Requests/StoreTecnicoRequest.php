<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTecnicoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:tecnicos,email'],
            'telefone' => ['nullable', 'string', 'max:50'],
            'especialidade' => ['nullable', 'string', 'max:255'],
            'ativo' => ['nullable', 'boolean'],
        ];
    }
}
