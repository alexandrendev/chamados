<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChamadoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'titulo' => ['required', 'string', 'max:255'],
            'descricao' => ['nullable', 'string'],
            'prioridade' => ['required', 'in:baixa,media,alta'],
            'status' => ['required', 'in:aberto,em_atendimento,resolvido,fechado'],
            'data_abertura' => ['required', 'date'],
            'servico_id' => ['nullable', 'integer'],
            'categoria_id' => ['nullable', 'integer'],
            'tecnico_id' => ['nullable', 'integer', 'exists:tecnicos,id'],
        ];
    }
}
