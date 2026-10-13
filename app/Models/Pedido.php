<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    /** @use HasFactory<\Database\Factories\PedidoFactory> */
    use HasFactory;

    protected $primaryKey = 'id_pedido';

    protected $fillable = [
        'id_cliente',
        'fecha_pedido',
        'fecha_entrega',
        'estado',
        'total_pedido',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function detalles()
    {
        return $this->hasMany(DetallePedido::class, 'id_pedido');
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_pedido');
    }
}
