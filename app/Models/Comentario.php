<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comentario;

class Comentario extends Model{
    public function noticia() 
    {
        return $this->belongsTo(Noticia::class);
    }
}
