<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

use App\Models\Denuncia;
use App\Models\Tbldepartamento;
use App\Models\Api\Device;
use Auth;

class DenunciaController extends Controller
{
    public function findExpediente(Request $request, $expediente = '')
    {
        
        if ($expediente != '') {
            $denuncia = Denuncia::where('expediente', 'like', '%'.$expediente.'%')
                        ->where('tblmodulo_id','=',Auth::user()->tblmodulo_id)->take(10)->get();
        }else {
            $denuncia = [];
        }

        return response()->json([
            'denuncia' => $denuncia,
        ]);

    }

    public function detailsExpediente(Request $request, $expediente = '')
    {
        
        $denuncia = Denuncia::where('expediente', 'like', '%'.$expediente.'%')->first();
        $element = [
            'instancia' => $denuncia->tblinstancia->sigla,
            'institucion' => $denuncia->tblcomisaria->nombre,
            'expediente' => $denuncia->expediente,
            'oficio' => $denuncia->oficio,
            'fdenuncia' => $denuncia->fdenuncia,
            'fformalizacion' => $denuncia->fformalizacion,
            'fauditoria' => $denuncia->fauditoria,
            'calificacion' => $denuncia->calificacion,
            'remitido' => $denuncia->remitido,
        ];
        return response()->json([
            'denuncia' => $element,
        ]);

    }

    public function getDepartment(Request $request)
    {
        
        $departamento = Tbldepartamento::select('id','nombre')->get();
        return response()->json([
            'departamento' => $departamento,
        ]);

    }

}
