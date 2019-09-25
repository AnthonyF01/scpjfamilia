<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;
use Illuminate\Validation\Rule;
use File;
use Auth;
use PDF;
use Charts;
use App\User;
use App\Models\Documento;
use App\Models\Denuncia;
use App\Models\Agresor;
use App\Models\Victima;
use App\Models\DenunciaVictima;
use App\Models\DenunciaTbldenuncia;
use App\Models\DenunciaAgresor;
use App\Models\Tbldepartamento;
use App\Models\Tblmodulo;
use App\Models\Tblcomisaria;
use App\Models\Tblinstancia;
use App\Models\Tblparentesco;
use App\Models\Tbldenuncia;
use App\Models\Tblmedida;
use App\Models\Tbldocumento;
use App\Models\Tbldpenal;
use App\Models\Tbltipo;
use App\Models\Tblviolencia;

use App\Charts\ExampleChart;

// use Charts;

class DenunciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $denuncias = DB::table('vdenuncia')->get();
        $denuncias = new Denuncia();

        $fillable = $denuncias->getFields();

        // descomentar para reemplazar lo de abajo y contar la fase 3 y 4
        /*$denuncias = $denuncias->select('denuncia.*',DB::raw(
            "(case
                when fdenuncia is not NULL then
                    case
                        when fformalizacion is not NULL then DATEDIFF(fformalizacion,fdenuncia)
                        else DATEDIFF(now(),fdenuncia)
                    end
                when fdenuncia is NULL then -1
            end) dform,

            (case
                when fformalizacion is not NULL then
                    case
                        when faudiencia is not NULL then DATEDIFF(faudiencia,fformalizacion)
                        else DATEDIFF(now(),fformalizacion)
                    end
                when fformalizacion is NULL then -1
            end) daud,

            (case
                when faudiencia is not NULL then
                    case
                        when fremision is not NULL then DATEDIFF(fremision,faudiencia)
                        else DATEDIFF(now(),faudiencia)
                    end
                when faudiencia is NULL then -1
            end) drem,

            (case
                when fremision is not NULL then
                    case
                        when fremisiond is not NULL then DATEDIFF(fremisiond,fremision)
                        else DATEDIFF(now(),fremision)
                    end
                when fremision is NULL then -1
            end) dden,

            (case
                when fremisiond is not NULL then
                    case
                        when fremisionj is not NULL then DATEDIFF(fremisionj,fremisiond)
                        else DATEDIFF(now(),fremisiond)
                    end
                when fremisiond is NULL then -1
            end) djuz,

            (
                (case
                    when fdenuncia is not NULL then
                        case
                            when fformalizacion is not NULL then DATEDIFF(fformalizacion,fdenuncia)
                            else DATEDIFF(now(),fdenuncia)
                        end
                    when fdenuncia is NULL then 0
                end) +
                (case
                    when fformalizacion is not NULL then
                        case
                            when faudiencia is not NULL then DATEDIFF(faudiencia,fformalizacion)
                            else DATEDIFF(now(),fformalizacion)
                        end
                    when fformalizacion is NULL then 0
                end) +
                (case
                    when faudiencia is not NULL then
                        case
                            when fremision is not NULL then DATEDIFF(fremision,faudiencia)
                            else DATEDIFF(now(),faudiencia)
                        end
                    when faudiencia is NULL then 0
                end) +
                (case
                    when fremision is not NULL then
                        case
                            when fremisiond is not NULL then DATEDIFF(fremisiond,fremision)
                            else DATEDIFF(now(),fremision)
                        end
                    when fremision is NULL then 0
                end) +
                (case
                    when fremisiond is not NULL then
                        case
                            when fremisionj is not NULL then DATEDIFF(fremisionj,fremisiond)
                            else DATEDIFF(now(),fremisiond)
                        end
                    when fremisiond is NULL then 0
                end)
            ) total,

            (case
                when registro_file is not NULL then 1
                when registro_file is NULL then 0
            end) registro"
        ));*/

        $denuncias = $denuncias->select('denuncia.*',DB::raw(
            "(case
                when fdenuncia is not NULL then
                    case
                        when fformalizacion is not NULL then DATEDIFF(fformalizacion,fdenuncia)
                        else DATEDIFF(now(),fdenuncia)
                    end
                when fdenuncia is NULL then -1
            end) dform,

            (case
                when fformalizacion is not NULL then
                    case
                        when faudiencia is not NULL then DATEDIFF(faudiencia,fformalizacion)
                        else DATEDIFF(now(),fformalizacion)
                    end
                when fformalizacion is NULL then -1
            end) daud,

            (
                (case
                    when fdenuncia is not NULL then
                        case
                            when fformalizacion is not NULL then DATEDIFF(fformalizacion,fdenuncia)
                            else DATEDIFF(now(),fdenuncia)
                        end
                    when fdenuncia is NULL then 0
                end) +
                (case
                    when fformalizacion is not NULL then
                        case
                            when faudiencia is not NULL then DATEDIFF(faudiencia,fformalizacion)
                            else DATEDIFF(now(),fformalizacion)
                        end
                    when fformalizacion is NULL then 0
                end)
            ) total1,

            (case
                when faudiencia is not NULL then
                    case
                        when fremision is not NULL then DATEDIFF(fremision,faudiencia)
                        else DATEDIFF(now(),faudiencia)
                    end
                when faudiencia is NULL then -1
            end) drem,

            (case
                when fremision is not NULL then
                    case
                        when fremisiond is not NULL then DATEDIFF(fremisiond,fremision)
                        else DATEDIFF(now(),fremision)
                    end
                when fremision is NULL then -1
            end) dden,

            (
                (case
                    when faudiencia is not NULL then
                        case
                            when fremision is not NULL then DATEDIFF(fremision,faudiencia)
                            else DATEDIFF(now(),faudiencia)
                        end
                    when faudiencia is NULL then 0
                end) +
                (case
                    when fremision is not NULL then
                        case
                            when fremisiond is not NULL then DATEDIFF(fremisiond,fremision)
                            else DATEDIFF(now(),fremision)
                        end
                    when fremision is NULL then 0
                end)
            ) total2,

            (case
                when fremisiond is not NULL then
                    case
                        when fremisionj is not NULL then DATEDIFF(fremisionj,fremisiond)
                        else DATEDIFF(now(),fremisiond)
                    end
                when fremisiond is NULL then -1
            end) djuz,

            (
                (case
                    when fdenuncia is not NULL then
                        case
                            when fformalizacion is not NULL then DATEDIFF(fformalizacion,fdenuncia)
                            else DATEDIFF(now(),fdenuncia)
                        end
                    when fdenuncia is NULL then 0
                end) +
                (case
                    when fformalizacion is not NULL then
                        case
                            when faudiencia is not NULL then DATEDIFF(faudiencia,fformalizacion)
                            else DATEDIFF(now(),fformalizacion)
                        end
                    when fformalizacion is NULL then 0
                end) +
                (case
                    when faudiencia is not NULL then
                        case
                            when fremision is not NULL then DATEDIFF(fremision,faudiencia)
                            else DATEDIFF(now(),faudiencia)
                        end
                    when faudiencia is NULL then 0
                end) +
                (case
                    when fremision is not NULL then
                        case
                            when fremisiond is not NULL then DATEDIFF(fremisiond,fremision)
                            else DATEDIFF(now(),fremision)
                        end
                    when fremision is NULL then 0
                end) +
                (case
                    when fremisiond is not NULL then
                        case
                            when fremisionj is not NULL then DATEDIFF(fremisionj,fremisiond)
                            else DATEDIFF(now(),fremisiond)
                        end
                    when fremisiond is NULL then 0
                end)
            ) total,

            (case
                when registro_file is not NULL then 1
                when registro_file is NULL then 0
            end) registro,

            (case
                when cem_file is not NULL then 1
                when cem_file is NULL then 0
            end) cem,

            (case
                when medicina_file is not NULL then 1
                when medicina_file is NULL then 0
            end) medicina"
        ));


        // $denuncias = $denuncias->paginate(10);
        // dd($denuncias);

        $request->session()->put('search', $request
            ->has('search') ? $request->get('search') : ($request->session()
            ->has('search') ? $request->session()->get('search') : ''));

        $request->session()->put('dni', $request
            ->has('dni') ? $request->get('dni') : ($request->session()
            ->has('dni') ? $request->session()->get('dni') : ''));

        // $request->session()->put('field', $request
        //     ->has('field') ? $request->get('field') : ( $request->session()
        //     ->has('field') ? ( array_search($request->session()->get('field'), $fillable) ?
        //         $request->session()->get('field') : 'expediente' ) : 'expediente') );

        $request->session()->put('field', $request
            ->has('field') ? $request->get('field') : ( $request->session()
            ->has('field') ? $request->session()->get('field') : 'expediente') );

        $request->session()->put('sort', $request
            ->has('sort') ? $request->get('sort') : ($request->session()
            ->has('sort') ? $request->session()->get('sort') : 'asc'));

        $request->session()->put('show', $request
            ->has('show') ? $request->get('show') : ($request->session()
            ->has('show') ? ( is_numeric($request->session()->get('show')) ?
              $request->session()->get('show') : '10' ) : '10'));

        $request->session()->put('estado', $request
            ->has('estado') ? $request->get('estado') : ($request->session()
            ->has('estado') ? ( is_numeric($request->session()->get('estado')) ?
              $request->session()->get('estado') : '0' ) : '0'));

        $request->session()->put('tblinstancia_id', $request
            ->has('tblinstancia_id') ? $request->get('tblinstancia_id') : ($request->session()
            ->has('tblinstancia_id') ? ( is_numeric($request->session()->get('tblinstancia_id')) ?
              $request->session()->get('tblinstancia_id') : '' ) : ''));

        // dd($request->session()->get('tblinstancia_id'));

        $request->session()->put('tblcomisaria_id', $request
            ->has('tblcomisaria_id') ? $request->get('tblcomisaria_id') : ($request->session()
            ->has('tblcomisaria_id') ? ( is_numeric($request->session()->get('tblcomisaria_id')) ?
              $request->session()->get('tblcomisaria_id') : '' ) : ''));

        $request->session()->put('checked', $request
            ->has('checked') ? $request->get('checked') : ($request->session()
            ->has('checked') ? ( is_numeric($request->session()->get('checked')) ?
              $request->session()->get('checked') : '0' ) : '0'));

        $request->session()->put('fecha1', $request
            ->has('fecha1') ? $request->get('fecha1') : ( $request->session()
            ->has('fecha1') ? $request->session()->get('fecha1') : date('Y-m-d') ));

        $request->session()->put('fecha2', $request
            ->has('fecha2') ? $request->get('fecha2') : ( $request->session()
            ->has('fecha2') ? $request->session()->get('fecha2') : date('Y-m-d') ));

        $search=$request->session()->get('search');

        if ($request->session()->get('dni') != '') {
            $dni=$request->session()->get('dni');
            // $victima=Victima::where('nro_doc',$dni)->first();
            // if ($victima) $id=$victima->id;
            // else $id=0;
            // $denuncias=$denuncias->join('denuncia_victima',function ($join) use($id){
            //     $join->on('denuncia.id','=','denuncia_victima.denuncia_id');
            //     $join->where('denuncia_victima.victima_id','=',$id);
            // });

            $denuncias = $denuncias->join('denuncia_victima','denuncia.id','=','denuncia_victima.denuncia_id')
                                    ->join('victima','victima.id','=','denuncia_victima.victima_id')
                                    ->where('victima.nro_doc',$dni)
                                        ->orwhere(function ($query) use ($dni) {
                                            $query->orwhere('victima.nombre','like', '%'.$dni.'%')
                                              ->orWhere('victima.apellido','like', '%'.$dni.'%');
                                    });

            if ($search) {
                $denuncias = $denuncias->where('expediente', 'like', "%$search%");
            }
        }
        else{
            $denuncias = $denuncias->where('expediente', 'like', "%$search%");
        }

        $denuncias = $denuncias->where('tblmodulo_id', Auth::user()->tblmodulo_id);
            
        // dd($denuncias->get());

        if ($request->session()->get('tblinstancia_id') != '') {
            $denuncias = $denuncias->where('tblinstancia_id', $request->session()->get('tblinstancia_id'));
        }

        if ($request->session()->get('tblcomisaria_id') != '') {
            $denuncias = $denuncias->where('tblcomisaria_id', $request->session()->get('tblcomisaria_id'));
        }

        if ($request->session()->get('estado') != '0') {
            if ($request->session()->get('estado') == '2') {
                // Pendientes
                $denuncias = $denuncias->where(function ($query) {
                    $query->where(function ($query) {
                                $query->whereNull('fdenuncia')
                                      ->orWhereNull('fformalizacion')
                                      ->orWhereRaw('fdenuncia > fformalizacion');
                            })
                            ->orWhere(function ($query) {
                                $query->whereNull('fformalizacion')
                                      ->orWhereNull('faudiencia')
                                      ->orWhereRaw('fformalizacion > faudiencia');
                            })
                            ->orWhere(function ($query) {
                                $query->whereNull('faudiencia')
                                      ->orWhereNull('fremision')
                                      ->orWhereRaw('faudiencia > fremision');
                            })
                            ->orWhere(function ($query) {
                                $query->whereNull('fremision')
                                      ->orWhereNull('fremisiond')
                                      ->orWhereRaw('fremision > fremisiond');
                            })
                            ->orWhere(function ($query) {
                                $query->whereNull('fremisiond')
                                      ->orWhereNull('fremisionj')
                                      ->orWhereRaw('fremisiond > fremisionj');
                            });
                });
            }else{
                // Tramitados
                $denuncias = $denuncias->where(function ($query) {
                    $query->where(function ($query) {
                                $query->whereNotNull('fdenuncia')
                                      ->whereNotNull('fformalizacion')
                                      ->whereRaw('fdenuncia <= fformalizacion');
                            })
                            ->where(function ($query) {
                                $query->whereNotNull('fformalizacion')
                                      ->whereNotNull('faudiencia')
                                      ->whereRaw('fformalizacion <= faudiencia');
                            })
                            ->where(function ($query) {
                                $query->whereNotNull('faudiencia')
                                      ->whereNotNull('fremision')
                                      ->whereRaw('faudiencia <= fremision');
                            })
                            ->where(function ($query) {
                                $query->whereNotNull('fremision')
                                      ->whereNotNull('fremisiond')
                                      ->whereRaw('fremision <= fremisiond');
                            })
                            ->where(function ($query) {
                                $query->whereNotNull('fremisiond')
                                      ->whereNotNull('fremisionj')
                                      ->whereRaw('fremisiond <= fremisionj');
                            });
                });
            }
        }

        if ($request->session()->get('checked') != '0') {
            $denuncias = $denuncias->whereBetween('fformalizacion', [$request->session()->get('fecha1'),$request->session()->get('fecha2')]);
        }


        // dd($denuncias->toSql());
        // dd($request->session()->get('field'), $request->session()->get('sort'),$request->session()->get('show'),$denuncias->toSql(), $denuncias->getBindings());

        $denuncias->groupBy('denuncia.id');
        $denuncias = $denuncias
            ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
            ->paginate($request->session()->get('show'));


        // dd($denuncias);

        // dd($request->session()->get('fecha1'), $request->session()->get('fecha2'));

        // dd($request->session()->get('field'), $request->session()->get('sort'));

        $comisarias = Tblcomisaria::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->whereNull('deleted_at')->where('tipo_int','=',0)->orderBy('nombre')->pluck('nombre', 'id');

        $instancias = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->whereNull('deleted_at')->where('tblmodulo_id',Auth::user()->tblmodulo_id)
        ->where(function ($query) {
            $query->where('tipo','FA')->orwhere('tipo','JM')->orwhere('estadistica','1');
        })->orderBy('nombre')->pluck('nombre', 'id');

        $anios = new Denuncia();

        $anios = $anios->select(DB::raw("year(fformalizacion) as id, year(fformalizacion) as anio"))
                     ->where('tblmodulo_id', Auth::user()->tblmodulo_id)->whereNotNull('fformalizacion')->whereNull('deleted_at')->orderBy('id','desc')->pluck('anio', 'id');

        if ($request->ajax()) {
          return view('denuncia.denuncia.ajax', compact('denuncias','comisarias','instancias','anios'));
        } else {
          return view('denuncia.denuncia.index', compact('denuncias','comisarias','instancias','anios'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $comisarias = Tblcomisaria::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo_int','=',0)->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $instituciones = Tblcomisaria::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo_int','=',1)->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $parentescos = Tblparentesco::orderBy('nombre')->pluck('nombre', 'id');
        $instancias = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tblmodulo_id',Auth::user()->tblmodulo_id)->whereNull('deleted_at')
        ->where(function ($query) {
            $query->where('tipo','FA')->orwhere('tipo','JM')->orwhere('estadistica','1');
        })->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasPL = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tblmodulo_id',Auth::user()->tblmodulo_id)->where('tipo','PL')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        // dd($instanciasPL);
        $instanciasMIN = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tblmodulo_id',Auth::user()->tblmodulo_id)->where('tipo','MP')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasJIP = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tblmodulo_id',Auth::user()->tblmodulo_id)->where('tipo','IP')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasJP = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tblmodulo_id',Auth::user()->tblmodulo_id)->where('tipo','PU')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $tdenuncias = Tbldenuncia::orderBy('nombre')->whereNull('deleted_at')->pluck('nombre', 'id');
        $tbldpenales = Tbldpenal::with('hijos')->where('nivel',1)->get();
        $instanciasSS = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tblmodulo_id',Auth::user()->tblmodulo_id)->where('tipo','SS')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasSSP = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tblmodulo_id',Auth::user()->tblmodulo_id)->where('tipo','SSP')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $medidas = Tblmedida::orderBy('nombre')->whereNull('deleted_at')->pluck('nombre', 'id');
        $violencias = Tblviolencia::orderBy('nombre')->whereNull('deleted_at')->pluck('nombre', 'id');

        $departamentos = Tbldepartamento::whereNull('deleted_at')->pluck('nombre', 'id');
        $documentos = Tbldocumento::orderBy('nombre','asc')->whereNull('deleted_at')->pluck('nombre', 'id');
        $tipos = Tbltipo::whereNull('deleted_at')->pluck('nombre', 'id');

        return view('denuncia.denuncia.partials.form', compact('denuncia','comisarias','instituciones','instancias','instanciasPL','instanciasMIN','instanciasJIP','instanciasJP','parentescos','tbldpenales','instanciasSS','instanciasSSP','medidas','violencias','tdenuncias','departamentos','documentos','tipos'));

    }

    /**
     * Generate a alfanumeric code
     * @param $longitud int
     * @return string
     */
    public function generarCodigo($longitud)
    {
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
        return $key;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (isset($request['action']) && !empty($request['action'])) {
            if ($request['action'] == 'victima') {

                $messages = array(
                    'required' => ':attribute es obligatorio.',
                );

                $attributes = array(
                    'victima_id' => 'Victima',
                );

                $rules = [
                    'victima_id' => 'required|exists:victima,id',
                ];

                $input = [
                    'victima_id' => $request['victima_id'],
                ];

                // validar victima
                $validator = Validator::make($input, $rules, $messages);
                $validator->setAttributeNames($attributes);

                if ($validator->fails()) {
                    return response()->json([
                      'fail' => true,
                      'errors' => $validator->errors()
                    ]);
                }else{
                    $denuncia = Denuncia::create([
                        'tblmodulo_id' => Auth::user()->tblmodulo_id,
                    ]);
                    $input['denuncia_id'] = $denuncia->id;
                    $denuncia_victima = DenunciaVictima::create($input);
                    return response()->json([
                        'tab' => 'victima',
                        'type' => 'store',
                        'status' => 'success',
                        'info' => 'Victima registrada en la denuncia.',
                        'url'  => route('denuncia.edit', ['id' => $denuncia->id ]),
                    ]);
                }

            }
            if ($request['action'] == 'agresor') {

                $messages = array(
                    'required' => ':attribute es obligatorio.',
                );

                $attributes = array(
                    'agresor_id' => 'Agresor',
                    'tblparentesco_id' => 'Parentesco',
                );

                $rules = [
                    'agresor_id' => 'required|exists:agresor,id',
                    'tblparentesco_id' => 'required|exists:tblparentesco,id',
                ];

                $input = [
                    'agresor_id' => $request['agresor_id'],
                    'tblparentesco_id' => $request['tblparentesco_id'],
                ];

                // validar agresor
                $validator = Validator::make($input, $rules, $messages);
                $validator->setAttributeNames($attributes);

                if ($validator->fails()) {
                    return response()->json([
                      'fail' => true,
                      'errors' => $validator->errors()
                    ]);
                }else{
                    $denuncia = Denuncia::create([
                        'tblmodulo_id' => Auth::user()->tblmodulo_id,
                    ]);
                    $input['denuncia_id'] = $denuncia->id;
                    $denuncia_agresor = DenunciaAgresor::create($input);
                    return response()->json([
                        'tab' => 'agresor',
                        'type' => 'store',
                        'status' => 'success',
                        'info' => 'Agresor registrado en la denuncia.',
                        'url'  => route('denuncia.edit', ['id' => $denuncia->id ]),
                    ]);
                }

            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Denuncia  $denuncia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function autocomplete(Request $request)
    {
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $sql = "SELECT DISTINCT v.id,v.nombre,v.apellido,v.nro_doc,v.name1,v.name2 FROM ( select id,nombre,apellido,nro_doc,CONCAT(nombre,' ',apellido) as name1,CONCAT(apellido,' ',nombre) as name2 from victima ) as v WHERE v.nombre LIKE '%$search%' OR (v.nombre LIKE '%$search%' OR v.apellido LIKE '%$search%' OR v.nro_doc LIKE '%$search%' OR v.name1 LIKE '%$search%' OR v.name2 LIKE '%$search%') ORDER BY v.nombre ASC limit 5";

            $data = DB::select( DB::raw($sql) );

        }

        return response()->json($data);
    }
    
    public function getGData(Request $request)
    {

      if ((isset($request['anio']) && !empty($request['anio'])) && (isset(Auth::user()->tblmodulo_id) && !empty(Auth::user()->tblmodulo_id))) {
        $sql = " SELECT distinct ti.nombre,ti.sigla,ti.tipo,IFNULL(count(d.id),0) as total FROM `tblinstancia` ti left join ( select * from denuncia d where d.tblmodulo_id = ".Auth::user()->tblmodulo_id." and year(d.fformalizacion) = ".$request['anio'];
        if (isset($request['mes']) && !empty($request['mes'])) {
          $sql .= " AND month(d.fformalizacion) = ".$request['mes']." ";
        }
        $sql .= " and d.deleted_at is null) as d on d.tblinstancia_id=ti.id where ti.deleted_at is null and ti.tbldepartamento_id = ".Auth::user()->tbldepartamento_id." and (ti.tipo = 'FA' or ti.tipo = 'JM' or ti.estadistica = '1') group by ti.nombre order by ti.nombre ";
        $instancia = DB::select(DB::raw($sql));

        $data = array();
        $json = [];

        foreach ($instancia as $r) {
          $json[] = [
            'nombre'=>$r->nombre,
            'name'=>$r->sigla,
            'y'=>(int)$r->total,
          ];
          $maxHeight[] = (int)$r->total;
        }

        if (isset($maxHeight) && !empty($maxHeight)) {
          $data['json'] = $json;
          $data['maxHeight'] = $maxHeight;
          $data['anio'] = $request['anio'];
          if (isset($request['mes']) && !empty($request['mes'])) {
              $data['mes'] = $request['mes'];
          }
        }


      }else {
        $data = [];
      }

      echo json_encode($data);
    }

    /**
     * Display the report view.
     *
     * @param  \App\Models\Denuncia  $denuncia
     * @return \Illuminate\Http\Response
     */
    public function report(Request $request)
    {

        $anios = new Denuncia();

        $anios = $anios->select(DB::raw("year(fformalizacion) as id, year(fformalizacion) as anio"))
                     ->where('tblmodulo_id', Auth::user()->tblmodulo_id)->whereNotNull('fformalizacion')->whereNull('deleted_at')->orderBy('id','desc')->pluck('anio', 'id');

        $comisarias = Tblcomisaria::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo_int',0)->where('color','green')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');

        // $instancias = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->orderBy('nombre')->pluck('nombre', 'id');

        $instancias = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->whereNull('deleted_at')
        ->where(function ($query) {
            $query->where('tipo','FA')->orwhere('tipo','JM')->orwhere('estadistica','1');
        })->orderBy('nombre')->pluck('nombre', 'id');


        if ($request->ajax()) {

            // dd($request['search']);

            $denuncias = new Denuncia();

            $denuncias = $denuncias->select('denuncia.*',DB::raw("(case
                when fdenuncia is not NULL then
                    case
                        when fformalizacion is not NULL then DATEDIFF(fformalizacion,fdenuncia)
                        else DATEDIFF(now(),fdenuncia)
                    end
                when fdenuncia is NULL then -1 end ) dform, (case
                when fformalizacion is not NULL then
                    case
                        when faudiencia is not NULL then DATEDIFF(faudiencia,fformalizacion)
                        else DATEDIFF(now(),fformalizacion)
                    end
                when fformalizacion is NULL then -1 end ) daud, (case
                when faudiencia is not NULL then
                    case
                        when fremision is not NULL then DATEDIFF(fremision,faudiencia)
                        else DATEDIFF(now(),faudiencia)
                    end
                when faudiencia is NULL then -1 end ) drem, (case
                when fremision is not NULL then
                    case
                        when fremisiond is not NULL then DATEDIFF(fremisiond,fremision)
                        else DATEDIFF(now(),fremision)
                    end
                when fremision is NULL then -1 end ) dden, (case
                when fremisiond is not NULL then
                    case
                        when fremisionj is not NULL then DATEDIFF(fremisionj,fremisiond)
                        else DATEDIFF(now(),fremisiond)
                    end
                when fremisiond is NULL then -1 end ) djuz, ((case
                when fdenuncia is not NULL then
                    case
                        when fformalizacion is not NULL then DATEDIFF(fformalizacion,fdenuncia)
                        else DATEDIFF(now(),fdenuncia)
                    end
                when fdenuncia is NULL then 0 end ) + (case
                when fformalizacion is not NULL then
                    case
                        when faudiencia is not NULL then DATEDIFF(faudiencia,fformalizacion)
                        else DATEDIFF(now(),fformalizacion)
                    end
                when fformalizacion is NULL then 0 end ) + (case
                when faudiencia is not NULL then
                     case
                        when fremision is not NULL then DATEDIFF(fremision,faudiencia)
                        else DATEDIFF(now(),faudiencia)
                    end
                when faudiencia is NULL then 0 end ) + (case
                when fremision is not NULL then
                    case
                        when fremisiond is not NULL then DATEDIFF(fremisiond,fremision)
                        else DATEDIFF(now(),fremision)
                    end
                when fremision is NULL then 0 end ) + (case
                when fremisiond is not NULL then
                    case
                        when fremisionj is not NULL then DATEDIFF(fremisionj,fremisiond)
                        else DATEDIFF(now(),fremisiond)
                    end
                when fremisiond is NULL then 0 end )) total, (case
                when registro_file is not NULL then 1
                when registro_file is NULL then 0 end ) registro"));

            $denuncias = $denuncias
            ->where('expediente', 'like', '%' . $request['search'] . '%')
            ->where('tblmodulo_id', Auth::user()->tblmodulo_id)
            ->whereNull('deleted_at');

            // if ($request['tdias'] != '') {
            //     $denuncias = $denuncias->having('total', '<=', $request['tdias']);
            // }

            if ($request['tblinstancia_id'] != '') {
                $denuncias = $denuncias->where('tblinstancia_id', $request['tblinstancia_id']);
            }

            if ($request['tblcomisaria_id'] != '') {
                $denuncias = $denuncias->where('tblcomisaria_id', $request['tblcomisaria_id']);
            }

            if ($request['anio'] != '') {
                $denuncias = $denuncias->whereYear('fformalizacion', $request['anio']);
            }

            if ($request['mes'] != '0') {
                $denuncias = $denuncias->whereMonth('fformalizacion', $request['mes']);
            }

            if ((isset($request['formalizacion']) && isset($request['audiencia']) && isset($request['remision']) && isset($request['denuncia']) && isset($request['juzgado'])) && ($request['formalizacion'] != '0' || $request['audiencia'] != '0' || $request['remision'] != '0' || $request['denuncia'] != '0' || $request['juzgado'] != '0')) {
                $denuncias = $denuncias->where(function ($query) use ($request) {
                    if (isset($request['formalizacion']) && $request['formalizacion'] != '0') {
                        $query->where(function ($query) {
                                $query->whereNull('fdenuncia')
                                      ->orWhereNull('fformalizacion')
                                      ->orWhereRaw('fdenuncia > fformalizacion');
                            });
                    }
                    if (isset($request['audiencia']) && $request['audiencia'] != '0') {
                        $query->Where(function ($query) {
                                $query->whereNull('fformalizacion')
                                      ->orWhereNull('faudiencia')
                                      ->orWhereRaw('fformalizacion > faudiencia');
                            });
                    }
                    if (isset($request['remision']) && $request['remision'] != '0') {
                        $query->Where(function ($query) {
                                $query->whereNull('faudiencia')
                                      ->orWhereNull('fremision')
                                      ->orWhereRaw('faudiencia > fremision');
                            });
                    }
                    if (isset($request['denuncia']) && $request['denuncia'] != '0') {
                        $query->Where(function ($query) {
                                $query->whereNull('fremision')
                                      ->orWhereNull('fremisiond')
                                      ->orWhereRaw('fremision > fremisiond');
                            });
                    }
                    if (isset($request['juzgado']) && $request['juzgado'] != '0') {
                        $query->Where(function ($query) {
                                $query->whereNull('fremisiond')
                                      ->orWhereNull('fremisionj')
                                      ->orWhereRaw('fremisiond > fremisionj');
                            });
                    }
                });
            }


            if ((isset($request['fecha1']) && isset($request['fecha2'])) && (!empty($request['fecha1']) && !empty($request['fecha2']))) {
                $denuncias = $denuncias->whereBetween('fformalizacion', [$request['fecha1'],$request['fecha2']]);
            }


            // Agresores reincidentes:
            if (isset($request['agresor']) && $request['agresor'] != '0') {
                $denuncias = $denuncias->join(DB::raw("
                    (
                        SELECT d.id from denuncia d
                        join denuncia_agresor da on d.id=da.denuncia_id
                        join (
                            select da.agresor_id, count(d.id) from denuncia_agresor da
                            join denuncia d on d.id=da.denuncia_id
                            where d.tblmodulo_id=".Auth::user()->tblmodulo_id."
                            GROUP by da.agresor_id HAVING COUNT(d.id) > 1
                        ) as tag on tag.agresor_id=da.agresor_id
                        where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.deleted_at is null
                    ) ctag
                "),'ctag.id','=','denuncia.id');
            }

            // Victimas reincidentes:
            if (isset($request['victima']) && $request['victima'] != '0') {
                $denuncias = $denuncias->join(DB::raw("
                    (
                        select d.id from denuncia d
                        join denuncia_victima dv on d.id=dv.denuncia_id
                        join (
                            select dv.victima_id, count(d.id) from denuncia_victima dv
                            join denuncia d on d.id=dv.denuncia_id
                            where d.tblmodulo_id=".Auth::user()->tblmodulo_id."
                            GROUP by dv.victima_id HAVING COUNT(d.id) > 1
                        ) as tvc on tvc.victima_id=dv.victima_id
                        where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.deleted_at is null
                    ) ctvc
                "),'ctvc.id','=','denuncia.id');
            }

            // dd($request);

            // dd($denuncias->toSql());
            // dd($denuncias->toSql(), $denuncias->getBindings());

            if (isset($request['type']) && $request['type'] == 'list') {
                $denuncias = $denuncias
                    // ->orderBy('expediente', 'asc')
                    ->orderBy('fformalizacion', 'asc')
                    ->paginate(10);
                $tdias = ( isset($request['tdias']) && $request['tdias'] != '' ) ? $request['tdias'] : '-1' ;

                return view('denuncia.denuncia.report.ajax', compact('denuncias','tdias'));
            }else{
                if (isset($request['type']) && $request['type'] == 'report') {

                    $denuncias = $denuncias
                        ->orderBy('expediente', 'asc')
                        ->get();

                    $filters = [];
                    $filters['instancia'] = ( isset($request['tblinstancia_id'])&&!empty($request['tblinstancia_id']) ) ? Tblinstancia::where('id',$request['tblinstancia_id'])->first()->nombre : '';
                    $filters['comisaria'] = ( isset($request['tblcomisaria_id'])&&!empty($request['tblcomisaria_id']) ) ? Tblcomisaria::where('id',$request['tblcomisaria_id'])->first()->nombre : '';
                    $filters['formalizacion'] = $request['formalizacion'];
                    $filters['audiencia'] = $request['audiencia'];
                    $filters['remision'] = $request['remision'];
                    $filters['denuncia'] = $request['denuncia'];
                    $filters['juzgado'] = $request['juzgado'];
                    $filters['victima'] = $request['victima'];
                    $filters['agresor'] = $request['agresor'];
                    $filters['search'] = (isset($request['search'])&&!empty($request['search'])) ? $request['search'] : '';
                    $filters['anio'] = (isset($request['anio'])&&!empty($request['anio'])) ? $request['anio'] : '0';
                    $filters['mes'] = $request['mes'];
                    $filters['fecha1'] = ( isset($request['fecha1'])&&!empty($request['fecha1']) ) ? $request['fecha1'] : '';
                    $filters['fecha2'] = ( isset($request['fecha2'])&&!empty($request['fecha2']) ) ? $request['fecha2'] : '';

                    PDF::setOptions(['dpi' => 72, 'defaultFont' => 'sans-serif']);

                    // $pdf = PDF::make('dompdf.wrapper');
                    $view = view('denuncia.denuncia.report.show', compact('filters','denuncias','img','img1','img2'));
                    // $pdf = PDF::loadHTML($view);
                    $pdf = PDF::loadHTML($view);
                    $pdf->setPaper('A4', 'landscape');
                    // $pdf->setPaper('A4');
                    return $pdf->stream();
                    // return $pdf->download('file.pdf');

                    // return view('denuncia.denuncia.report.show', compact('denuncias'));
                }
            }


            // return view('denuncia.denuncia.report.ajax');
        } else {

            $chart = new ExampleChart;
            $chart->labels(['One', 'Two', 'Three', 'Four']);
            $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
            $chart->dataset('My dataset 2', 'line', [4, 3, 2, 1]);

            return view('denuncia.denuncia.report.report', compact('anios','comisarias','instancias','chart','request'));
        }


    }

    /**
     * Display the import view.
     *
     * @param  \App\Models\Denuncia  $denuncia
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request)
    {
        if ($request->ajax()) {
        }else {
            return view('denuncia.denuncia.import.import');
        }

    }

    public function importCSV(Request $request)
    {

        if ( ($request->file('file_denuncia') && $request->hasFile('file_denuncia')) && ($request->file('file_agresor') && $request->hasFile('file_agresor')) && ($request->file('file_victima') && $request->hasFile('file_victima')) ) {

            // Denuncia
            $filename = $request->file('file_denuncia')->getClientOriginalName();
            $filetype = $request->file('file_denuncia')->getClientOriginalExtension();
            $public_path = public_path();
            $public_path = str_replace("\\", "/", $public_path);
            $path = $public_path.'/img/import/';
            if (!file_exists($path)) { // crea el directorio si no existe
                mkdir($path, 0777, true); // todos los permisos
            }
            $file_named = $filename.'.'.$filetype;
            $request->file('file_denuncia')->move($path,$file_named);

            // Agresor
            $filename = $request->file('file_agresor')->getClientOriginalName();
            $filetype = $request->file('file_agresor')->getClientOriginalExtension();
            $public_path = public_path();
            $public_path = str_replace("\\", "/", $public_path);
            $path = $public_path.'/img/import/';
            if (!file_exists($path)) { // crea el directorio si no existe
                mkdir($path, 0777, true); // todos los permisos
            }
            $file_namea = $filename.'.'.$filetype;
            $request->file('file_agresor')->move($path,$file_namea);

            // Victima
            $filename = $request->file('file_victima')->getClientOriginalName();
            $filetype = $request->file('file_victima')->getClientOriginalExtension();
            $public_path = public_path();
            $public_path = str_replace("\\", "/", $public_path);
            $path = $public_path.'/img/import/';
            if (!file_exists($path)) { // crea el directorio si no existe
                mkdir($path, 0777, true); // todos los permisos
            }
            $file_namev = $filename.'.'.$filetype;
            $request->file('file_victima')->move($path,$file_namev);

            $fdenuncia = $path.$file_named;
            $fagresor = $path.$file_namea;
            $fvictima = $path.$file_namev;

            if (file_exists($fdenuncia) && file_exists($fagresor) && file_exists($fvictima)) {

                // max execution time (mysql)
                // ini_set('max_execution_time', 0);
                set_time_limit(0);

                $row = 1;
                if (($handle = fopen($fdenuncia, "r")) !== FALSE) {
                  while (($data = fgetcsv($handle, 0, ";")) !== FALSE) {
                    $num = count($data);
                    if ($row > 1) {
                      // $messages .= "Linea: ".$row;
                      // $fila = "('1',";
                      // for ($c=0; $c < $num; $c++) {
                      //   if ($c == ($num - 1)) {
                      //     if ($data[$c] == 'null') {
                      //       $fila .= $data[$c];
                      //     }else{
                      //       $fila .= "'".str_replace("'", '', $data[$c])."'";
                      //     }
                      //   }else{
                      //     if ($data[$c] == 'null') {
                      //       $fila .= $data[$c].",";
                      //     }else{
                      //       $fila .= "'".str_replace("'", '', $data[$c])."',";
                      //     }
                      //   }
                      // }
                      // $fila .= ",'20')";

                      $input = [
                          'tblcomisaria_id' => (!empty($data[0]) && isset($data[0]) && ($data[0]))? $data[0] : null,
                          'oficio' => (!empty($data[1]) && isset($data[1]) && ($data[1]))? $data[1] : null,
                          'fdenuncia' => (!empty($data[2]) && isset($data[2]) && ($data[2]))? $data[2] : null,
                          'fformalizacion' => (!empty($data[3]) && isset($data[3]) && ($data[3]))? $data[3] : null,
                          'expediente' => (!empty($data[4]) && isset($data[4]) && ($data[4]))? $data[4] : null,
                          'calificacion' => (!empty($data[5]) && isset($data[5]) && ($data[5]))? $data[5] : null,
                          'hora' => (!empty($data[6]) && isset($data[6]) && ($data[6]))? $data[6] : null,
                          'faudiencia' => (!empty($data[7]) && isset($data[7]) && ($data[7]))? $data[7] : null,
                          'remitido' => (!empty($data[8]) && isset($data[8]) && ($data[8]))? $data[8] : null,
                          'oficioremitido' => (!empty($data[9]) && isset($data[9]) && ($data[9]))? $data[9] : null,
                          'fremision' => (!empty($data[10] && isset($data[10]) && ($data[10])))? $data[10] : null,
                          'ministerio' => (!empty($data[11] && isset($data[11]) && ($data[11])))? $data[11] : null,
                          'tblinstancia_id' => (!empty($data[12]) && isset($data[12]) && ($data[12]))? $data[12] : null,
                          'asistencialegal' => (!empty($data[13]) && isset($data[13]) && ($data[13]))? $data[13] : null,
                          'psicologia' => (!empty($data[14]) && isset($data[14]) && ($data[14]))? $data[14] : null,
                          'tblmodulo_id' => (!empty($data[15]) && isset($data[15]) && ($data[15]))? $data[15] : null,
                          'medida_file' => (!empty($data[16]) && isset($data[16]) && ($data[16]))? $data[16] : null,
                          'institucion' => (!empty($data[17]) && isset($data[17]) && ($data[17]))? $data[17] : null,
                          'tbldenuncia_id' => (!empty($data[18]) && isset($data[18]) && ($data[18]))? $data[18] : null,
                          'fmedida' => (!empty($data[19]) && isset($data[19]) && ($data[19]))? $data[19] : null,
                      ];

                      // Si en caso de error de subida del excel o al haber registros repetidos de denuncia (por expediente)
                      // se verifica si el expediente ha sido registrado

                      $bdenuncia = Denuncia::where('expediente','=',str_replace("'", '', $data[4]))->get();

                      // si no existe denuncia en la bd ( search(expediente) == 0 )
                      if(count($bdenuncia) == 0){

                        $denuncia = Denuncia::create($input);

                        // VICTIMAS
                        $rowv = 1;
                        if (($handlev = fopen($fvictima, "r")) !== FALSE) {
                          while (($datav = fgetcsv($handlev, 0, ";")) !== FALSE) {
                            $datav = array_map("utf8_encode", $datav);
                            $numv = count($datav);
                            if ($rowv > 1) {
                              if ($data[4] == $datav[0]) {
                                // $messages .= "D-".$row." => Linea: ".$rowv." => Victima: ";
                                // $filav = "('1',";
                                // for ($cv=0; $cv < $numv; $cv++) {
                                //   if ($cv > 0) {
                                //     if ($cv == ($numv - 1)) {
                                //       $filav .= "'".str_replace("'", '', $datav[$cv])."'";
                                //     }else{
                                //       $filav .= "'".str_replace("'", '', $datav[$cv])."',";
                                //     }
                                //   }
                                // }
                                // $filav .= ")";

                                $input = [
                                    'tbldocumento_id' => 2,
                                    'nro_doc' => $datav[1],
                                    'nombre' => $datav[2],
                                    'apellido' => $datav[3],
                                    'edad' => $datav[4],
                                    'hijos' => $datav[5],
                                    'tbltipo_id' => $datav[6],
                                    'tbldepartamento_id' => $datav[7],
                                    'tblprovincia_id' => $datav[8],
                                    'tbldistrito_id' => $datav[9],
                                    'telefono' => $datav[11],
                                    'direccion' => $datav[12],
                                ];








                                // ******************************

                                // verificar si la victima es una institucion (solo DNI) || ver SUNAT::Tipo de Documento

                                // Es complicado hacer esto, habria que agregar un tipo a las victimas: [ persona, institucion ]
                                // en el excel (CSV)

                                // if (is_numeric($datav[3])) {
                                //   # code...
                                // }

                                // ******************************







                                // verificar si la victima esta registrada (por dni)
                                $victima = Victima::where('nro_doc','=',$datav[1])->first();

                                if(count($victima) <> 0){
                                  // existe victima
                                  // $victima = $_oControl->obtener_cursor($bresultv);
                                  // $victima = $victima['id_victima'];
                                }else{
                                  // insertar victima

                                  $victima = Victima::create($input);

                                }

                                // insertar victima_denuncia

                                $input = [
                                    'denuncia_id' => $denuncia->id,
                                    'victima_id' => $victima->id,
                                ];

                                $denuncia_victima = DenunciaVictima::create($input);

                              }

                            }
                            $rowv++;
                          }
                          fclose($handlev);

                        }

                        // AGRESORES
                        $rowa = 1;
                        if (($handlea = fopen($fagresor, "r")) !== FALSE) {
                          while (($dataa = fgetcsv($handlea, 0, ";")) !== FALSE) {
                            $dataa = array_map("utf8_encode", $dataa);
                            $numa = count($dataa);
                            if ($rowa > 1) {
                              if ($data[4] == $dataa[0]) {
                                // $messages .= "D-".$row." => Linea: ".$rowa." => Agresor: ";
                                // $filaa = "('1',";
                                // for ($ca=0; $ca < $numa; $ca++) {
                                //   if ($ca > 0) {
                                //     if ($ca == ($numa - 1)) {
                                //       $filaa .= "'".str_replace("'", '', $dataa[$ca])."'";
                                //     }else{
                                //       $filaa .= "'".str_replace("'", '', $dataa[$ca])."',";
                                //     }
                                //   }
                                // }
                                // $filaa .= ")";

                                $input = [
                                    'tbldocumento_id' => 2,
                                    'nro_doc' => $dataa[1],
                                    'nombre' => $dataa[2],
                                    'apellido' => $dataa[3],
                                    'sexo' => $dataa[4],
                                    'tbldepartamento_id' => $dataa[5],
                                    'tblprovincia_id' => $dataa[6],
                                    'tbldistrito_id' => $dataa[7],
                                ];

                                // verificar si la agresor esta registrada (por dni)
                                $agresor = Agresor::where('nro_doc','=',$dataa[1])->first();

                                if(count($agresor) <> 0){
                                  // existe agresor
                                  // $agresor = $_oControl->obtener_cursor($bresultv);
                                  // $agresor = $agresor['id_agresor'];
                                }else{
                                  // insertar agresor
                                  $agresor = Agresor::create($input);
                                }

                                // insertar agresor_denuncia
                                $input = [
                                    'denuncia_id' => $denuncia->id,
                                    'agresor_id' => $agresor->id,
                                    'tblparentesco_id' => $dataa[9],
                                ];
                                $denuncia_agresor = DenunciaAgresor::create($input);

                              }

                            }
                            $rowa++;
                          }
                          fclose($handlea);

                        }

                        // $messages .= "</div>";

                      }

                    }
                    $row++;
                  }
                  fclose($handle);
                }
                echo json_encode("OK.");

            }

        }else{
            if ( ($request->file('file_audiencia') && $request->hasFile('file_audiencia')) ) {

                // Audiencia
                $filename = $request->file('file_audiencia')->getClientOriginalName();
                $filetype = $request->file('file_audiencia')->getClientOriginalExtension();
                $public_path = public_path();
                $public_path = str_replace("\\", "/", $public_path);
                $path = $public_path.'/img/import/';
                if (!file_exists($path)) { // crea el directorio si no existe
                    mkdir($path, 0777, true); // todos los permisos
                }
                $file_namea = $filename.'.'.$filetype;
                $request->file('file_audiencia')->move($path,$file_namea);

                $faudiencia = $path.$file_namea;

                if (file_exists($faudiencia)) {
                    set_time_limit(0);
                    $row = 1;
                    if (($handle = fopen($faudiencia, "r")) !== FALSE) {
                      while (($data = fgetcsv($handle, 0, ";")) !== FALSE) {
                        $num = count($data);
                        if ($row > 1) {

                          $input = [
                              'faudiencia' => (!empty($data[1]) && isset($data[1]) && ($data[1]))? $data[1] : null,
                              'hora' => (!empty($data[2]) && isset($data[2]) && ($data[2]))? $data[2] : null,
                              'calificacion' => 'Ha lugar',
                          ];

                          $bdenuncia = Denuncia::where('expediente','=',str_replace("'", '', $data[0]))->first();

                          if(count($bdenuncia) > 0){

                            $denuncia = Denuncia::where('expediente','=',str_replace("'", '', $data[0]))->update($input);

                          }

                        }

                        $row++;
                      }
                      fclose($handle);
                    }
                    echo json_encode("OK.");
                }

            }else{
                if ( ($request->file('file_remision') && $request->hasFile('file_remision')) ) {

                  // Remision
                  $filename = $request->file('file_remision')->getClientOriginalName();
                  $filetype = $request->file('file_remision')->getClientOriginalExtension();
                  $public_path = public_path();
                  $public_path = str_replace("\\", "/", $public_path);
                  $path = $public_path.'/img/import/';
                  if (!file_exists($path)) { // crea el directorio si no existe
                      mkdir($path, 0777, true); // todos los permisos
                  }
                  $file_namer = $filename.'.'.$filetype;
                  $request->file('file_remision')->move($path,$file_namer);

                  $fremision = $path.$file_namer;

                  if (file_exists($fremision)) {
                    set_time_limit(0);
                    $row = 1;
                    if (($handle = fopen($fremision, "r")) !== FALSE) {
                      while (($data = fgetcsv($handle, 0, ";")) !== FALSE) {
                        $num = count($data);
                        if ($row > 1) {

                          $input = [
                              'fremision' => (!empty($data[1]) && isset($data[1]) && ($data[1]))? $data[1] : null,
                              'calificacion' => 'Ha lugar',
                          ];

                          $bdenuncia = Denuncia::where('expediente','=',str_replace("'", '', $data[0]))->first();

                          if(count($bdenuncia) > 0){

                            $denuncia = Denuncia::where('expediente','=',str_replace("'", '', $data[0]))->update($input);

                          }

                        }

                        $row++;
                      }
                      fclose($handle);
                    }
                    echo json_encode("OK.");
                }

                }else{
                    echo json_encode("Error: Fallo de carga en los archivos.");
                }
            }

        }

    }

    /**
     * Display the estadistica view.
     *
     * @param  \App\Models\Denuncia  $denuncia
     * @return \Illuminate\Http\Response
     */
    public function estadistica(Request $request)
    {

        // return json_encode($request['anio']);

        $anios = new Denuncia();

        $anios = $anios->select(DB::raw("year(fformalizacion) as id, year(fformalizacion) as anio"))
                     ->where('tblmodulo_id', Auth::user()->tblmodulo_id)->whereNotNull('fformalizacion')->whereNull('deleted_at')->orderBy('id','desc')->pluck('anio', 'id');

        $comisarias = Tblcomisaria::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo_int',0)->where('color','green')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');

        $instancias = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tblmodulo_id',Auth::user()->tblmodulo_id)->whereNull('deleted_at')
        ->where(function ($query) {
            $query->where('tipo','FA')->orwhere('tipo','JM')->orwhere('estadistica','1');
        })->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasPL = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tblmodulo_id',Auth::user()->tblmodulo_id)->where('tipo','PL')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasMIN = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo','MP')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasJIP = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo','IP')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasJP = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo','JP')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');

        if ($request->ajax()) {

        }else{

            $idChartArr = [];

            if ((isset($request['graph3']) && !empty($request['graph3']) && $request['graph3'] != '0') || (isset($request['graph1']) && !empty($request['graph1']) && $request['graph1'] != '0') ) {

                // Victimas denunciantes
                $sqlVD = "SELECT count(*) as total from ( SELECT distinct v.id,v.nombre,v.nro_doc from denuncia d
                    join denuncia_victima vd on d.id = vd.denuncia_id
                    join victima v on v.id = vd.victima_id
                    where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.deleted_at is null and d.fdenuncia IS NOT NULL and d.fformalizacion IS NOT NULL AND year(d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlVD .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlVD .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlVD .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }
                $sqlVD .= " order by v.id ) as a ";

                $victimasDen = DB::select(DB::raw($sqlVD));

                $vDTotal = $victimasDen[0]->total;

                // Hijos de las victimas
                $sqlHV = "SELECT ( case when sum(a.hijos) is not null then sum(a.hijos) when sum(a.hijos) is null then 0 end ) as total from (
                            select vt.id, vt.nombre, vt.nro_doc, vc.hijos from victima as vc join (
                                select distinct v.id,v.nombre,v.nro_doc from denuncia d
                                join denuncia_victima vd on d.id = vd.denuncia_id
                                join victima v on v.id = vd.victima_id
                                where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia IS NOT NULL
                                and d.fformalizacion IS NOT NULL
                                and d.deleted_at is null
                                AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlHV .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlHV .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlHV .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }
                $sqlHV .= " order by v.id
                        ) as vt on vc.id = vt.id
                    ) as a";

                $victimasH = DB::select(DB::raw($sqlHV));

                $hHTotal = $victimasH[0]->total;

                // Caracteristicas de la victima
                $sqlCV = "SELECT distinct dt.id, dt.nombre, count(vi.id) as total from
                            (
                                select distinct v.id,v.nombre,v.nro_doc from denuncia d
                                join denuncia_victima vd on d.id = vd.denuncia_id
                                join victima v on v.id = vd.victima_id
                                where d.tblmodulo_id=".Auth::user()->tblmodulo_id." 
                                and d.fdenuncia IS NOT NULL 
                                and d.fformalizacion IS NOT NULL
                                and d.deleted_at is null
                                AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlCV .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlCV .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlCV .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }
                $sqlCV .= " ) as vi
                            join victima as vc on vc.id = vi.id
                            right join tbltipo dt on dt.id = vc.tbltipo_id
                            group by dt.id, dt.nombre order by total desc";

                $victimasCar = DB::select(DB::raw($sqlCV));

                $victimasCarArr = [];
                $maxHeightCVArr = [];

                for ($i=0; $i < count($victimasCar); $i++) {
                    if ($victimasCar[$i]->nombre == 'Adulto Mayor') {
                        $victimasCarArr['keys'][] = 'A. Mayor';
                    }else{
                        $victimasCarArr['keys'][] = $victimasCar[$i]->nombre;
                    }
                    $victimasCarArr['values'][] = $victimasCar[$i]->total;
                    $maxHeightCVArr[] = (int)$victimasCar[$i]->total;
                }

                $maxHeightCV = max($maxHeightCVArr)*1.1;

                $chartCV = new ExampleChart;
                $chartCV->heightChart('300px')->heightYAxis($maxHeightCV)->displayYAxes(false)->displayXAxes(true,'red','15px')->displayLegend(false)->plotOpt(true, 'column');
                $chartCV->labels($victimasCarArr['keys']);
                $chartCV->dataset('Caracteristica', 'column', $victimasCarArr['values'])
                        ->options([
                            'color' => 'rgb(203,0,0)',
                            'fontSize' => '20px',
                        ]);

                // Edad promedio de las victimas
                $sqlPV = " SELECT distinct tblefr.id_edad_fr, tblefr.edad_fr, count(vic.id_edad_fr) total from
                            (
                                select vc.id,vc.nombre,vc.nro_doc,
                                case
                                    when (vc.edad>=1 and vc.edad<=17) then '1'
                                    when (vc.edad>=18 and vc.edad<=29) then '2'
                                    when (vc.edad>=30 and vc.edad<=49) then '3'
                                    when (vc.edad>=50 and vc.edad<=64) then '4'
                                    when (vc.edad>=65) then '5'
                                END AS id_edad_fr from
                                (
                                    select distinct v.id,v.nombre,v.nro_doc from denuncia d
                                    join denuncia_victima vd on d.id = vd.denuncia_id
                                    join victima v on v.id= vd.victima_id
                                    where d.tblmodulo_id=".Auth::user()->tblmodulo_id." 
                                    and d.fdenuncia IS NOT NULL 
                                    and d.fformalizacion IS NOT NULL
                                    and d.deleted_at is null
                                    AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlPV .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlPV .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlPV .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }
                $sqlPV .= " ) as vi
                            join victima as vc on vc.id = vi.id
                        ) as vic
                        right join (
                            select '1' as id_edad_fr,'01-17' as edad_fr union
                            select '2','18-29' union
                            select '3','30-49' union
                            select '4','50-64' union
                            select '5','65-MAS'
                        ) as tblefr on tblefr.id_edad_fr = vic.id_edad_fr
                        group by tblefr.id_edad_fr, tblefr.edad_fr
                        order by tblefr.id_edad_fr";

                $victimasPV = DB::select(DB::raw($sqlPV));

                $victimasPVArr = [];
                $maxHeightPVArr = [];

                for ($i=0; $i < count($victimasPV); $i++) {
                    $victimasPVArr['keys'][] = $victimasPV[$i]->edad_fr;
                    $victimasPVArr['values'][] = $victimasPV[$i]->total;
                    $maxHeightPVArr[] = (int)$victimasPV[$i]->total;
                }

                $maxHeightPV = max($maxHeightPVArr)*1.1;

                $chartPV = new ExampleChart;
                $chartPV->heightChart('300px')->heightYAxis($maxHeightPV)->displayYAxes(false)->displayXAxes(true,'red','15px')->displayLegend(false)->plotOpt(true, 'column');
                $chartPV->labels($victimasPVArr['keys']);
                $chartPV->dataset('Edad', 'column', $victimasPVArr['values'])
                        ->options([
                            'color' => 'rgb(203,0,0)',
                            'height'=>300,
                        ]);

                // Presuntos Agresores
                $sqlPA = "SELECT count(*) as total from (
                        select distinct a.id,a.nombre,a.nro_doc from denuncia d
                        join denuncia_agresor ad on d.id = ad.denuncia_id
                        join agresor a on a.id = ad.agresor_id
                        where d.tblmodulo_id=".Auth::user()->tblmodulo_id." 
                        and d.fdenuncia IS NOT NULL
                        and d.fformalizacion IS NOT NULL 
                        and d.deleted_at is null
                        AND year(d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlPA .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlPA .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlPA .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }
                $sqlPA .= " order by a.id ) as a ";

                $agresoresP = DB::select(DB::raw($sqlPA));

                $pATotal = $agresoresP[0]->total;

                // Sexo de los agresores
                $sqlSA = "SELECT * from (
                        select distinct (case when (ag.sexo is null or ag.sexo = '') then 'Nulo' else ag.sexo END) AS sexo,count(agr.id) as total from (
                            select distinct a.id,a.nombre,a.nro_doc from denuncia d
                            join denuncia_agresor ad on d.id = ad.denuncia_id
                            join agresor a on a.id = ad.agresor_id
                            where d.tblmodulo_id=".Auth::user()->tblmodulo_id." 
                            and d.fdenuncia IS NOT NULL
                            and d.fformalizacion IS NOT NULL
                            and d.deleted_at is null
                            AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlSA .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlSA .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlSA .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }
                $sqlSA .= " order by a.id
                        ) as agr right join agresor as ag on ag.id = agr.id
                    group by ag.sexo) as s where s.sexo != 'Nulo' ";

                $agresoresS = DB::select(DB::raw($sqlSA));

                $agresoresSArr = [];

                for ($i=0; $i < count($agresoresS); $i++) {
                    $agresoresSArr['keys'][] = $agresoresS[$i]->sexo;
                    $agresoresSArr['values'][] = $agresoresS[$i]->total;
                }

                $chartSA = new ExampleChart;
                $chartSA->heightChart('300px')->legendStyle_var(false,'15px')->displayYAxes(false)->displayLegend(true)->chartPieM(true);
                if ($i == 0) {
                    $agresoresSArr['keys'][] = 'Masculino';
                    $agresoresSArr['values'][] = 0;
                    $agresoresSArr['keys'][] = 'Femenino';
                    $agresoresSArr['values'][] = 0;
                }else{
                    if ($agresoresSArr['keys'][0] ) {
                        # code...
                    }
                    $chartSA->labels($agresoresSArr['keys']);
                }
                $chartSA->dataset('Total', 'pie', $agresoresSArr['values'])
                        ->options([
                            'color' => ['rgb(127,127,127)'],
                            'height'=>300,
                        ]);

                // Parentesco con el agresor
                $sqlPPA = "SELECT distinct tp.id, tp.nombre, count(a.tblparentesco_id) total from (
                        select MAX(ad1.id) as id, ad1.agresor_id, ad1.tblparentesco_id, ad1.denuncia_id
                        from (
                            select dad.* from denuncia_agresor as dad
                            join denuncia d on d.id = dad.denuncia_id
                            where d.fdenuncia IS NOT NULL 
                            and d.fformalizacion IS NOT NULL
                            and d.tblmodulo_id=".Auth::user()->tblmodulo_id."
                            and d.deleted_at is null
                            AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlPPA .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlPPA .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlPPA .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $sqlPPA .= ") as ad1, (
                        select dad1.* from denuncia_agresor as dad1
                        join denuncia d on d.id = dad1.denuncia_id
                        where d.fdenuncia IS NOT NULL and d.fformalizacion IS NOT NULL and d.deleted_at is null and d.tblmodulo_id=".Auth::user()->tblmodulo_id."
                        AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlPPA .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlPPA .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlPPA .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $sqlPPA .= " ) as ad2
                            where ad1.id >= ad2.id and ad1.agresor_id = ad2.agresor_id
                            group by ad1.agresor_id
                        ) as a
                        right join tblparentesco tp on tp.id = a.tblparentesco_id
                        group by tp.id,tp.nombre";

                $agresoresPPA = DB::select(DB::raw($sqlPPA));

                $agresoresPPAArr = [];
                $maxHeightPPAArr = [];

                for ($i=0; $i < count($agresoresPPA); $i++) {
                    if ($agresoresPPA[$i]->nombre == 'Padastro(Ma)') {
                        $agresoresPPAArr['keys'][] = 'Padast.';
                    }else if ($agresoresPPA[$i]->nombre == 'Progenitor(a)') {
                        $agresoresPPAArr['keys'][] = 'Progen.';
                    }else if ($agresoresPPA[$i]->nombre == 'Ex-conviviente') {
                        $agresoresPPAArr['keys'][] = 'Ex-conv.';
                    }else{
                        $agresoresPPAArr['keys'][] = $agresoresPPA[$i]->nombre;
                    }
                    $agresoresPPAArr['values'][] = $agresoresPPA[$i]->total;
                    $maxHeightPPAArr[] = (int)$agresoresPPA[$i]->total;
                }

                $maxHeightPPA = max($maxHeightPPAArr)*1.1;

                $chartPPA = new ExampleChart;
                $chartPPA->heightChart('350px')->heightYAxis($maxHeightPPA)->displayYAxes(false)->displayXAxes(true,'blak','11px')->displayLegend(false)->plotOpt(true, 'column');
                $chartPPA->labels($agresoresPPAArr['keys']);
                $chartPPA->dataset('Parentesco', 'column', $agresoresPPAArr['values'])
                        ->options([
                            'color' => 'rgb(34, 41, 47)',
                        ]);

                // array de ids de las graficas
                $idChartArr[] = $chartCV->id;
                $idChartArr[] = $chartPV->id;
                $idChartArr[] = $chartSA->id;
                $idChartArr[] = $chartPPA->id;
                $idChartArr = json_encode($idChartArr);
                // dd($idChartArr);

                // dd($agresoresS);

                if (isset($request['graph1']) && !empty($request['graph1']) && $request['graph1'] != '0'){
                    $graphGenerated = '1';
                }

                if (isset($request['graph3']) && !empty($request['graph3']) && $request['graph3'] != '0') {
                    $graphGenerated = '3';
                }

                return view('denuncia.denuncia.estadistica.estadistica', compact('anios','comisarias','instancias', 'instanciasPL','instanciasMIN','instanciasJIP','instanciasJP','hHTotal','vDTotal','chartCV','chartPV','pATotal','chartSA','chartPPA','idChartArr','request','graphGenerated'));

            }

            if ((isset($request['graph2']) && !empty($request['graph2']) && $request['graph2'] != '0') || (isset($request['graph4']) && !empty($request['graph4']) && $request['graph4'] != '0') ) {
                // if (isset($request['graph2']) && !empty($request['graph2']) && $request['graph2'] != '0') {

                // Atencion Psicologica
                $sqlAp = "SELECT count(d.psicologia) as total from denuncia d
                    where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.psicologia = '1' and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlAp .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlAp .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlAp .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $atencionPsi = DB::select(DB::raw($sqlAp));

                $ApTotal = $atencionPsi[0]->total;

                // Asistencia legal
                $sqlAl = "SELECT count(d.asistencialegal) as total from denuncia d
                    where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.asistencialegal = '1' and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlAl .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlAl .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlAl .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $asistenciaLegal = DB::select(DB::raw($sqlAl));

                $AlTotal = $asistenciaLegal[0]->total;

                // Denuncia Policial
                $sqlDP = "SELECT count(*) as total from denuncia d
                        where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlDP .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlDP .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlDP .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $denunciaP = DB::select(DB::raw($sqlDP));

                $DPTotal = $denunciaP[0]->total;

                // Audiencias Judiciales
               $sqlAJ = "SELECT count(d.faudiencia) as total from denuncia d
                       where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                       AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
               if (isset($request['faudiencia']) && !empty($request['faudiencia'])) {
                   $sqlAJ .= " and month(d.faudiencia)=".$request['faudiencia']." ";
               }
               if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                   $sqlAJ .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
               }
               if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                   $sqlAJ .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
               }
 
               $audienciaJud = DB::select(DB::raw($sqlAJ));
 
               $AJTotal = $audienciaJud[0]->total;
 
               // FASE II
               $sqlF2 = "SELECT count(d.fremisiond) as total from denuncia d
                       where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                       AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
               if (isset($request['remitido']) && !empty($request['remitido'])) {
                   $sqlF2.=" and d.remitido='".$request['remitido']."' ";
               }
               else{
                   $sqlF2.="and (d.remitido='Ministerio Público' OR d.remitido='Juzgado de Paz Letrado') ";
               }
 
               if (isset($request['fremisiond']) && !empty($request['fremisiond'])) {
                   $sqlF2 .= " and month(d.fremisiond)=".$request['fremisiond']." ";
               }
               if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                   $sqlF2 .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
               }
               if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                   $sqlF2 .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
               }
               if( isset($request['dependenciad']) && !empty($request['dependenciad']) ){
                   $sqlF2 .= " and d.dependenciad='".$request['dependenciad']."' ";
               }
 
               $fase2 = DB::select(DB::raw($sqlF2));
 
               $F2Total = $fase2[0]->total;
 
               // FASE III etapa 1
               $sqlF31 = "SELECT count(d.fjip) as total from denuncia d
                       where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                       AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
               if (isset($request['remitido']) && !empty($request['remitido'])) {
                   $sqlF31.=" and d.remitido='".$request['remitido']."' ";
               }
               else{
                   $sqlF31.="and (d.remitido='Ministerio Público' OR d.remitido='Juzgado de Paz Letrado') ";
               }
 
               if (isset($request['fjip']) && !empty($request['fjip'])) {
                   $sqlF31 .= " and month(d.fjip)=".$request['fjip']." ";
               }
               if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                   $sqlF31 .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
               }
               if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                   $sqlF31 .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
               }
               if( isset($request['dependenciad']) && !empty($request['dependenciad']) ){
                   $sqlF31 .= " and d.dependenciad='".$request['dependenciad']."' ";
               }
               if( isset($request['jip']) && !empty($request['jip']) ){
                   $sqlF31 .= " and d.jip='".$request['jip']."' ";
               }
 
               $fase31 = DB::select(DB::raw($sqlF31));
 
               $F31Total = $fase31[0]->total;
 
               // FASE III etapa 1
               $sqlF32 = "SELECT count(d.fjip) as total from denuncia d
                       where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                       AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
               if (isset($request['remitido']) && !empty($request['remitido'])) {
                   $sqlF32.=" and d.remitido='".$request['remitido']."' ";
               }
               else{
                   $sqlF32.="and (d.remitido='Ministerio Público' OR d.remitido='Juzgado de Paz Letrado') ";
               }
 
               if (isset($request['fjip']) && !empty($request['fjip'])) {
                   $sqlF32 .= " and month(d.fjip)=".$request['fjip']." ";
               }
               if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                   $sqlF32 .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
               }
               if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                   $sqlF32 .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
               }
               if( isset($request['dependenciad']) && !empty($request['dependenciad']) ){
                   $sqlF32 .= " and d.dependenciad='".$request['dependenciad']."' ";
               }
               if( isset($request['jip']) && !empty($request['jip']) ){
                   $sqlF32 .= " and d.jip='".$request['jip']."' ";
               }
               $fase32 = DB::select(DB::raw($sqlF32));
               $F32Total = $fase32[0]->total;

                //  Valoración de Denuncias
                $sqlV = "SELECT distinct tbld.nombre, (case when tbld.nombre = 'Leve' then 'LEV' when tbld.nombre = 'Moderado' then 'MOD' when tbld.nombre = 'Severo' then 'SEV' end) as sigla, ifnull(count(d.tbldenuncia_id),0) as total
                            from  tbldenuncia as tbld
                                left join (
                                select *  from denuncia as d
                                where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                                AND extract(year FROM fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlV .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlV .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlV .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $sqlV.= ") as d on d.tbldenuncia_id=tbld.id
                        group by tbld.nombre order by tbld.nombre";

                $valoracionDen = DB::select(DB::raw($sqlV));

                $valoracionDenArr = [];
                $maxHeightVArr = [];

                for ($i=0; $i < count($valoracionDen); $i++) {
                    $valoracionDenArr['keys'][] = $valoracionDen[$i]->sigla;
                    $valoracionDenArr['values'][] = $valoracionDen[$i]->total;
                    $maxHeightVArr[] = (int)$valoracionDen[$i]->total;
                }

                $maxHeightV = max($maxHeightVArr)*1.25;

                $chartV = new ExampleChart;
                $chartV->heightChart(300)->heightYAxis($maxHeightV)->displayYAxes(false)->displayXAxes(true,'#000000','11px')->displayLegend(false)->plotOpt(true, 'column');
                $chartV->labels($valoracionDenArr['keys']);
                $chartV->dataset('Total', 'column', $valoracionDenArr['values'])
                        ->options([
                            'color' => 'rgb(100,136,234)',
                            'fontSize' => '13px',
                        ]);

                //  Tipos de Medida de Protección de Denuncias
                $sqlMP = "select distinct tm.id, tm.sigla, tm.nombre, count(dtm.denuncia_id) as total from tblmedida tm
                    left join (
                        select id, tblmedida_id, denuncia_id from denuncia_tblmedida where denuncia_id in ( select id from denuncia d where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.medida_file is not null and d.deleted_at is null
                    AND extract(year FROM fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlMP .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlMP .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlMP .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $sqlMP.= ")
                    ) dtm on dtm.tblmedida_id=tm.id
                    group by tm.id";

                $medidaDen = DB::select(DB::raw($sqlMP));

                $chartMP = array();
                $medidaDenArr = [];

                foreach ($medidaDen as $r) {
                    $medidaDenArr[] = [
                        'nombre'=>$r->nombre,
                        'name'=>$r->sigla,
                        'y'=>(int)$r->total,
                    ];
                    $maxHeight[] = (int)$r->total;
                }

                if (isset($maxHeight) && !empty($maxHeight)) {
                    $chartMP['json'] = $medidaDenArr;
                    $chartMP['maxHeight'] = $maxHeight;
                    $chartMP['anio'] = $request['anio'];
                }

                $_medidaDenArr = [];

                for ($i=0; $i < count($medidaDenArr); $i++) {
                    if (count($medidaDenArr) > 0) {
                        $_medidaDenArr['keys'][] = $medidaDenArr[$i]['name'];
                        $_medidaDenArr['values'][] = $medidaDenArr[$i]['y'];
                    }else{
                        $_medidaDenArr['keys'][] = $$medidaDenArr[$i]['name'];
                        $_medidaDenArr['values'][] = null;
                    }
                }

                $chartMPC = new ExampleChart;
                $chartMPC->legendStyle(true)->displayYAxes(false)->displayXAxes(true,'black','15px')->displayLegend(false)->plotOpt(true, 'column');
                $chartMPC->labels($_medidaDenArr['keys']);
                $chartMPC->dataset('Total', 'column', $_medidaDenArr['values'])
                         ->options([
                            'color' => 'rgb(0,166,216)',
                            'fontSize' => '15px',
                         ]);

                //  Distribución de carga por dependencias (comisarias e instituciones)
               $sqlDCD = "SELECT distinct tblc.nombre, tblc.sigla, ifnull(count(d.tblcomisaria_id),0) as total
                           FROM  tblcomisaria as tblc
                           left join (
                               select *  from denuncia as d
                               where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                               AND extract(year FROM fformalizacion) = ".$request['anio']." ";
               if (isset($request['mes']) && !empty($request['mes'])) {
                   $sqlDCD .= " and month(d.fformalizacion)=".$request['mes']." ";
               }
               if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                   $sqlDCD .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
               }
               if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                   $sqlDCD .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
               }
               $sqlDCD.= ") as d on d.tblcomisaria_id=tblc.id
                       WHERE tblc.tipo_int=0 and tblc.color='green' and tblc.tblmodulo_id=".Auth::user()->tblmodulo_id."
                       group by tblc.nombre order by total desc";
               $distribucionDen = DB::select(DB::raw($sqlDCD));
               // dd($distribucionDen);
               $chartDCD = array();
               $distribucionDenArr = [];
               foreach ($distribucionDen as $r) {
                   $distribucionDenArr[] = [
                       'nombre'=>$r->nombre,
                       'name'=>$r->sigla,
                       'y'=>(int)$r->total,
                   ];
                   $maxHeight2[] = (int)$r->total;
               }
               if (isset($maxHeight) && !empty($maxHeight)) {
                   $chartDCD['json'] = $distribucionDenArr;
                   $chartDCD['maxHeight'] = $maxHeight2;
                   $chartDCD['anio'] = $request['anio'];
               }
               //Obtener toda las comisarías
               $ubicaciones=Tblcomisaria::where('tblmodulo_id',auth()->user()->tblmodulo_id)->where('tipo_int',0)->get();
               $ubicaciones->toArray();

                // Calificacion Denuncias
                $sqlCDN = "SELECT distinct cl.calificacion, count(cld.calificacion) as total from (
                            select d.calificacion from denuncia d
                            where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                            and (d.calificacion = 'Ha lugar' or d.calificacion = 'No ha lugar')
                            AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlCDN .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlCDN .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlCDN .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $sqlCDN .= " ) as cld
                        right join (
                            select 'Ha lugar' as calificacion union select 'No ha lugar' as calificacion
                        ) as cl on cl.calificacion=cld.calificacion
                        group by cl.calificacion ";

                $calificacionDen = DB::select(DB::raw($sqlCDN));

                $calificacionDenArr = [];

                for ($i=0; $i < count($calificacionDen); $i++) {
                    $calificacionDenArr['keys'][] = $calificacionDen[$i]->calificacion;
                    $calificacionDenArr['values'][] = $calificacionDen[$i]->total;
                }

                $chartCDN = new ExampleChart;
                $chartCDN->legendStyle(true)->displayYAxes(false)->displayLegend(true)->chartPieM(true);
                $chartCDN->labels($calificacionDenArr['keys']);
                $chartCDN->dataset('Total', 'pie', $calificacionDenArr['values'])
                        ->options([
                            'color' => ['rgb(0,166,216)','rgb(203,0,0)'],
                        ]);

                // Audiencias Judiciales
                $sqlAJ = "SELECT count(*) as total from denuncia d
                        where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                        AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlAJ .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlAJ .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlAJ .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $audienciaJud = DB::select(DB::raw($sqlAJ));

                $AJTotal = $audienciaJud[0]->total;

                // PNP
                $sqlPNP = "SELECT sum(a.dias_pnp_den) as suma, avg(a.dias_pnp_den) as promedio, count(*) as total from (
                            select (case
                                when d.fdenuncia is not NULL then
                                    case
                                        when d.fformalizacion is not NULL then DATEDIFF(d.fformalizacion,d.fdenuncia)
                                        else 0
                                    end
                                when d.fdenuncia is NULL then 0 end
                            ) as dias_pnp_den from denuncia d
                            where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                            AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlPNP .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlPNP .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlPNP .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $sqlPNP .= "  ) as a ";

                $denunciaPL = DB::select(DB::raw($sqlPNP));

                if ((isset($request['mes']) && !empty($request['mes'])) && (isset($request['anio']) && !empty($request['anio']))) {
                    if (!isset($denunciaPL[0]->promedio) && empty($denunciaPL[0]->promedio)) {
                        $PNPTotal = 0;
                    }else{
                        $PNPTotal = (double)$denunciaPL[0]->promedio;
                    }
                }else{
                    if (isset($request['anio']) && !empty($request['anio'])) {
                        if (!isset($denunciaPL[0]->total) && empty($denunciaPL[0]->total)) {
                            $PNPTotal = 0;
                        }else{
                            $PNPTotal = (double)$denunciaPL[0]->promedio;
                        }
                    }
                }

                // Modulo VF
                $sqlMVF = "SELECT sum(a.dias_modulo) as suma, avg(a.dias_modulo) as promedio, count(*) as total from (
                            select (case
                                when d.fformalizacion is not NULL then
                                    case
                                        when d.faudiencia is not NULL then DATEDIFF(d.faudiencia,d.fformalizacion)
                                        else DATEDIFF(now(),d.fformalizacion)
                                        -- else 0
                                    end
                                when d.fformalizacion is NULL then '0' end
                            ) as dias_modulo from denuncia d
                            where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                            AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlMVF .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if (isset($request['faudiencia']) && !empty($request['faudiencia'])) {
                    $sqlMVF .= " and month(d.faudiencia)=".$request['faudiencia']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlMVF .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlMVF .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $sqlMVF .= "  ) as a ";

                $moduloVF = DB::select(DB::raw($sqlMVF));

                if ((isset($request['mes']) && !empty($request['mes'])) && (isset($request['anio']) && !empty($request['anio']))) {
                    if (!isset($moduloVF[0]->promedio) && empty($moduloVF[0]->promedio)) {
                        $MVFTotal = 0;
                    }else{
                        $MVFTotal = (double)$moduloVF[0]->promedio;
                    }
                }else{
                    if (isset($request['anio']) && !empty($request['anio'])) {
                        if (!isset($moduloVF[0]->total) && empty($moduloVF[0]->total)) {
                            $MVFTotal = 0;
                        }else{
                            $MVFTotal = (double)$moduloVF[0]->promedio;
                        }
                    }
                }

                // Duracion
                $sqlDR = "SELECT sum(a.duracion) as suma, avg(a.duracion) as promedio from (
                            select (case
                                when d.fdenuncia is not NULL then
                                    case
                                        when d.fdenuncia  is not NULL then DATEDIFF(d.faudiencia,d.fdenuncia)
                                        else 0
                                    end
                                when d.fdenuncia is NULL then '0' end
                            ) as duracion from denuncia d
                            where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                            AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlDR .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlDR .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlDR .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $sqlDR .= "  ) as a ";

                $duracion = DB::select(DB::raw($sqlDR));

                if (!isset($duracion[0]->promedio) && empty($duracion[0]->promedio)) {
                    $DRTotal = 0;
                }else{
                    $DRTotal = (double)$duracion[0]->promedio;
                }

                // Remision
                $sqlREM = "SELECT sum(a.remison) as suma, avg(a.remison) as promedio from (
                            select (case
                                when d.faudiencia is not NULL then
                                    case
                                        when d.fremision is not NULL then DATEDIFF(d.fremision,d.faudiencia)
                                        else DATEDIFF(now(),d.faudiencia)
                                    end
                                when d.faudiencia is NULL then '0' end
                            ) as remison from denuncia d
                            where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                            AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlREM .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if (isset($request['faudiencia']) && !empty($request['faudiencia'])) {
                    $sqlMVF .= " and month(d.faudiencia)=".$request['faudiencia']." ";
                }
                if (isset($request['fremision']) && !empty($request['fremision'])) {
                   $sqlREM .= " and month(d.fremision)=".$request['fremision']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlREM .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlREM .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $sqlREM .= "  ) as a ";

                $remision = DB::select(DB::raw($sqlREM));

                if (!isset($remision[0]->promedio) && empty($remision[0]->promedio)) {
                    $REMTotal = 0;
                }else{
                    $REMTotal = (double)$remision[0]->promedio;
                }

                //fase II Ministerio Público
               $sqlFaseII="SELECT sum(a.faseii) as suma, avg(a.faseii) as promedio, count(*) as total FROM
                               (
                                   SELECT(
                                            CASE
                                               WHEN d.faudiencia is not NULL THEN
                                                   CASE
                                                       WHEN d.fremision is not NULL THEN
                                                           CASE
                                                               WHEN d.fremisiond is not NULL THEN DATEDIFF(d.fremisiond,d.fremision)
                                                               ELSE DATEDIFF(now(),d.fremision)
                                                           END
                                                       ELSE 0
                                                   END
                                               ELSE 0
                                            END
                                           ) AS faseii FROM denuncia d
                                           WHERE d.tblmodulo_id=".Auth::user()->tblmodulo_id." AND d.fdenuncia is not null AND d.fformalizacion is not null and d.deleted_at is null
                                           AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
               if (isset($request['remitido']) && !empty($request['remitido'])) {
                   $sqlFaseII.=" and d.remitido='".$request['remitido']."' ";
               }
               else{
                   $sqlFaseII.="and (d.remitido='Ministerio Público' OR d.remitido='Juzgado de Paz Letrado') ";
               }
               if (isset($request['mes']) && !empty($request['mes'])) {
                   $sqlFaseII .= " and month(d.fformalizacion)=".$request['mes']." ";
               }
               if (isset($request['faudiencia']) && !empty($request['faudiencia'])) {
                   $sqlMVF .= " and month(d.faudiencia)=".$request['faudiencia']." ";
               }
               if (isset($request['fremision']) && !empty($request['fremision'])) {
                   $sqlREM .= " and month(d.fremision)=".$request['fremision']." ";
               }
               if (isset($request['fremisiond']) && !empty($request['fremisiond'])) {
                   $sqlFaseII .= " and month(d.fremisiond)=".$request['fremisiond']." ";
               }
               if( isset($request['dependenciad']) && !empty($request['dependenciad']) ){
                   $sqlFaseII .= " and d.dependenciad='".$request['dependenciad']."' ";
               }
               if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                   $sqlFaseII .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
               }
               if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                   $sqlFaseII .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
               }
               if( isset($request['dependenciad']) && !empty($request['dependenciad']) ){
                   $sqlFaseII .= " and d.dependenciad='".$request['dependenciad']."' ";
               }
               $sqlFaseII .= "  ) as a ";
               $faseii = DB::select(DB::raw($sqlFaseII));
               if (!isset($faseii[0]->promedio) && empty($faseii[0]->promedio)) {
                   $FASEIItotal = 0;
               }else{
                   $FASEIItotal = (double)$faseii[0]->promedio;
               }
               //fase III Etapa 1
               $sqlFase31="SELECT sum(a.fase31) as suma, avg(a.fase31) as promedio, count(*) as total FROM
                               (
                                   SELECT(
                                           CASE
                                               WHEN d.fremision is not NULL THEN
                                                   CASE
                                                       WHEN d.fremisiond is not NULL THEN
                                                           CASE
                                                               WHEN d.fjip is not NULL THEN DATEDIFF(d.fjip,d.fremisiond)
                                                               ELSE DATEDIFF(now(),d.fremisiond)
                                                           END
                                                       ELSE 0
                                                   END
                                               ELSE 0
                                           END
                                          ) AS fase31 FROM denuncia d
                                           WHERE d.tblmodulo_id=".Auth::user()->tblmodulo_id." AND d.fdenuncia is not null AND d.fformalizacion is not null and d.deleted_at is null
                                           AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
               if (isset($request['remitido']) && !empty($request['remitido'])) {
                   $sqlFase31.=" and d.remitido='".$request['remitido']."' ";
               }
               else{
                   $sqlFase31.="and (d.remitido='Ministerio Público' OR d.remitido='Juzgado de Paz Letrado') ";
               }
               if (isset($request['mes']) && !empty($request['mes'])) {
                   $sqlFase31 .= " and month(d.fformalizacion)=".$request['mes']." ";
               }
               if (isset($request['faudiencia']) && !empty($request['faudiencia'])) {
                   $sqlMVF .= " and month(d.faudiencia)=".$request['faudiencia']." ";
               }
               if (isset($request['fremision']) && !empty($request['fremision'])) {
                   $sqlREM .= " and month(d.fremision)=".$request['fremision']." ";
               }
               if (isset($request['fremisiond']) && !empty($request['fremisiond'])) {
                   $sqlFase31 .= " and month(d.fremisiond)=".$request['fremisiond']." ";
               }
               if (isset($request['fjip']) && !empty($request['fjip'])) {
                   $sqlFase31 .= " and month(d.fjip)=".$request['fjip']." ";
               }
               if( isset($request['dependenciad']) && !empty($request['dependenciad']) ){
                   $sqlFase31 .= " and d.dependenciad='".$request['dependenciad']."' ";
               }
               if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                   $sqlFase31 .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
               }
               if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                   $sqlFase31 .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
               }
               if( isset($request['dependenciad']) && !empty($request['dependenciad']) ){
                   $sqlFaseII .= " and d.dependenciad='".$request['dependenciad']."' ";
               }
               if( isset($request['jip']) && !empty($request['jip']) ){
                   $sqlFaseII .= " and d.jip='".$request['jip']."' ";
               }
               $sqlFase31 .= "  ) as a ";
               $fase31 = DB::select(DB::raw($sqlFase31));
               if (!isset($fase31[0]->promedio) && empty($fase31[0]->promedio)) {
                   $FASE31total = 0;
               }else{
                   $FASE31total = (double)$fase31[0]->promedio;
               }
               //fase III Etapa 2
               $sqlFase32="SELECT sum(a.fase32) as suma, avg(a.fase32) as promedio, count(*) as total FROM
                               (
                                   SELECT(
                                           CASE
                                               WHEN d.fremision is not NULL THEN
                                                   CASE
                                                       WHEN d.fremisiond is not NULL THEN
                                                           CASE
                                                               WHEN d.fjip is not NULL THEN
                                                                   CASE
                                                                       WHEN d.fremisionj is not NULL THEN DATEDIFF(d.fremisionj,d.fjip)
                                                                       ELSE DATEDIFF(now(),d.fjip)
                                                                   END
                                                               ELSE 0
                                                           END
                                                       ELSE 0
                                                   END
                                               ELSE 0
                                           END
                                          ) AS fase32 FROM denuncia d
                                           WHERE d.tblmodulo_id=".Auth::user()->tblmodulo_id." AND d.fdenuncia is not null AND d.fformalizacion is not null and d.deleted_at is null
                                           AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
               if (isset($request['remitido']) && !empty($request['remitido'])) {
                   $sqlFase32.=" and d.remitido='".$request['remitido']."' ";
               }
               else{
                   $sqlFase32.="and (d.remitido='Ministerio Público' OR d.remitido='Juzgado de Paz Letrado') ";
               }
               if (isset($request['mes']) && !empty($request['mes'])) {
                   $sqlFase32 .= " and month(d.fformalizacion)=".$request['mes']." ";
               }
               if (isset($request['faudiencia']) && !empty($request['faudiencia'])) {
                   $sqlMVF .= " and month(d.faudiencia)=".$request['faudiencia']." ";
               }
               if (isset($request['fremision']) && !empty($request['fremision'])) {
                   $sqlREM .= " and month(d.fremision)=".$request['fremision']." ";
               }
               if (isset($request['fremisiond']) && !empty($request['fremisiond'])) {
                   $sqlFase32 .= " and month(d.fremisiond)=".$request['fremisiond']." ";
               }
               if (isset($request['fjip']) && !empty($request['fjip'])) {
                   $sqlFase32 .= " and month(d.fjip)=".$request['fjip']." ";
               }
               if (isset($request['fremisionj']) && !empty($request['fremisionj'])) {
                   $sqlFase32 .= " and month(d.fremisionj)=".$request['fremisionj']." ";
               }
               if( isset($request['dependenciad']) && !empty($request['dependenciad']) ){
                   $sqlFase32 .= " and d.dependenciad='".$request['dependenciad']."' ";
               }
               if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                   $sqlFase32 .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
               }
               if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                   $sqlFase32 .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
               }
               if( isset($request['juzgamiento']) && !empty($request['juzgamiento']) ){
                   $sqlFaseII .= " and d.juzgamiento='".$request['juzgamiento']."' ";
               }
               if( isset($request['jip']) && !empty($request['jip']) ){
                   $sqlFaseII .= " and d.jip='".$request['jip']."' ";
               }
               if( isset($request['jip']) && !empty($request['jip']) ){
                   $sqlFaseII .= " and d.jip='".$request['jip']."' ";
               }
               $sqlFase32 .= "  ) as a ";
               $fase32 = DB::select(DB::raw($sqlFase32));
               if (!isset($fase32[0]->promedio) && empty($fase32[0]->promedio)) {
                   $FASE32total = 0;
               }else{
                   $FASE32total = (double)$fase32[0]->promedio;
                }

                // Cuadro de ingreso
                $sqlCID = "SELECT distinct extract(month FROM d.fformalizacion) as mes, count(*) as total from denuncia d
                        where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                        AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlCID .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlCID .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlCID .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $sqlCID .= " group by mes order by mes ";

                $ingreso = DB::select(DB::raw($sqlCID));

                $meses = array(1,2,3,4,5,6,7,8,9,10,11,12);
                // $mesesL = array('ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC');
                $mesesL = array('EN','FE','MA','AB','MY','JN','JL','AG','SE','OC','NO','DI');

                $ingresoArr = [];
                $heightCIDArr = [];

                for ($i=0; $i < count($meses); $i++) {
                    if (count($ingreso) > 0) {
                        $_aux = 0;
                        for ($j=0; $j < count($ingreso); $j++) {
                            if ($meses[$i] == $ingreso[$j]->mes) {
                                $_total = $ingreso[$j]->total;
                                $_aux = 1;
                                $j = count($ingreso);
                            }
                        }
                        if ($_aux == 1) {
                            $ingresoArr['keys'][] = $mesesL[$i];
                            $ingresoArr['values'][] = (int)$_total;
                            $heightCIDArr[] = (int)$_total;
                        }else{
                            $ingresoArr['keys'][] = $mesesL[$i];
                            $ingresoArr['values'][] = null;
                        }
                    }else{
                        $ingresoArr['keys'][] = $mesesL[$i];
                        $ingresoArr['values'][] = null;
                    }
                }

                $maxHeightCID = max($heightCIDArr)*1.1;

                $chartCID = new ExampleChart;
                $chartCID->legendStyle(true)->displayYAxes(false)->heightYAxis($maxHeightCID)->displayXAxes(true,'black','15px')->displayLegend(false)->plotOpt(true, 'line');
                $chartCID->labels($ingresoArr['keys']);
                $chartCID->dataset('Total', 'line', $ingresoArr['values']);

                // TTD - Tiempo de celeridad
                $sqlTTC = "SELECT distinct mes, sum(a.duracion) as suma, avg(case when a.duracion <> 0 then a.duracion else null end) as promedio from (
                        select extract(month FROM d.fformalizacion) as mes, (case
                        when d.fdenuncia is not NULL then
                            case
                                when d.faudiencia is not NULL then DATEDIFF(d.faudiencia,d.fdenuncia)
                                else 0
                            end
                        when d.fdenuncia is NULL then 0 end
                        ) as duracion from denuncia d
                        where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                        AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlTTC .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlTTC .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlTTC .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $sqlTTC .= " ) as a group by mes order by mes ";

                $celeridad = DB::select(DB::raw($sqlTTC));

                $meses = array(1,2,3,4,5,6,7,8,9,10,11,12);
                // $mesesL = array('ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC');
                $mesesL = array('EN','FE','MA','AB','MY','JN','JL','AG','SE','OC','NO','DI');

                $celeridadArr = [];
                $heightTTCArr = [];
                for ($i=0; $i < count($meses); $i++) {
                    if (count($celeridad) > 0) {
                        $_aux = 0;
                        for ($j=0; $j < count($celeridad); $j++) {
                            if ($meses[$i] == $celeridad[$j]->mes) {
                                $_total = $celeridad[$j]->promedio;

                                $_aux = 1;
                                $j = count($celeridad);
                            }
                        }
                        if ($_aux == 1) {
                            $celeridadArr['keys'][] = $mesesL[$i];
                            $celeridadArr['values'][] = round((double)$_total, 1);
                            $heightTTCArr[] = round((double)$_total, 2);
                        }else{
                            $celeridadArr['keys'][] = $mesesL[$i];
                            $celeridadArr['values'][] = null;
                        }
                    }else{
                        $celeridadArr['keys'][] = $mesesL[$i];
                        $celeridadArr['values'][] = null;
                    }
                }

                $maxHeightTTC = max($heightTTCArr)*1.1;
                // ttdl chart
                $chartTTC = new ExampleChart;
                $chartTTC->legendStyle(true)->displayYAxes(false)->heightYAxis($maxHeightTTC)->displayXAxes(true,'black','15px')->displayLegend(false)->plotOpt(true, 'column');
                $chartTTC->labels($celeridadArr['keys']);
                $chartTTC->dataset('Total', 'column', $celeridadArr['values'])
                         ->options([
                            'color' => 'rgb(192,209,249)',
                            'fontSize' => '20px',
                         ]);

                // Reemplazo de tiempos de tramite
                $ttramite = [];
                $sqlTT1 = " SELECT distinct a.mes, sum(a.dias_pnp_den) as suma, avg(a.dias_pnp_den) as promedio, count(*) as total from (
                                select extract(month FROM d.fformalizacion) as mes, (case
                                    when d.fdenuncia is not NULL then
                                        case
                                            when d.fformalizacion is not NULL then DATEDIFF(d.fformalizacion,d.fdenuncia)
                                            else 0
                                        end
                                    when d.fdenuncia is NULL then 0 end
                                ) as dias_pnp_den  from denuncia d
                                where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                                AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlTT1 .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlTT1 .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }
                $sqlTT1 .= " ) as a
                            group by a.mes ";

                $queryTT1 = DB::select(DB::raw($sqlTT1));

                for ($i=0; $i < count($meses); $i++) {
                    if (count($queryTT1)>0) {
                        $_aux = 0;
                        for ($j=0; $j < count($queryTT1); $j++) {
                            if ($meses[$i] == $queryTT1[$j]->mes) {
                                $_total = $queryTT1[$j]->promedio;
                                $_aux = 1;
                                $j = count($queryTT1);
                            }
                        }
                        if ($_aux == 1) {
                            $ttramite['a'][] = (double)$_total;
                        }else{
                            $ttramite['a'][] = null;
                        }
                    }else{
                        $ttramite['a'][] = null;
                    }
                }

                $sqlTT2 = " SELECT distinct a.mes, sum(a.dias_modulo) as suma, avg(a.dias_modulo) as promedio, count(*) as total from (
                                select extract(month FROM d.fformalizacion) as mes, (case
                                    when d.fformalizacion is not NULL then
                                        case
                                            when d.faudiencia is not NULL then DATEDIFF(d.faudiencia,d.fformalizacion)
                                            else 0
                                        end
                                    when d.fformalizacion is NULL then '0' end
                                ) as dias_modulo from denuncia d
                                where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                                AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlTT2 .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlTT2 .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }
                $sqlTT2 .= " ) as a
                            group by a.mes ";

                $queryTT2 = DB::select(DB::raw($sqlTT2));

                for ($i=0; $i < count($meses); $i++) {
                    if (count($queryTT2)>0) {
                        $_aux = 0;
                        for ($j=0; $j < count($queryTT2); $j++) {
                            if ($meses[$i] == $queryTT2[$j]->mes) {
                                $_total = $queryTT2[$j]->promedio;
                                $_aux = 1;
                                $j = count($queryTT2);
                            }
                        }
                        if ($_aux == 1) {
                            $ttramite['b'][] = (double)$_total;
                        }else{
                            $ttramite['b'][] = null;
                        }
                    }else{
                        $ttramite['b'][] = null;
                    }
                }

                $ttramite = json_encode($ttramite);


                // PS-CEM
                $sqlPSCEM = "SELECT sum(d.psicologia) as total from denuncia d
                        where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                        AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlPSCEM .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlPSCEM .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlPSCEM .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $pscem = DB::select(DB::raw($sqlPSCEM));

                if (!isset($pscem[0]->total) && empty($pscem[0]->total)) {
                    $PSCEMTotal = 0;
                }else{
                    $PSCEMTotal = $pscem[0]->total;
                }

                // AL-CEM
                $sqlALCEM = "SELECT sum(asistencialegal) as total from denuncia d
                            where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                            AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlALCEM .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlALCEM .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlALCEM .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $alcem = DB::select(DB::raw($sqlALCEM));

                if (!isset($alcem[0]->total) && empty($alcem[0]->total)) {
                    $ALCEMTotal = 0;
                }else{
                    $ALCEMTotal = $alcem[0]->total;
                }

                // Ministerio
                $sqlALMIN = "SELECT sum(ministerio) as total from denuncia d
                            where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                            AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlALMIN .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlALMIN .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlALMIN .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $ministerio = DB::select(DB::raw($sqlALMIN));

                if (!isset($ministerio[0]->total) && empty($ministerio[0]->total)) {
                    $MINTotal = 0;
                }else{
                    $MINTotal = $ministerio[0]->total;
                }

                // Victimas y agresores reincidentes
                // Agresor
                $sqlAR = "SELECT count(*) total from ( SELECT da.agresor_id, count(d.id) from denuncia_agresor da
                            join denuncia d on d.id=da.denuncia_id
                            where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                            AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlAR .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlAR .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlAR .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $sqlAR .= " GROUP by da.agresor_id HAVING COUNT(d.id) > 1 )as a ";

                $agresorR = DB::select(DB::raw($sqlAR));

                if (!isset($agresorR[0]->total) && empty($agresorR[0]->total)) {
                    $ARTotal = 0;
                }else{
                    $ARTotal = $agresorR[0]->total;
                }

                // Victima
                $sqlVR = "SELECT count(*) total from ( select dv.victima_id, count(d.id) from denuncia_victima dv
                        join denuncia d on d.id=dv.denuncia_id
                        where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null and d.deleted_at is null
                            AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlVR .= " and month(d.fformalizacion)=".$request['mes']." ";
                }
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlVR .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlVR .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
                }

                $sqlVR .= " GROUP by dv.victima_id HAVING COUNT(d.id) > 1 )as a ";

                $victimaR = DB::select(DB::raw($sqlVR));

                if (!isset($victimaR[0]->total) && empty($victimaR[0]->total)) {
                    $VRTotal = 0;
                }else{
                    $VRTotal = $victimaR[0]->total;
                }

                // unir victima y agresor reicidente
                $victimaagresorR = [];

                $victimaagresorR['keys'][] = 'Victimas';
                $victimaagresorR['values'][] = $VRTotal;
                $victimaagresorR['keys'][] = 'Agresores';
                $victimaagresorR['values'][] = $ARTotal;

                $chartVAR = new ExampleChart;
                $chartVAR->legendStyle(true)->displayYAxes(false)->displayLegend(true)->chartPieM(true);
                $chartVAR->labels($victimaagresorR['keys']);
                $chartVAR->dataset('Total', 'pie', $victimaagresorR['values'])
                        ->options([
                            'color' => ['rgb(203,0,0)','rgb(0,0,0)'],
                        ]);

                if (isset($request['graph2']) && !empty($request['graph2']) && $request['graph2'] != '0'){
                    $graphGenerated = '2';
                    // array de ids de las graficas
                    $idChartArr[] = $chartV->id;
                    // $idChartArr[] = $chartCDN->id;
                    $idChartArr = json_encode($idChartArr);
                    return view('denuncia.denuncia.estadistica.estadistica', compact('anios','comisarias','instancias','instanciasPL','instanciasMIN','instanciasJIP','instanciasJP','ApTotal','AlTotal','DPTotal','AJTotal','F2Total','F31Total','F32Total','chartCDN','PNPTotal','MVFTotal','DRTotal','REMTotal','FASEIItotal','FASE31total','FASE32total','chartVAR','idChartArr','request','graphGenerated','chartV','chartMP'));
                }

                if (isset($request['graph4']) && !empty($request['graph4']) && $request['graph4'] != '0') {
                    $graphGenerated = '4';
                    // array de ids de las graficas
                    $idChartArr[] = $chartCID->id;
                    $idChartArr[] = $chartTTC->id;
                    $idChartArr[] = $chartV->id;
                    // $idChartArr[] = $chartMPC->id;
                    $idChartArr[] = 'graficoAnualMedida';
                    $idChartArr[] = 'graficoAnualDependencia';
                    // $idChartArr[] = "ttramite";         // id del grafico generado manualmente
                    $idChartArr = json_encode($idChartArr);
                    return view('denuncia.denuncia.estadistica.estadistica', compact('anios','comisarias','instancias','instanciasPL','instanciasMIN','instanciasJIP','instanciasJP','DPTotal','chartCID','ApTotal','AlTotal','DPTotal','AJTotal','F2Total','F31Total','F32Total','MINTotal','idChartArr','request','graphGenerated','chartV','chartTTC','chartMP','chartDCD','ubicaciones','PNPTotal','MVFTotal','DRTotal','REMTotal','FASEIItotal','FASE31total','FASE32total'));
                }



            }else{
                $chart = new ExampleChart;
                $chart->labels(['One', 'Two', 'Three', 'Four']);
                $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
                $chart->dataset('My dataset 2', 'line', [4, 3, 2, 1]);

                return view('denuncia.denuncia.estadistica.estadistica', compact('anios','comisarias','instancias','chart','request','instanciasPL','instanciasMIN','instanciasJIP','instanciasJP'));
            }

        }

    }

    public function estadisticaPDF(Request $request)
    {

        if ($request->ajax()) {

            // La funcion javascript ajaxLoadPDF() envia a este metodo (estadistica) la variable "graph" => [1,2,3,4]
            // Cada valor que tome graph corresponde al tipo de conjunto de graficos.

            if (isset($request['graph']) && !empty($request['graph']) && $request['graph'] != '0') {
                switch ($request['graph']) {
                    case '1':
                        $splitImg = explode(",data:image/png;base64",$request['imgArr']);
                        for ($i=0; $i < count($splitImg) ; $i++) {
                            if ($i > 0) {
                                $splitImg[$i] = "data:image/png;base64".$splitImg[$i];
                            }
                        }
                        PDF::setOptions(['dpi' => 72, 'defaultFont' => 'sans-serif']);
                        $view = view('denuncia.denuncia.estadistica.show', compact('request','splitImg'));
                        $pdf = PDF::loadHTML($view);
                        $pdf->setPaper('A4', 'landscape');
                        return $pdf->stream();
                        break;

                    case '2':
                        $splitImg = explode(",data:image/png;base64",$request['imgArr']);
                        for ($i=0; $i < count($splitImg) ; $i++) {
                            if ($i > 0) {
                                $splitImg[$i] = "data:image/png;base64".$splitImg[$i];
                            }
                        }
                        PDF::setOptions(['dpi' => 72, 'defaultFont' => 'sans-serif']);
                        $view = view('denuncia.denuncia.estadistica.show', compact('request','splitImg'));
                        $pdf = PDF::loadHTML($view);
                        $pdf->setPaper('A4', 'landscape');
                        return $pdf->stream();
                        break;

                    case '3':
                        $splitImg = explode(",data:image/png;base64",$request['imgArr']);
                        for ($i=0; $i < count($splitImg) ; $i++) {
                            if ($i > 0) {
                                $splitImg[$i] = "data:image/png;base64".$splitImg[$i];
                            }
                        }
                        PDF::setOptions(['dpi' => 72, 'defaultFont' => 'sans-serif']);
                        $view = view('denuncia.denuncia.estadistica.show', compact('request','splitImg'));
                        $pdf = PDF::loadHTML($view);
                        $pdf->setPaper('A4', 'landscape');
                        return $pdf->stream();
                        break;

                    case '4':
                        $splitImg = explode(",data:image/png;base64",$request['imgArr']);
                        for ($i=0; $i < count($splitImg) ; $i++) {
                            if ($i > 0) {
                                $splitImg[$i] = "data:image/png;base64".$splitImg[$i];
                            }
                        }
                        PDF::setOptions(['dpi' => 72, 'defaultFont' => 'sans-serif']);
                        $view = view('denuncia.denuncia.estadistica.show', compact('request','splitImg'));
                        $pdf = PDF::loadHTML($view);
                        $pdf->setPaper('A4', 'landscape');
                        return $pdf->stream();
                        break;

                    default:
                        # code...
                        break;
                }
            }
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Denuncia  $denuncia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $denuncia = Denuncia::findOrFail($id);
        $comisarias = Tblcomisaria::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo_int','=',0)->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $instituciones = Tblcomisaria::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo_int','=',1)->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $parentescos = Tblparentesco::orderBy('nombre')->pluck('nombre', 'id');
        $instancias = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tblmodulo_id',Auth::user()->tblmodulo_id)->whereNull('deleted_at')
        ->where(function ($query) {
            $query->where('tipo','FA')->orwhere('tipo','JM')->orwhere('estadistica','1');
        })->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasPL = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tblmodulo_id',Auth::user()->tblmodulo_id)->where('tipo','PL')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        // dd($instanciasPL);
        $instanciasMIN = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tblmodulo_id',Auth::user()->tblmodulo_id)->where('tipo','MP')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasJIP = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tblmodulo_id',Auth::user()->tblmodulo_id)->where('tipo','IP')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasJP = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tblmodulo_id',Auth::user()->tblmodulo_id)->where('tipo','PU')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $tdenuncias = Tbldenuncia::whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $tbldpenales = Tbldpenal::with('hijos')->where('nivel',1)->get();
        $instanciasSS = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tblmodulo_id',Auth::user()->tblmodulo_id)->where('tipo','SS')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasSSP = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tblmodulo_id',Auth::user()->tblmodulo_id)->where('tipo','SSP')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $medidas = Tblmedida::whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $violencias = Tblviolencia::whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');

        $departamentos = Tbldepartamento::whereNull('deleted_at')->pluck('nombre', 'id');
        $documentos = Tbldocumento::whereNull('deleted_at')->orderBy('nombre','asc')->pluck('nombre', 'id');
        $tipos = Tbltipo::whereNull('deleted_at')->pluck('nombre', 'id');

        return view('denuncia.denuncia.partials.form', compact('denuncia','comisarias','instituciones','instancias','instanciasPL','instanciasMIN','instanciasJIP','instanciasJP','parentescos','tbldpenales','instanciasSS','instanciasSSP','medidas','violencias','tdenuncias','departamentos','documentos','tipos'));
    }

    public function ejecucion($id)
    {
        $denuncia = Denuncia::findOrFail($id);
        $comisarias = Tblcomisaria::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo_int','=',0)->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $instituciones = Tblcomisaria::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo_int','=',1)->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $parentescos = Tblparentesco::orderBy('nombre')->pluck('nombre', 'id');
        $instancias = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo','FA')->whereNull('deleted_at')->orwhere('tipo','JM')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasPL = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo','PL')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasMIN = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo','PL')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasJIP = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo','IP')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasJP = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo','JP')->whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');
        $tdenuncias = Tbldenuncia::whereNull('deleted_at')->orderBy('nombre')->pluck('nombre', 'id');

        $departamentos = Tbldepartamento::whereNull('deleted_at')->pluck('nombre', 'id');
        $documentos = Tbldocumento::whereNull('deleted_at')->orderBy('nombre','asc')->pluck('nombre', 'id');
        $tipos = Tbltipo::whereNull('deleted_at')->pluck('nombre', 'id');

        return view('denuncia.denuncia.partials.ejecucion', compact('denuncia','comisarias','instituciones','instancias','instanciasPL','instanciasMIN','instanciasJIP','instanciasJP','parentescos','tdenuncias','departamentos','documentos','tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Denuncia  $denuncia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $denuncia = Denuncia::find($id);

        if (isset($request['action']) && !empty($request['action'])) {
            if ($request['action'] == 'victima') {
                // las victimas son unicas por cada denuncia
                if ($denuncia->denunciavictimas()->where('denuncia_id',$denuncia->id)->where('victima_id',$request['victima_id'])->get()->count() > 0) {
                    return response()->json([
                        'tab' => 'victima',
                        'type' => 'update',
                        'status' => 'error',
                        'info' => 'La Victima no puede registrarse nuevamente en la denuncia.',
                        'url'  => route('denuncia.edit', ['id' => $denuncia->id ]),
                    ]);
                }else{
                    $messages = array(
                        'required' => ':attribute es obligatorio.',
                    );

                    $attributes = array(
                        'victima_id' => 'Victima',
                    );

                    $rules = [
                        'victima_id' => 'required|exists:victima,id',
                    ];

                    $input = [
                        'victima_id' => $request['victima_id'],
                    ];

                    // validar victima
                    $validator = Validator::make($input, $rules, $messages);
                    $validator->setAttributeNames($attributes);

                    if ($validator->fails()) {
                        return response()->json([
                          'fail' => true,
                          'errors' => $validator->errors()
                        ]);
                    }else{
                        $input['denuncia_id'] = $denuncia->id;
                        $denuncia_victima = DenunciaVictima::create($input);
                        return response()->json([
                            'tab' => 'victima',
                            'type' => 'update',
                            'status' => 'success',
                            'info' => 'Victima registrada en la denuncia.',
                            'url'  => route('denuncia.edit', ['id' => $denuncia->id ]),
                        ]);
                    }
                }
            }
            if ($request['action'] == 'agresor') {
                // los agresores son unicas por cada denuncia
                if ($denuncia->denunciaagresores()->where('denuncia_id',$denuncia->id)->where('agresor_id',$request['agresor_id'])->get()->count() > 0) {
                    return response()->json([
                        'tab' => 'agresor',
                        'type' => 'update',
                        'status' => 'error',
                        'info' => 'El Agresor no puede registrarse nuevamente en la denuncia.',
                        'url'  => route('denuncia.edit', ['id' => $denuncia->id ]),
                    ]);
                }else{

                    $messages = array(
                        'required' => ':attribute es obligatorio.',
                    );

                    $attributes = array(
                        'agresor_id' => 'Agresor',
                        'tblparentesco_id' => 'Parentesco',
                    );

                    $rules = [
                        'agresor_id' => 'required|exists:agresor,id',
                        'tblparentesco_id' => 'required|exists:tblparentesco,id',
                    ];

                    $input = [
                        'agresor_id' => $request['agresor_id'],
                        'tblparentesco_id' => $request['tblparentesco_id'],
                    ];

                    // validar agresor
                    $validator = Validator::make($input, $rules, $messages);
                    $validator->setAttributeNames($attributes);

                    if ($validator->fails()) {
                        return response()->json([
                          'fail' => true,
                          'errors' => $validator->errors()
                        ]);
                    }else{
                        $input['denuncia_id'] = $denuncia->id;
                        $denuncia_agresor = DenunciaAgresor::create($input);
                        return response()->json([
                            'tab' => 'agresor',
                            'type' => 'update',
                            'status' => 'success',
                            'info' => 'Agresor registrado en la denuncia.',
                            'url'  => route('denuncia.edit', ['id' => $denuncia->id ]),
                        ]);
                    }

                }
            }
            if ($request['action'] == 'cem') {

                $denuncia->asistencialegal = $request['asistencialegal'];
                $denuncia->psicologia = $request['psicologia'];
                $denuncia->social = $request['social'];
                $denuncia->save();

                return response()->json([
                    'tab' => 'cem',
                    'type' => 'update',
                    'status' => 'success',
                    'info' => 'Parametro(s) CEM registrado(s) en la denuncia.',
                    'url'  => route('denuncia.edit', ['id' => $denuncia->id ]),
                ]);


                /*if ($request['finformeal'] != '') {
                    $request->merge([ 'finformeal' => date('Y-m-d',strtotime(str_replace('/', '-', $request['finformeal']))) ]);
                }
                if ($request['finformeps'] != '') {
                    $request->merge([ 'finformeps' => date('Y-m-d',strtotime(str_replace('/', '-', $request['finformeps']))) ]);
                }
                if ($request['finformes'] != '') {
                    $request->merge([ 'finformes' => date('Y-m-d',strtotime(str_replace('/', '-', $request['finformes']))) ]);
                }

                $messages = array(
                    'required' => ':attribute es obligatorio.',
                    'email'    => ':attribute debe ser un e-mail válido.',
                    'min'      => ':attribute debe tener :min caracteres como mínimo.',
                    'max'      => [
                        'numeric' => 'The :attribute may not be greater than :max.',
                        'file'    => ':attribute no puede superar los :max kilobytes.',
                        'string'  => ':attribute debe tener :max caracteres como máximo.',
                        'array'   => 'The :attribute may not have more than :max items.',
                    ],
                    'numeric'  => ':attribute debe ser numérico.',
                    'image'    => ':attribute debe ser un archivo imagen.',
                    'mimes'    => ':attribute debe ser un archivo de tipo :values.',
                    'uploaded' => ':attribute no pudo ser cargado.',
                );

                $attributes = array(
                    'informeal' => 'Informe de Asistencia Legal',
                    'finformeal' => 'Fecha de Informe de Asistencia Legal',
                    'informeal_file' => 'Archivo de Informe de Asistencia Legal',
                    'informeps' => 'Informe de Asistencia Psicológica',
                    'finformeps' => 'Fecha de Informe de Asistencia Psicológica',
                    'informeps_file' => 'Archivo de Informe de Asistencia Psicológica',
                    'informes' => 'Informe de Asistencia Social',
                    'finformes' => 'Fecha de Informe de Asistencia Social',
                    'informes_file' => 'Archivo de Informe de Asistencia Social',
                );

                $rules = [
                    'asistencialegal' => 'nullable|in:1,0',
                    'psicologia' => 'nullable|in:1,0',
                    'social' => 'nullable|in:1,0',
                    // 'informeal' => 'required_if:asistencialegal,==,1|string',
                    // 'finformeal' => 'required_if:asistencialegal,==,1|date',
                    // 'informeal_file' => 'required_if:asistencialegal,==,1|mimes:pdf,doc,docx|max:4096',
                    // 'informeps' => 'required_if:psicologia,==,1|string',
                    // 'finformeps' => 'required_if:psicologia,==,1|date',
                    // 'informeps_file' => 'required_if:psicologia,==,1|mimes:pdf,doc,docx|max:4096',
                    // 'informes' => 'required_if:social,==,1|string',
                    // 'finformes' => 'required_if:social,==,1|date',
                    // 'informes_file' => 'required_if:social,==,1|mimes:pdf,doc,docx|max:4096',
                ];

                $input = [
                    'asistencialegal' => $request['asistencialegal'],
                    'psicologia' => $request['psicologia'],
                    'social' => $request['social'],
                    // 'informeal' => $request['informeal'],
                    // 'finformeal' => $request['finformeal'],
                    // 'informeal_file' => $request['informeal_file'],
                    // 'informeps' => $request['informeps'],
                    // 'finformeps' => $request['finformeps'],
                    // 'informeps_file' => $request['informeps_file'],
                    // 'informes' => $request['informes'],
                    // 'finformes' => $request['finformes'],
                    // 'informes_file' => $request['informes_file'],
                ];

                if ($request['asistencialegal'] == '1') {
                    $rules = parent::array_push_assoc($rules, 'informeal', 'required|string');
                    $rules = parent::array_push_assoc($rules, 'finformeal', 'required|date');
                    $rules = parent::array_push_assoc($rules, 'informeal_file', 'required|mimes:pdf,doc,docx|max:4096');
                    $input = parent::array_push_assoc($input, 'informeal', $request['informeal']);
                    $input = parent::array_push_assoc($input, 'finformeal', $request['finformeal']);
                    $input = parent::array_push_assoc($input, 'informeal_file', $request['informeal_file']);
                }

                if ($request['psicologia'] == '1') {
                    $rules = parent::array_push_assoc($rules, 'informeps', 'required|string');
                    $rules = parent::array_push_assoc($rules, 'finformeps', 'required|date');
                    $rules = parent::array_push_assoc($rules, 'informeps_file', 'required|mimes:pdf,doc,docx|max:4096');
                    $input = parent::array_push_assoc($input, 'informeps', $request['informeps']);
                    $input = parent::array_push_assoc($input, 'finformeps', $request['finformeps']);
                    $input = parent::array_push_assoc($input, 'informeps_file', $request['informeps_file']);
                }

                if ($request['social'] == '1') { 
                    $rules = parent::array_push_assoc($rules, 'informes', 'required|string');
                    $rules = parent::array_push_assoc($rules, 'finformes', 'required|date');
                    $rules = parent::array_push_assoc($rules, 'informes_file', 'required|mimes:pdf,doc,docx|max:4096');
                    $input = parent::array_push_assoc($input, 'informes', $request['informes']);
                    $input = parent::array_push_assoc($input, 'finformes', $request['finformes']);
                    $input = parent::array_push_assoc($input, 'informes_file', $request['informes_file']);
                }

                $validator = Validator::make($input, $rules, $messages);

                $validator->setAttributeNames($attributes);

                if ($validator->fails()){
                    return response()->json([
                      'fail' => true,
                      'errors' => $validator->errors()
                    ]);
                }else{

                    if ($request->file('informeal_file') && $request->hasFile('informeal_file')) {
                        $filename = $request->file('informeal_file')->getClientOriginalName();
                        $filetype = $request->file('informeal_file')->getClientOriginalExtension();
                        $public_path = public_path();
                        $public_path = str_replace("\\", "/", $public_path);
                        $path = $public_path.'/img/informe/informeal/';
                        if (!file_exists($path)) { // crea el directorio si no existe
                            mkdir($path, 0777, true); // todos los permisos
                        }

                        // elimina el arhivo si existe
                        if (file_exists($public_path.$denuncia->informeal_file) && isset($denuncia->informeal_file) && !empty($denuncia->informeal_file)) {
                            unlink($public_path.$denuncia->informeal_file);
                        }

                        $file_name = 'informeal_file_'.$request['informeal'].'_'.$denuncia->expediente.'_'.time().'.'.$filetype;

                        $request->file('informeal_file')->move($path,$file_name);

                        $fakepath = '/img/informe/informeal/'.$file_name;
                        $informeal_file = $fakepath;
                    }

                    if ($request->file('informeps_file') && $request->hasFile('informeps_file')) {
                        $filename = $request->file('informeps_file')->getClientOriginalName();
                        $filetype = $request->file('informeps_file')->getClientOriginalExtension();
                        $public_path = public_path();
                        $public_path = str_replace("\\", "/", $public_path);
                        $path = $public_path.'/img/informe/informeps/';
                        if (!file_exists($path)) { // crea el directorio si no existe
                            mkdir($path, 0777, true); // todos los permisos
                        }

                        // elimina el arhivo si existe
                        if (file_exists($public_path.$denuncia->informeps_file) && isset($denuncia->informeps_file) && !empty($denuncia->informeps_file)) {
                            unlink($public_path.$denuncia->informeps_file);
                        }

                        $file_name = 'informeps_file_'.$request['informeps'].'_'.$denuncia->expediente.'_'.time().'.'.$filetype;

                        $request->file('informeps_file')->move($path,$file_name);

                        $fakepath = '/img/informe/informeps/'.$file_name;
                        $informeps_file = $fakepath;
                    }

                    if ($request->file('informes_file') && $request->hasFile('informes_file')) {
                        $filename = $request->file('informes_file')->getClientOriginalName();
                        $filetype = $request->file('informes_file')->getClientOriginalExtension();
                        $public_path = public_path();
                        $public_path = str_replace("\\", "/", $public_path);
                        $path = $public_path.'/img/informe/informes/';
                        if (!file_exists($path)) { // crea el directorio si no existe
                            mkdir($path, 0777, true); // todos los permisos
                        }

                        // elimina el arhivo si existe
                        if (file_exists($public_path.$denuncia->informes_file) && isset($denuncia->informes_file) && !empty($denuncia->informes_file)) {
                            unlink($public_path.$denuncia->informes_file);
                        }

                        $file_name = 'informes_file_'.$request['informes'].'_'.$denuncia->expediente.'_'.time().'.'.$filetype;

                        $request->file('informes_file')->move($path,$file_name);

                        $fakepath = '/img/informe/informes/'.$file_name;
                        $informes_file = $fakepath;
                    }

                    $denuncia->asistencialegal = $request['asistencialegal'];
                    $denuncia->psicologia = $request['psicologia'];
                    $denuncia->social = $request['social'];
                    $denuncia->informeal = $request['informeal'];
                    $denuncia->finformeal = $request['finformeal'];
                    if (isset($informeal_file) && !empty($informeal_file) && $informeal_file != '') {
                        $denuncia->informeal_file = $informeal_file;
                    }
                    $denuncia->informeps = $request['informeps'];
                    $denuncia->finformeps = $request['finformeps'];
                    if (isset($informeps_file) && !empty($informeps_file) && $informeps_file != '') {
                        $denuncia->informeps_file = $informeps_file;
                    }
                    $denuncia->informes = $request['informes'];
                    $denuncia->finformes = $request['finformes'];
                    if (isset($informes_file) && !empty($informes_file) && $informes_file != '') {
                        $denuncia->informes_file = $informes_file;
                    }
                    $denuncia->save();

                    return response()->json([
                        'tab' => 'cem',
                        'type' => 'update',
                        'status' => 'success',
                        'info' => 'Parametro(s) CEM registrado(s) en la denuncia.',
                        'url'  => route('denuncia.edit', ['id' => $denuncia->id ]),
                    ]);
                }*/

            }
            if ($request['action'] == 'denuncia') {

                // convertir de dd/mm/yyyy -> yyyy-mm-dd (mysql)
                if ($request['fdenuncia'] != '') {
                    $request->merge([ 'fdenuncia' => date('Y-m-d',strtotime(str_replace('/', '-', $request['fdenuncia']))) ]);
                }

                $messages = array(
                    'required' => ':attribute es obligatorio.',
                    'email'    => ':attribute debe ser un e-mail válido.',
                    'min'      => ':attribute debe tener :min caracteres como mínimo.',
                    // 'max'      => ':attribute debe tener :max caracteres como máximo.',
                    'max'      => [
                        'numeric' => 'The :attribute may not be greater than :max.',
                        'file'    => ':attribute no puede superar los :max kilobytes.',
                        'string'  => ':attribute debe tener :max caracteres como máximo.',
                        'array'   => 'The :attribute may not have more than :max items.',
                    ],
                    'numeric'  => ':attribute debe ser numérico.',
                    'image'    => ':attribute debe ser un archivo imagen.',
                    'mimes'    => ':attribute debe ser un archivo de tipo :values.',
                    'uploaded' => ':attribute no pudo ser cargado.',
                );

                $attributes = array(
                    'oficio' => 'Oficio',
                    'institucion' => 'Institucion',
                    'tbldenuncia_id' => 'Tipo Denuncia',
                    'tblviolencia_id' => 'Tipo de Violencia',
                    'fdenuncia' => 'Fecha de Denuncia',
                    'fformalizacion' => 'Fecha de Formalización',
                    'tblcomisaria_id' => 'Comisaria',
                    'tblfiscalia_id' => 'Fiscalia',
                    'observacion' => 'Observacion',
                    'registro_file' => 'Archivo de Registro',
                    'itinerancia' => 'Itinerancia en comisaría',
                );

                $rules = [
                    'oficio' => 'nullable|string',
                    'institucion' => 'required',
                    'tblviolencia_id' => 'nullable|array|min:1',
                    // 'tbldenuncia_id' => 'required|array|min:1',
                    'tbldenuncia_id' => 'required|exists:tbldenuncia,id',
                    'fdenuncia' => 'required|date',
                    // 'fformalizacion' => 'required|date',
                    'observacion' => 'nullable|string',
                    'itinerancia' => 'nullable|in:1,0',
                ];

                $input = [
                    'oficio' => $request['oficio'],
                    'institucion' => $request['institucion'],
                    'tbldenuncia_id' => $request['tbldenuncia_id'],
                    'fdenuncia' => $request['fdenuncia'],
                    // 'fformalizacion' => $request['fformalizacion'],
                    'observacion' => $request['observacion'],
                    'itinerancia' => $request['itinerancia'],
                ];

                if ($request['institucion'] == '1') { // comisaria
                    $rules = parent::array_push_assoc($rules, 'tblcomisaria_id', 'required|exists:tblcomisaria,id');
                    $input = parent::array_push_assoc($input, 'tblcomisaria_id', $request['tblcomisaria_id']);
                }

                if ($request['institucion'] == '3') { // fiscalia
                    $rules = parent::array_push_assoc($rules, 'tblfiscalia_id', 'required|exists:tblcomisaria,id');
                    $input = parent::array_push_assoc($input, 'tblfiscalia_id', $request['tblfiscalia_id']);
                }

                if (!isset($denuncia->registro_file) && empty($denuncia->registro_file)) {
                    // no existe registro de archivo: se valida el archivo
                    // $rules['registro_file'] = 'required|mimes:pdf|max:2048';
                    $input['registro_file'] = $request['registro_file'];
                }else{
                    if ($request->file('registro_file') && $request->hasFile('registro_file')) {
                        // $rules['registro_file'] = 'required|mimes:pdf|max:2048';
                        $input['registro_file'] = $request['registro_file'];
                    }
                }

                $validator = Validator::make($input, $rules, $messages);

                $validator->setAttributeNames($attributes);

                if ($validator->fails()){
                    return response()->json([
                      'fail' => true,
                      'errors' => $validator->errors()
                    ]);
                }else{

                    if ($request->file('registro_file') && $request->hasFile('registro_file')) {
                        $filename = $request->file('registro_file')->getClientOriginalName();
                        $filetype = $request->file('registro_file')->getClientOriginalExtension();
                        $public_path = public_path();
                        $public_path = str_replace("\\", "/", $public_path);
                        $path = $public_path.'/img/denuncia/';
                        if (!file_exists($path)) { // crea el directorio si no existe
                            mkdir($path, 0777, true); // todos los permisos
                        }

                        // elimina el arhivo si existe
                        if (file_exists($public_path.$denuncia->registro_file) && isset($denuncia->registro_file) && !empty($denuncia->registro_file)) {
                            unlink($public_path.$denuncia->registro_file);
                        }

                        // $file_name = 'file_registro_'.$this->generarCodigo(8).time().'.'.$filetype;
                        $file_name = 'file_registro_'.$denuncia->expediente.'_'.time().'.'.$filetype;

                        $request->file('registro_file')->move($path,$file_name);

                        $fakepath = '/img/denuncia/'.$file_name;
                        $input['registro_file'] = $fakepath;
                    }

                    if ($request['institucion'] == '2') { // modulo
                        unset($input['tblfiscalia_id']);
                        unset($input['tblcomisaria_id']);
                        $input = parent::array_push_assoc($input, 'tblcomisaria_id', null);
                    }

                    if ($request['institucion'] == '3') { // fiscalia
                        // Log::info('store tblfiscalia_id: ', ['tblfiscalia_id' => $request['tblfiscalia_id'], 'input-tblfiscalia_id' => $input['tblfiscalia_id'], 'input' => $input]);
                        // $input = parent::array_rm_assoc($input, 'tblfiscalia_id');
                        unset($input['tblfiscalia_id']);
                        $input = parent::array_push_assoc($input, 'tblcomisaria_id', $request['tblfiscalia_id']);
                        Log::info('store tblfiscalia_id: ', ['tblfiscalia_id' => $request['tblfiscalia_id'], 'input' => $input]);
                    }

                    // unset($input['tbldenuncia_id']);
                    Denuncia::where('id', $id)->update($input);

                    // el metodo sync solo sirve para tablas relacionadas muchos a muchos
                    if (!empty($request->get('tblviolencia_id'))) {
                        $denuncia->tblviolencias()->sync($request->get('tblviolencia_id'));
                    }

                    return response()->json([
                        'tab' => 'denuncia',
                        'type' => 'update',
                        'status' => 'success',
                        'info' => 'Datos registrados en la denuncia.',
                        'url'  => route('denuncia.edit', ['id' => $denuncia->id ]),
                    ]);

                }
            }
            if ($request['action'] == 'familia') {
                // convertir de dd/mm/yyyy -> yyyy-mm-dd (mysql)
                if ($request['fformalizacion'] != '') {
                    $request->merge([ 'fformalizacion' => date('Y-m-d',strtotime(str_replace('/', '-', $request['fformalizacion']))) ]);
                }

                if ($request['faudiencia'] != '') {
                    $request->merge([ 'faudiencia' => date('Y-m-d',strtotime(str_replace('/', '-', $request['faudiencia']))) ]);
                }

                if ($request['fmedida'] != '') {
                    $request->merge([ 'fmedida' => date('Y-m-d',strtotime(str_replace('/', '-', $request['fmedida']))) ]);
                }

                $messages = array(
                    'required' => ':attribute es obligatorio.',
                    'email'    => ':attribute debe ser un e-mail válido.',
                    'min'      => ':attribute debe tener :min caracteres como mínimo.',
                    'max'      => ':attribute debe tener :max caracteres como máximo.',
                    'unique'   => ':attribute ya ha sido registrado.',
                    'numeric'  => ':attribute debe ser numérico.',
                    'image'    => ':attribute debe ser un archivo imagen.',
                    'mimes'    => ':attribute debe ser un archivo de tipo :values.',
                );

                $attributes = array(
                    'tblinstancia_id' => 'Juzgado',
                    'tblmedida_id' => 'Tipo medida',
                    'expediente' => 'Expediente',
                    'fformalizacion' => 'Fecha de Formalización',
                    'calificacion' => 'Calificacion',
                    'hora' => 'Hora de Audiencia',
                    'ministerio' => 'Ministerio',
                    'faudiencia' => 'Fecha de Formalización',
                    'fmedida' => 'Fecha de Medida de Protección',
                    'device' => 'Aplicación Móvil',
                );

                $rules = [
                    'tblinstancia_id' => 'required|exists:tblinstancia,id',
                    'expediente' => 'required|string|min:26|max:40|unique:denuncia,expediente,'.$denuncia->expediente.',expediente',
                    'fformalizacion' => 'required|date',
                    // 'tblmedida_id' => 'nullable|exists:tblmedida,id',
                    'tblmedida_id' => 'nullable|array|min:1',
                    'calificacion' => 'nullable|string',
                    'hora' => 'nullable',
                    'ministerio' => 'nullable',
                    'faudiencia' => 'nullable|date',
                    'fmedida' => 'nullable|date',
                    'device' => 'nullable',
                ];

                $input = [
                    'tblinstancia_id' => $request['tblinstancia_id'],
                    // 'tblmedida_id' => $request['tblmedida_id'],
                    'expediente' => $request['expediente'],
                    'fformalizacion' => $request['fformalizacion'],
                    'calificacion' => $request['calificacion'],
                    'hora' => $request['hora'],
                    'ministerio' => $request['ministerio'],
                    'faudiencia' => $request['faudiencia'],
                    'fmedida' => $request['fmedida'],
                    'device' => $request['device'],
                ];

                // Log::info('update denuncia: ', ['input' => $input]);

                $validator = Validator::make($input, $rules, $messages);

                $validator->setAttributeNames($attributes);

                if ($validator->fails()){
                    return response()->json([
                      'fail' => true,
                      'errors' => $validator->errors()
                    ]);
                }else{

                    if ($request->file('medida_file') && $request->hasFile('medida_file')) {
                        $filename = $request->file('medida_file')->getClientOriginalName();
                        $filetype = $request->file('medida_file')->getClientOriginalExtension();
                        $public_path = public_path();
                        $public_path = str_replace("\\", "/", $public_path);
                        $path = $public_path.'/img/denuncia/';
                        if (!file_exists($path)) { // crea el directorio si no existe
                            mkdir($path, 0777, true); // todos los permisos
                        }

                        // elimina el arhivo si existe
                        if (file_exists($public_path.$denuncia->medida_file) && isset($denuncia->medida_file) && !empty($denuncia->medida_file)) {
                            unlink($public_path.$denuncia->medida_file);
                        }

                        // $file_name = 'file_medida_'.$this->generarCodigo(8).time().'.'.$filetype;
                        $file_name = 'file_medida_'.$denuncia->expediente.'_'.time().'.'.$filetype;

                        $request->file('medida_file')->move($path,$file_name);

                        $fakepath = '/img/denuncia/'.$file_name;
                        $input['medida_file'] = $fakepath;
                    }

                    Denuncia::where('id', $id)->update($input);

                    // el metodo sync solo sirve para tablas relacionadas muchos a muchos
                    if (!empty($request->get('tblmedida_id'))) {
                        $denuncia->tblmedidas()->sync($request->get('tblmedida_id'));
                    }

                    return response()->json([
                        'tab' => 'denuncia',
                        'type' => 'update',
                        'status' => 'success',
                        'info' => 'Datos registrados en la denuncia.',
                        'url'  => route('denuncia.edit', ['id' => $denuncia->id ]),
                    ]);

                }
            }
            if ($request['action'] == 'remision') {
                // convertir de dd/mm/yyyy -> yyyy-mm-dd (mysql)
                if ($request['fremision'] != '') {
                    $request->merge([ 'fremision' => date('Y-m-d',strtotime(str_replace('/', '-', $request['fremision']))) ]);
                }

                $messages = array(
                    'required' => ':attribute es obligatorio.',
                    'email'    => ':attribute debe ser un e-mail válido.',
                    'min'      => ':attribute debe tener :min caracteres como mínimo.',
                    'max'      => ':attribute debe tener :max caracteres como máximo.',
                    'numeric'  => ':attribute debe ser numérico.',
                    'image'    => ':attribute debe ser un archivo imagen.',
                    'mimes'    => ':attribute debe ser un archivo de tipo :values.',
                );

                $attributes = array(
                    'remitido' => 'Remitir a',
                    'oficioremitido' => 'Oficio',
                    'fremision' => 'Fecha de Remisión',
                );

                $rules = [
                    'remitido' => 'required',
                    'oficioremitido' => 'required|string|unique:denuncia,oficioremitido,'.$denuncia->oficioremitido.',oficioremitido',
                    'fremision' => 'required|date',
                ];

                $input = [
                    'remitido' => $request['remitido'],
                    'oficioremitido' => $request['oficioremitido'],
                    'fremision' => $request['fremision'],
                ];

                $validator = Validator::make($input, $rules, $messages);

                $validator->setAttributeNames($attributes);

                if ($validator->fails()){
                    return response()->json([
                      'fail' => true,
                      'errors' => $validator->errors()
                    ]);
                }else{

                    Denuncia::where('id', $id)->update($input);

                    return response()->json([
                        'tab' => 'denuncia',
                        'type' => 'update',
                        'status' => 'success',
                        'info' => 'Datos registrados en la denuncia.',
                        'url'  => route('denuncia.edit', ['id' => $denuncia->id ]),
                    ]);

                }
            }
            if ($request['action'] == 'fase3') {
                // convertir de dd/mm/yyyy -> yyyy-mm-dd (mysql)
                if ($request['fremisiond'] != '') {
                    $request->merge([ 'fremisiond' => date('Y-m-d',strtotime(str_replace('/', '-', $request['fremisiond']))) ]);
                }

                $messages = array(
                    'required' => ':attribute es obligatorio.',
                    'email'    => ':attribute debe ser un e-mail válido.',
                    'min'      => ':attribute debe tener :min caracteres como mínimo.',
                    'max'      => ':attribute debe tener :max caracteres como máximo.',
                    'numeric'  => ':attribute debe ser numérico.',
                    'image'    => ':attribute debe ser un archivo imagen.',
                    'mimes'    => ':attribute debe ser un archivo de tipo :values.',
                );

                $attributes = array(
                    'dependenciad' => 'J. Paz Letrado',
                    'expediented' => 'Car / Exp',
                    'remitidod' => 'Remitir a',
                    'oficioremitidod' => 'Oficio',
                    'fremisiond' => 'Fecha de Remisión',
                );

                $rules = [
                    'dependenciad' => 'required|exists:tblinstancia,id',
                    'expediented' => 'required|string|unique:denuncia,expediented,'.$denuncia->expediented.',expediented',
                    'remitidod' => 'required',
                    'oficioremitidod' => 'required|string|unique:denuncia,oficioremitidod,'.$denuncia->oficioremitidod.',oficioremitidod',
                    'fremisiond' => 'required|date',
                ];

                $input = [
                    'dependenciad' => $request['dependenciad'],
                    'expediented' => $request['expediented'],
                    'remitidod' => $request['remitidod'],
                    'oficioremitidod' => $request['oficioremitidod'],
                    'fremisiond' => $request['fremisiond'],
                ];

                $validator = Validator::make($input, $rules, $messages);

                $validator->setAttributeNames($attributes);

                if ($validator->fails()){
                    return response()->json([
                      'fail' => true,
                      'errors' => $validator->errors()
                    ]);
                }else{

                    Denuncia::where('id', $id)->update($input);

                    return response()->json([
                        'tab' => 'denuncia',
                        'type' => 'update',
                        'status' => 'success',
                        'info' => 'Datos registrados en la denuncia.',
                        'url'  => route('denuncia.edit', ['id' => $denuncia->id ]),
                    ]);

                }
            }
            if ($request['action'] == 'fase4') {
                // convertir de dd/mm/yyyy -> yyyy-mm-dd (mysql)
                if ($request['fremisionj'] != '') {
                    $request->merge([ 'fremisionj' => date('Y-m-d',strtotime(str_replace('/', '-', $request['fremisionj']))) ]);
                }

                $messages = array(
                    'required' => ':attribute es obligatorio.',
                    'email'    => ':attribute debe ser un e-mail válido.',
                    'min'      => ':attribute debe tener :min caracteres como mínimo.',
                    'max'      => ':attribute debe tener :max caracteres como máximo.',
                    'numeric'  => ':attribute debe ser numérico.',
                    'image'    => ':attribute debe ser un archivo imagen.',
                    'mimes'    => ':attribute debe ser un archivo de tipo :values.',
                );

                $attributes = array(
                    'jip' => 'J. Inv. Preparatoria',
                    'juzgamiento' => 'Juzgamiento',
                    'remitidoj' => 'Remitir a',
                    'oficioremitidoj' => 'Oficio',
                    'fremisionj' => 'Fecha de Remisión',
                );

                $rules = [
                    'jip' => 'required|exists:tblinstancia,id',
                    'juzgamiento' => 'required|exists:tblinstancia,id',
                    'remitidoj' => 'required',
                    'oficioremitidoj' => 'required|string|unique:denuncia,oficioremitidoj,'.$denuncia->oficioremitidoj.',oficioremitidoj',
                    'fremisionj' => 'required|date',
                ];

                $input = [
                    'jip' => $request['jip'],
                    'juzgamiento' => $request['juzgamiento'],
                    'remitidoj' => $request['remitidoj'],
                    'oficioremitidoj' => $request['oficioremitidoj'],
                    'fremisionj' => $request['fremisionj'],
                ];

                $validator = Validator::make($input, $rules, $messages);

                $validator->setAttributeNames($attributes);

                if ($validator->fails()){
                    return response()->json([
                      'fail' => true,
                      'errors' => $validator->errors()
                    ]);
                }else{

                    Denuncia::where('id', $id)->update($input);

                    return response()->json([
                        'tab' => 'denuncia',
                        'type' => 'update',
                        'status' => 'success',
                        'info' => 'Datos registrados en la denuncia.',
                        'url'  => route('denuncia.edit', ['id' => $denuncia->id ]),
                    ]);

                }
            }
        }

    }

    public function ejecucionUpdate( Request $request, $id)
    {
        
        $denuncia = Denuncia::find($id);
        
        if (isset($request['action']) && !empty($request['action'])) {

            if ($request['action'] == 'ejecucion') {
                // convertir de dd/mm/yyyy -> yyyy-mm-dd (mysql)
                if ($request['foficioejecucion'] != '') {
                    $request->merge([ 'foficioejecucion' => date('Y-m-d',strtotime(str_replace('/', '-', $request['foficioejecucion']))) ]);
                }

                $messages = array(
                    'required' => ':attribute es obligatorio.',
                    'email'    => ':attribute debe ser un e-mail válido.',
                    'min'      => ':attribute debe tener :min caracteres como mínimo.',
                    'max'      => ':attribute debe tener :max caracteres como máximo.',
                    'unique'   => ':attribute ya ha sido registrado.',
                    'numeric'  => ':attribute debe ser numérico.',
                    'image'    => ':attribute debe ser un archivo imagen.',
                    'mimes'    => ':attribute debe ser un archivo de tipo :values.',
                );

                $attributes = array(
                    'oficioejecucion' => 'Nro. Informe',
                    'foficioejecucion' => 'Fecha Informe',
                );

                $rules = [
                    'oficioejecucion' => 'required|string|unique:denuncia,oficioejecucion,'.$denuncia->oficioejecucion.',oficioejecucion',
                    'foficioejecucion' => 'required|date',
                ];

                $input = [
                    'oficioejecucion' => $request['oficioejecucion'],
                    'foficioejecucion' => $request['foficioejecucion'],
                ];

                $validator = Validator::make($input, $rules, $messages);

                $validator->setAttributeNames($attributes);

                if ($validator->fails()){
                    return response()->json([
                      'fail' => true,
                      'errors' => $validator->errors()
                    ]);
                }else{

                    if ($request->file('oficioejecucion_file') && $request->hasFile('oficioejecucion_file')) {
                        $filename = $request->file('oficioejecucion_file')->getClientOriginalName();
                        $filetype = $request->file('oficioejecucion_file')->getClientOriginalExtension();
                        $public_path = public_path();
                        $public_path = str_replace("\\", "/", $public_path);
                        $path = $public_path.'/img/denuncia/';
                        if (!file_exists($path)) { // crea el directorio si no existe
                            mkdir($path, 0777, true); // todos los permisos
                        }

                        // elimina el arhivo si existe
                        if (file_exists($public_path.$denuncia->oficioejecucion_file) && isset($denuncia->oficioejecucion_file) && !empty($denuncia->oficioejecucion_file)) {
                            unlink($public_path.$denuncia->oficioejecucion_file);
                        }

                        $file_name = 'file_ejecucion_'.$denuncia->expediente.'_'.time().'.'.$filetype;

                        $request->file('oficioejecucion_file')->move($path,$file_name);

                        $fakepath = '/img/denuncia/'.$file_name;
                        $input['oficioejecucion_file'] = $fakepath;
                    }

                    Denuncia::where('id', $id)->update($input);

                    return response()->json([
                        'tab' => 'ejecucion',
                        'type' => 'update',
                        'status' => 'success',
                        'info' => 'Informe de ejecucion registrado. '.$file_name,
                        'url'  => route('denuncia.ejecucion', ['id' => $denuncia->id ]),
                    ]);

                }
            }

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Denuncia  $denuncia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $denuncia = Denuncia::find($id);

        if (isset($request['action']) && !empty($request['action'])) {
            if ($request['action'] == 'victima') {

                $denuncia->denunciavictimas()->where('denuncia_id',$id)->where('victima_id',$request['victima_id'])->first()->delete();

                return response()->json([
                    'tab' => 'victima',
                    'type' => 'destroy',
                    'info' => 'Victima eliminada de la denuncia.',
                    'url'  => route('denuncia.edit', ['id' => $id ]),
                ]);

            }
            if ($request['action'] == 'agresor') {

                $denuncia->denunciaagresores()->where('denuncia_id',$id)->where('agresor_id',$request['agresor_id'])->first()->delete();

                return response()->json([
                    'tab' => 'agresor',
                    'type' => 'destroy',
                    'info' => 'Agresor eliminado de la denuncia.',
                    'url'  => route('denuncia.edit', ['id' => $id ]),
                ]);

            }
        }else {

            $denuncia->denunciavictimas()->where('denuncia_id',$id)->delete();

            $denuncia->denunciaagresores()->where('denuncia_id',$id)->delete();

            // $denuncia->tbldenuncias()->where('denuncia_id',$id)->delete();

            DenunciaTbldenuncia::where('denuncia_id','=',$denuncia->id)->delete();

            $denuncia->delete();

            // echo json_encode("OK.");
        }

    }

    public function denunciaSubirDocumento(Request $request,$id)
    {
        $messages = array(
            'required' => ':attribute es obligatorio.',
            'image'    => ':attribute debe ser un archivo imagen.',
            'mimes'    => ':attribute debe ser un archivo de tipo :values.',
            'max'      => [
                'file'    => ':attribute no puede superar los :max kilobytes seleccione otro documento.',
                'array'   => 'The :attribute may not have more than :max items.',
            ],
            'uploaded' => ':attribute no pudo ser cargado.',
        );

        $rules = [
            'registro_file'       => 'required|file|mimes:pdf|max:5120',
        ];

        $input = [
            'registro_file' => $request['registro_file'],
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()){
            return response()->json([
              'fail' => true,
              'errors' => $validator->errors()
            ]);
        }

        $denuncia=Denuncia::find($id);

        $registro_file  = Input::file('registro_file');
        if ($denuncia->registro_file) {
            File::delete(public_path().$denuncia->registro_file);
        }
        $doc=$this->guardarImagen($registro_file,$denuncia->expediente,'/img/denuncia/');

        $denuncia->registro_file=$doc;
        $denuncia->save();

        return $denuncia->registro_file;
    }

    private function guardarImagen(UploadedFile $imagen, string $name, string $rutaRelativa): string
    {
        // $nombreImagen = str_replace(' ', '-', $imagen->getClientOriginalName());
        // $longitudTotal = strlen($nombreImagen);
        $extension = $imagen->getClientOriginalExtension();

        // $longitudNombre = $longitudTotal - strlen($extension);
        // $nuevoNombre = substr($nombreImagen, 0, $longitudNombre - 1) . '_file_' . time() . '.' . $extension;
        $nuevoNombre = $name . '_file_' . time() . '.' . $extension;
        $rutaAbsoluta = public_path() . $rutaRelativa;
        $imagen->move($rutaAbsoluta, $nuevoNombre);

        return $rutaRelativa . $nuevoNombre;
    }

}
