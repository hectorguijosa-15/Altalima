<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoInventario extends Model
{
    /** @use HasFactory<\Database\Factories\MovimientoInventarioFactory> */
    use HasFactory;

    protected $primaryKey = 'id_movimiento';

    protected $fillable = [
        'id_producto',
        'id_material',
        'tipo_movimiento',
        'cantidad',
        'fecha_movimiento',
        'motivo',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'id_material');
    }
}
