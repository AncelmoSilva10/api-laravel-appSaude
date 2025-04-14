<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    use HasFactory;
    protected $table = 'contato';
public $fillable = ['id','nomeUsuario','senhaUsuario','emailUsuario','dataNascUsuario','generoUsuario','fotoUsuario','alturaUsuario','pesoUsuario','created_at','updated_at'];
//public $timestamps = false;

}
