<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Proovedor;
use App\Models\Producto;
use App\Models\Material;
use App\Models\Pedido;
use App\Models\Compra;
use App\Models\DetallePedido;
use App\Models\DetalleCompra;
use App\Models\Pago;
use App\Models\MovimientoInventario;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::factory(10)->create();

        Cliente::factory(10)->create();
        Proovedor::factory(10)->create();
        Producto::factory(10)->create();
        Material::factory(10)->create();
        Pedido::factory(10)->create();
        Compra::factory(10)->create();
        DetallePedido::factory(20)->create();
        DetalleCompra::factory(20)->create();
        Pago::factory(15)->create();
        MovimientoInventario::factory(20)->create();
    }
}
