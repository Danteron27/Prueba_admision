<?php

namespace App\Models;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Elemento extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'Id_categorias',
        'Referencias',
        'Nombres',
        'Cantidad',
        'Valor',
        'Estado',
        'Lugar',
        'Fecha_reg',
        'Hora_reg',
        'Observaciones',
    ];
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'Id_categorias');
    }
}
