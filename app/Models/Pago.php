<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    /** @use HasFactory<\Database\Factories\PagoFactory> */
    use HasFactory;

    protected $primaryKey = 'id_pago';

    protected $fillable = [
        'id_pedido',
        'fecha_pago',
        'monto',
        'metodo_pago',
        'estado',
    ];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'id_pedido');
    }
}
