<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $table = 'imoveis';

    // Defina os campos que podem ser atribuídos em massa
    protected $fillable = ['titulo', 'descricao', 'endereco', 'valor_aluguel', 'foto', 'comodidades'];

    // Relacionamento com os comentários
    public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }
}
