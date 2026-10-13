<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    /** @use HasFactory<\Database\Factories\DetalleCompraFactory> */
    use HasFactory;

    protected $primaryKey = 'id_detalle_compra';

    protected $fillable = [
        'id_compra',
        'id_material',
        'cantidad',
        'costo_unitario',
    ];

    public function compra()
    {
        return $this->belongsTo(Compra::class, 'id_compra');
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'id_material');
    }
}
