<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tblprovincia;

class TblprovinciaController extends Controller
{
    public function getDistrito(Request $request, $id){
        if ($request->ajax()) {
            $distritos = Tblprovincia::find($id)->tbldistrito;
            return response()->json($distritos);
        }
    }
}
