<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCompraRequest extends FormRequest
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
            'id_proovedor' => 'required|exists:proovedors,id_proovedor',
            'fecha_compra' => 'required|date',
            'total_compra' => 'required|numeric|min:0',
            'estado_pago' => 'required|in:pendiente,pagado',
        ];
    }
}
