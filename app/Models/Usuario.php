<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{

    protected $table = 'usuarios'; // Define o nome da tabela no banco de dados

    // Define os campos que podem ser preenchidos em massa
    protected $fillable = ['nome', 'email', 'password'];

    // Define os campos que devem ser ocultados
    protected $hidden = ['password', 'remember_token'];
}
