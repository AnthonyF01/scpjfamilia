<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\User;
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
                        ->where('tblmodulo_id','=',$request->user()->tblmodulo_id)->take(10)->get();
        }else {
            $denuncia = [];
        }

        return response()->json([
            'denuncia' => $denuncia,
        ]);

    }

    public function findDNI(Request $request, $search = '')
    {
        
        Log::info('victima: ', ['search' => $search]);

        if ($search != '') {
            $denuncia = new Denuncia;

            $victima=Victima::where('nro_doc',$search)
                              ->orwhere(function ($query) use ($search) {
                                $query->orwhere('nombre','like', '%'.$search.'%')
                                      ->orWhere('apellido','like', '%'.$search.'%');
                              })
                              ->take(10)
                              ->get();

            // dd(count($victima),$victima[0]->id);
            // Log::info('victima: ', ['vcount' => count($victima)]);

            if (count($victima) > 0) {
                if (count($victima) <= 1) {
                    // dd("victima: ".$victima);
                    Log::info('victima: ', ['vcount' => count($victima), 'vid' => $victima[0]->id]);

                    $id=$victima[0]->id;
                    $denuncia=$denuncia->join('denuncia_victima',function ($join) use($id){
                        $join->on('denuncia.id','=','denuncia_victima.denuncia_id');
                        $join->where('denuncia_victima.victima_id','=',$id);
                    });
                    $denuncia = $denuncia->where('tblmodulo_id','=',$request->user()->tblmodulo_id)->take(10)->get();
                    // $denuncia = $denuncia->where('tblmodulo_id','=',33)->take(10)->get();
                    $victima = [];

                    Log::info('denuncia: ', ['array' => $denuncia, 'dcount' => count($denuncia)]);
                }else{
                    $denuncia = [];
                    return response()->json([
                        'victima' => $victima,
                        'denuncia' => $denuncia,
                    ]);
                }
            }else{
                $denuncia = [];
                $victima = [];
            }
        }else{
            $denuncia = [];
            $victima = [];
        }

        return response()->json([
            'denuncia' => $denuncia,
            'victima' => $victima,
        ]);

    }

    public function findVictima(Request $request, $dni = '')
    {

        if ($dni != '') {
            $sql = " SELECT d.* from denuncia d join denuncia_victima dv on d.id=dv.denuncia_id join victima v on v.id=dv.victima_id where v.nro_doc = '".$dni."' and ( d.medida_file != '' or d.medida_file is not null) ";
            $filtro = DB::select(DB::raw($sql));

            if (count($filtro)>0) {
                $usuario = User::where('dni', '=', $dni)->first();
                if (count($usuario)<=0) {
                    $victima = Victima::where('nro_doc', '=', $dni)->first();
                    Log::info('victima: ', ['vc' => $victima]);
                    $status = 'success';
                    $msg = 'success';
                }else{
                    $victima = [];
                    $status = 'error';
                    $msg = 'El usuario ya ha sido registrado.';
                }
            }else{
                $victima = [];
                $status = 'error';
                $msg = 'El usuario no registra ningún expediente o no cumple los requisitos mínimos para registrarse.';
            }

        }else {
            $victima = [];
            $status = 'error';
            $msg = 'Debe proporcionar un nro de dni.';
        }

        return response()->json([
            'victima' => $victima,
            'status' => $status,
            'msg' => $msg,
        ]);

    }

    public function detailsVictimaExp(Request $request)
    {
        Log::info('search victima: ', ['request' => $request->all(),'request_user' => $request->user()]);
        $sql = " SELECT d.* from denuncia d join denuncia_victima dv on d.id=dv.denuncia_id join victima v on v.id=dv.victima_id where v.nro_doc = '".$request->user()->dni."' and ( d.medida_file != '' or d.medida_file is not null) ";
        $filtro = DB::select(DB::raw($sql));

        return response()->json([
            'filtro' => $filtro,
        ]);
    }

    public function detailsExpediente(Request $request, $expediente = '')
    {
        
        $denuncia = Denuncia::where('expediente', '=', $expediente)->where('tblmodulo_id','=',$request->user()->tblmodulo_id)->first();
        $element = [
            'instancia' => ($denuncia->tblinstancia->sigla !== 'undefined') ? $denuncia->tblinstancia->sigla : '',
            'institucion' => (isset($denuncia->tblcomisaria->nombre) && ($denuncia->tblcomisaria->nombre !== 'undefined')) ? $denuncia->tblcomisaria->nombre : '',
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
