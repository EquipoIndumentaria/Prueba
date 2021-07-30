<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblproductos;

class ProductControllerApi extends Controller
{
    public function index()
    {
        return tblproductos::all();
    }
    public function show($idprod)
    {
        $datops = tblproductos::where('intIDProd', $idprod)->first();
        return $datops;
    }
    public function buscarProd(Request $request)
    {
        $pa = tblproductos::where('vchProd', 'LIKE', '%' . $request->p . '%')
            ->orWhere('vchDesc', 'LIKE', '%' . $request->p . '%')
            ->orWhere('intIdCat', 'LIKE', '%' . $request->p . '%')
            ->get();
        return $pa;
    }
}
