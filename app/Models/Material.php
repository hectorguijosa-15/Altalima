<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    /** @use HasFactory<\Database\Factories\MaterialFactory> */
    use HasFactory;

    protected $primaryKey = 'id_material';

    protected $fillable = [
        'nombre',
        'unidad_medida',
        'stock_actual',
        'stock_minimo',
        'costo_unitario',
    ];

    public function detallesCompra()
    {
        return $this->hasMany(DetalleCompra::class, 'id_material');
    }

    public function movimientos()
    {
        return $this->hasMany(MovimientoInventario::class, 'id_material');
    }
}
