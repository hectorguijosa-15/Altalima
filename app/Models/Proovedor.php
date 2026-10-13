<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proovedor extends Model
{
    /** @use HasFactory<\Database\Factories\ProovedorFactory> */
    use HasFactory;

    protected $primaryKey = 'id_proovedor';

    protected $fillable = [
        'nombre',
        'telefono',
        'direccion',
    ];

    public function compras()
    {
        return $this->hasMany(Compra::class, 'id_proovedor');
    }
}
