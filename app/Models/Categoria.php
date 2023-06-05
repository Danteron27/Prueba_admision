<?php

namespace App\Models;

use App\Models\Elemento;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'Codigo',
        'Nombre',
        'Descripcion',
        'Observacion',
    ];

    public function elementos()
    {
        return $this->hasMany(Elemento::class, 'Id_categorias');
    }
}
