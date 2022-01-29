<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NoticiaCategoria;

class NoticiaCategoria extends Model
    {
      use HasFactory;
      protected $table = "noticias_categorias"
    }
