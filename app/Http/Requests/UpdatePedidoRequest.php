<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePedidoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_cliente' => 'required|exists:clientes,id_cliente',
            'fecha_pedido' => 'required|date',
            'fecha_entrega' => 'required|date|after_or_equal:fecha_pedido',
            'estado' => 'required|in:pendiente,en_proceso,completado',
            'total_pedido' => 'required|numeric|min:0',
        ];
    }
}
