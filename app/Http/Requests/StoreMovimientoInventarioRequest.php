<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreMovimientoInventarioRequest extends FormRequest
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
            'id_producto' => 'nullable|required_without:id_material|exists:productos,id_producto',
'id_material' => 'nullable|required_without:id_producto|exists:materials,id_material',
            'tipo_movimiento' => 'required|in:entrada,salida',
            'cantidad' => 'required|numeric|min:0.01',
            'fecha_movimiento' => 'required|date',
            'motivo' => 'required|string',
        ];
    }
}
