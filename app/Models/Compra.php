<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    /** @use HasFactory<\Database\Factories\CompraFactory> */
    use HasFactory;

    protected $primaryKey = 'id_compra';

    protected $fillable = [
        'id_proovedor',
        'fecha_compra',
        'total_compra',
        'estado_pago',
    ];

    public function proovedor()
    {
        return $this->belongsTo(Proovedor::class, 'id_proovedor');
    }

    public function detalles()
    {
        return $this->hasMany(DetalleCompra::class, 'id_compra');
    }
}
