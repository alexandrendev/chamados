<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sla_horas',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'sla_horas' => 'integer',
        ];
    }

    public function chamados(): HasMany
    {
        return $this->hasMany(Chamado::class);
    }
}
