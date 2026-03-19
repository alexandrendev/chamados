<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chamado extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'prioridade',
        'status',
        'data_abertura',
        'servico_id',
        'categoria_id',
        'tecnico_id',
    ];

    protected function casts(): array
    {
        return [
            'data_abertura' => 'date',
        ];
    }

    public function servico(): BelongsTo
    {
        return $this->belongsTo(Servico::class);
    }

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function tecnico(): BelongsTo
    {
        return $this->belongsTo(Tecnico::class);
    }
}
