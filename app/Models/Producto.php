<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /** @use HasFactory<\Database\Factories\ProductoFactory> */
    use HasFactory;

    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'nombre',
        'modelo',
        'medidas',
        'descripcion',
        'precio_venta',
        'stock_actual',
        'stock_minimo',
    ];

    public function detallesPedido()
    {
        return $this->hasMany(DetallePedido::class, 'id_producto');
    }

    public function movimientos()
    {
        return $this->hasMany(MovimientoInventario::class, 'id_producto');
    }
}
