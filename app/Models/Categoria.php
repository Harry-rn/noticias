<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Categoria extends Model
{
    use HasFactory;
    public function run()
    {
        Categoria::create([
            "categoria" => "Política"
        ]);

        Categoria::create([
            "categoria" => "Esportes"
        ]);

        Categoria::create([
            "categoria" => "Economia"
        ]);

        Categoria::create([
            "categoria" => "Eleições"
        ]);

        Categoria::create([
            "categoria" => "Laser"
        ]);

        Categoria::create([
            "categoria" => "Entretenimento"
        ]);
    }
}
