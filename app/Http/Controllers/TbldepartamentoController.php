<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbldepartamento;

class TbldepartamentoController extends Controller
{
    public function getProvincia(Request $request, $id){
        if ($request->ajax()) {
            $provincias = Tbldepartamento::find($id)->tblprovincia;
            return response()->json($provincias);
        }
    }
}
