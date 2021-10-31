<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comentario;

class Comentario extends Model
{
    use HasFactory;
    public function run()
{
 Comentario::create([
     "conteudo" => "Gostei :-)",
     "noticia_id" => "3"
 ]);
}
}
