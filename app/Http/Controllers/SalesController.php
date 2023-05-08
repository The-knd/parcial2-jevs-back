<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;


class SalesController extends Controller
{
    public function index()
    {
        $sales = Sale::all();
        return $sales;
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $sale = new Sale();
        $sale->nombre_empleado=$request->nombre_empleado;
        $sale->nombre_empleado=$request->nombre_empleado;
        $sale->precio=$request->precio;
        $sale->fecha_compra=$request->fecha_compra;
        $sale->save();
    }

    public function show(Sale $sale)
    {
        $sale = Sale::find($sale->id);
    }

    public function edit(Sale $sale)
    {
        $sale = Sale::find($sale->id);
        return $sale;
    }

    public function update(Request $request,Sale $sale)
    {
        $sale = Sale::find($sale->id);
        $sale->nombre_empleado=$request->nombre_empleado;
        $sale->nombre_empleado=$request->nombre_empleado;
        $sale->precio=$request->precio;
        $sale->fecha_compra=$request->fecha_compra;
        $sale->save();
    }

    public function destroy(Sale $sale)
    {
        $sale = Sale::find($sale->id);
        $sale->delete();
    }

}
