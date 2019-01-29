<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

use App\Models\Denuncia;
use App\Models\Victima;
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

    public function findVictima(Request $request, $dni = '')
    {

        if ($dni != '') {
            Log::info('notification sended: ', ['request' => $request->all(),'dni' => $dni]);
            $victima = Victima::where('nro_doc', '=', $dni)->first();
        }else {
            $victima = [];
        }

        return response()->json([
            'victima' => $victima,
        ]);
    }

    public function detailsExpediente(Request $request, $expediente = '')
    {
        
        $denuncia = Denuncia::where('expediente', '=', $expediente)->where('tblmodulo_id','=',Auth::user()->tblmodulo_id)->first();
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
