<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sale = new Sale();
        $sale->nombre_cliente="Pedro";
        $sale->nombre_empleado="Ramiro";
        $sale->precio=500000;
        $sale->fecha_compra="2023-05-08";
        $sale->save();

    }
}
