<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Setor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];

    public function contatos(): HasMany
    {
        return $this->hasMany(Contato::class);
    }
}
