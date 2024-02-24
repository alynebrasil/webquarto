<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
   protected $table = 'comentarios';

    // Define os campos que podem ser atribuídos em massa
    protected $fillable = ['conteudo', 'nota', 'usuario_id'];

    // Relacionamento com o imóvel
    public function imovel()
    {
        return $this->belongsTo(Imovel::class);
    }

    // Relacionamento com o usuário
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

}
