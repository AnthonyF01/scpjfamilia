<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Auth;
use PDF;
use App\Models\Denuncia;
use App\Models\Agresor;
use App\Models\Victima;
use App\Models\DenunciaVictima;
use App\Models\DenunciaAgresor;
use App\Models\Tbldepartamento;
use App\Models\Tblmodulo;
use App\Models\Tblcomisaria;
use App\Models\Tblinstancia;
use App\Models\Tblparentesco;
use App\Models\Tbldenuncia;

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
        // $denuncias = $denuncias->paginate(10);
        // dd($denuncias);

        $request->session()->put('search', $request
            ->has('search') ? $request->get('search') : ($request->session()
            ->has('search') ? $request->session()->get('search') : ''));

        $request->session()->put('field', $request
            ->has('field') ? $request->get('field') : ( $request->session()
            ->has('field') ? ( array_search($request->session()->get('field'), $fillable) ? 
                $request->session()->get('field') : 'expediente' ) : 'expediente') );

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

        $request->session()->put('tblcomisaria_id', $request
            ->has('tblcomisaria_id') ? $request->get('tblcomisaria_id') : ($request->session()
            ->has('tblcomisaria_id') ? ( is_numeric($request->session()->get('tblcomisaria_id')) ? 
              $request->session()->get('tblcomisaria_id') : '' ) : ''));

        $request->session()->put('checked', $request
            ->has('checked') ? $request->get('checked') : ($request->session()
            ->has('checked') ? ( is_numeric($request->session()->get('checked')) ? 
              $request->session()->get('checked') : '0' ) : '0'));

        $request->session()->put('fecha1', $request
            ->has('fecha1') ? $request->get('fecha1') : ($request->session()
            ->has('fecha1') ? ( is_numeric($request->session()->get('fecha1')) ? 
              $request->session()->get('fecha1') : date('Y-m-d') ) : date('Y-m-d')));

        $request->session()->put('fecha2', $request
            ->has('fecha2') ? $request->get('fecha2') : ($request->session()
            ->has('fecha2') ? ( is_numeric($request->session()->get('fecha2')) ? 
              $request->session()->get('fecha2') : date('Y-m-d') ) : date('Y-m-d')));


        $denuncias = $denuncias
            ->where('expediente', 'like', '%' . $request->session()->get('search') . '%')
            ->where('tblmodulo_id', Auth::user()->tblmodulo_id);

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
        // dd($denuncias->toSql(), $denuncias->getBindings());


        $denuncias = $denuncias
            ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
            ->paginate($request->session()->get('show'));


        // dd($denuncias);

        // dd($request->session()->get('fecha1'), $request->session()->get('fecha2'));

        $comisarias = Tblcomisaria::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->orderBy('nombre')->pluck('nombre', 'id');

        $instancias = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->orderBy('nombre')->pluck('nombre', 'id');

        $anios = new Denuncia();

        $anios = $anios->select(DB::raw("year(fformalizacion) as id, year(fformalizacion) as anio"))
                     ->where('tblmodulo_id', Auth::user()->tblmodulo_id)->orderBy('id','desc')->pluck('anio', 'id');

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

        $comisarias = Tblcomisaria::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->orderBy('nombre')->pluck('nombre', 'id');
        $parentescos = Tblparentesco::orderBy('nombre')->pluck('nombre', 'id');
        $tdenuncias = Tbldenuncia::orderBy('nombre')->pluck('nombre', 'id');
        $instancias = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasPL = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo','PL')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasMIN = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo','PL')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasJIP = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo','IP')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasJP = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo','JP')->orderBy('nombre')->pluck('nombre', 'id');

        return view('denuncia.denuncia.partials.form', compact('comisarias','instancias','instanciasPL','instanciasMIN','instanciasJIP','instanciasJP','parentescos','tdenuncias'));

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

    public function getGData(Request $request)
    {

      if (isset(Auth::user()->tblmodulo_id) && !empty(Auth::user()->tblmodulo_id)) {
        $sql = " SELECT distinct ti.nombre,ti.sigla,ti.tipo,IFNULL(count(d.id),0) as total FROM `tblinstancia` ti left join ( select * from denuncia d where d.tblmodulo_id = ".Auth::user()->tblmodulo_id." and year(d.fformalizacion) = ".$request['anio'];
        if (isset($request['mes']) && !empty($request['mes'])) {
          $sql .= " AND month(d.fformalizacion) = ".$request['mes']." ";    
        }
        $sql .= " ) as d on d.tblinstancia_id=ti.id where ti.tbldepartamento_id = ".Auth::user()->tbldepartamento_id." and (ti.tipo = 'FA' or ti.tipo = 'JM') group by ti.nombre order by ti.nombre ";
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

        $data['json'] = $json;
        $data['maxHeight'] = $maxHeight;
        $data['anio'] = $request['anio'];
        if (isset($request['mes']) && !empty($request['mes'])) {
            $data['mes'] = $request['mes'];
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
                     ->where('tblmodulo_id', Auth::user()->tblmodulo_id)->orderBy('id','desc')->pluck('anio', 'id');

        $comisarias = Tblcomisaria::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->orderBy('nombre')->pluck('nombre', 'id');

        $instancias = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->orderBy('nombre')->pluck('nombre', 'id');


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
            ->where('tblmodulo_id', Auth::user()->tblmodulo_id);

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
                        where d.tblmodulo_id=".Auth::user()->tblmodulo_id." 
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
                        where d.tblmodulo_id=".Auth::user()->tblmodulo_id." 
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
                                    'tbldepartamento_id' => 15,
                                    'tblprovincia_id' => 127,
                                    'tbldistrito_id' => 1251,
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
            }else{
                if ( ($request->file('file_audiencia') && $request->hasFile('file_audiencia')) ) {
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
                     ->where('tblmodulo_id', Auth::user()->tblmodulo_id)->orderBy('id','desc')->pluck('anio', 'id');

        $comisarias = Tblcomisaria::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->orderBy('nombre')->pluck('nombre', 'id');

        $instancias = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->orderBy('nombre')->pluck('nombre', 'id');

        if ($request->ajax()) {

        }else{

            $idChartArr = [];

            if ((isset($request['graph3']) && !empty($request['graph3']) && $request['graph3'] != '0') || (isset($request['graph1']) && !empty($request['graph1']) && $request['graph1'] != '0') ) {

                // Victimas denunciantes
                $sqlVD = "SELECT count(*) as total from ( SELECT distinct v.id,v.nombre,v.nro_doc from denuncia d
                    join denuncia_victima vd on d.id = vd.denuncia_id 
                    join victima v on v.id = vd.victima_id
                    where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia IS NOT NULL and d.fformalizacion IS NOT NULL AND year(d.fformalizacion) = ".$request['anio']." ";
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
                                where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia IS NOT NULL and d.fformalizacion IS NOT NULL
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

                for ($i=0; $i < count($victimasCar); $i++) { 
                    if ($victimasCar[$i]->nombre == 'Adulto Mayor') {
                        $victimasCarArr['keys'][] = 'A. Mayor';
                    }else{
                        $victimasCarArr['keys'][] = $victimasCar[$i]->nombre;
                    }
                    $victimasCarArr['values'][] = $victimasCar[$i]->total;
                }

                $chartCV = new ExampleChart;
                $chartCV->displayYAxes(false)->displayXAxes(true,'red','15px')->displayLegend(false)->plotOpt(true, 'column');
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
                                    where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia IS NOT NULL and d.fformalizacion IS NOT NULL
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

                for ($i=0; $i < count($victimasPV); $i++) { 
                    $victimasPVArr['keys'][] = $victimasPV[$i]->edad_fr;
                    $victimasPVArr['values'][] = $victimasPV[$i]->total;
                }

                $chartPV = new ExampleChart;
                $chartPV->displayYAxes(false)->displayXAxes(true,'red','15px')->displayLegend(false)->plotOpt(true, 'column');
                $chartPV->labels($victimasPVArr['keys']);
                $chartPV->dataset('Edad', 'column', $victimasPVArr['values'])
                        ->options([
                            'color' => 'rgb(203,0,0)',
                        ]);

                // Presuntos Agresores
                $sqlPA = "SELECT count(*) as total from (
                        select distinct a.id,a.nombre,a.nro_doc from denuncia d
                        join denuncia_agresor ad on d.id = ad.denuncia_id 
                        join agresor a on a.id = ad.agresor_id 
                        where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia IS NOT NULL 
                        and d.fformalizacion IS NOT NULL AND year(d.fformalizacion) = ".$request['anio']." ";
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
                            where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia IS NOT NULL 
                            and d.fformalizacion IS NOT NULL
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
                $chartSA->legendStyle(true)->displayYAxes(false)->displayLegend(true)->chartPieM(true);
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
                        ]);

                // Parentesco con el agresor
                $sqlPPA = "SELECT distinct tp.id, tp.nombre, count(a.tblparentesco_id) total from (
                        select MAX(ad1.id) as id, ad1.agresor_id, ad1.tblparentesco_id, ad1.denuncia_id
                        from (
                            select dad.* from denuncia_agresor as dad
                            join denuncia d on d.id = dad.denuncia_id
                            where d.fdenuncia IS NOT NULL and d.fformalizacion IS NOT NULL 
                            and d.tblmodulo_id=".Auth::user()->tblmodulo_id." 
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
                        where d.fdenuncia IS NOT NULL and d.fformalizacion IS NOT NULL and d.tblmodulo_id=30 
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
                }

                $chartPPA = new ExampleChart;
                $chartPPA->heightChart('300px')->displayYAxes(false)->displayXAxes(true,'blak','11px')->displayLegend(false)->plotOpt(true, 'column');
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

                return view('denuncia.denuncia.estadistica.estadistica', compact('anios','comisarias','instancias', 'hHTotal','vDTotal','chartCV','chartPV','pATotal','chartSA','chartPPA','idChartArr','request','graphGenerated'));

            }

            if ((isset($request['graph2']) && !empty($request['graph2']) && $request['graph2'] != '0') || (isset($request['graph4']) && !empty($request['graph4']) && $request['graph4'] != '0') ) {
                // if (isset($request['graph2']) && !empty($request['graph2']) && $request['graph2'] != '0') {

                // Atencion Psicologica
                $sqlAp = "SELECT count(d.psicologia) as total from denuncia d
                    where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.psicologia = '1' and d.fdenuncia is not null and d.fformalizacion is not null 
                    AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
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
                    where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.asistencialegal = '1' and d.fdenuncia is not null and d.fformalizacion is not null 
                    AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
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
                        where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null 
                        AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
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

                // Calificacion Denuncias
                $sqlCDN = "SELECT distinct cl.calificacion, count(cld.calificacion) as total from (
                            select d.calificacion from denuncia d  
                            where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null 
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
                            'color' => ['rgb(255,51,153)','rgb(203,0,0)'],
                        ]);

                // Audiencias Judiciales
                $sqlAJ = "SELECT count(*) as total from denuncia d 
                        where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null 
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
                            where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null 
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
                        $PNPTotal = $denunciaPL[0]->total;
                    }
                }

                // Modulo VF
                $sqlMVF = "SELECT sum(a.dias_modulo) as suma, avg(a.dias_modulo) as promedio, count(*) as total from (
                            select (case 
                                when d.fformalizacion is not NULL then 
                                    case 
                                        when d.faudiencia is not NULL then DATEDIFF(d.faudiencia,d.fformalizacion)
                                        else 0
                                    end
                                when d.fformalizacion is NULL then '0' end 
                            ) as dias_modulo from denuncia d
                            where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null 
                            AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlMVF .= " and month(d.fformalizacion)=".$request['mes']." ";
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
                        $MVFTotal = $moduloVF[0]->total;
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
                            where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null 
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
                            where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null 
                            AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if (isset($request['mes']) && !empty($request['mes'])) {
                    $sqlREM .= " and month(d.fformalizacion)=".$request['mes']." ";
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

                // Cuadro de ingreso
                $sqlCID = "SELECT distinct extract(month FROM d.fformalizacion) as mes, count(*) as total from denuncia d 
                        where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null 
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
                $mesesL = array('ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC');

                $ingresoArr = [];

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
                        }else{
                            $ingresoArr['keys'][] = $mesesL[$i];
                            $ingresoArr['values'][] = null;
                        }
                    }else{
                        $ingresoArr['keys'][] = $mesesL[$i];
                        $ingresoArr['values'][] = null;
                    }
                }

                $chartCID = new ExampleChart;
                $chartCID->legendStyle(true)->displayYAxes(false)->displayXAxes(true,'black','15px')->displayLegend(false)->plotOpt(true, 'line');
                $chartCID->labels($ingresoArr['keys']);
                $chartCID->dataset('Total', 'line', $ingresoArr['values']);

                // Tiempos de tramites de denuncias - Tiempo de celeridad
                $sqlTTC = "SELECT distinct mes, sum(a.duracion) as suma, avg(a.duracion) as promedio from (
                        select extract(month FROM d.fformalizacion) as mes, (case 
                        when d.fdenuncia is not NULL then 
                            case 
                                when d.faudiencia is not NULL then DATEDIFF(d.faudiencia,d.fdenuncia) 
                                else 0
                            end
                        when d.fdenuncia is NULL then 0 end 
                        ) as duracion from denuncia d 
                        where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null 
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
                $mesesL = array('ENE','FEB','MAR','ABR','MAY','JUN','JUL','AGO','SEP','OCT','NOV','DIC');

                $celeridadArr = [];

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
                            $celeridadArr['values'][] = (double)$_total;
                        }else{
                            $celeridadArr['keys'][] = $mesesL[$i];
                            $celeridadArr['values'][] = null;
                        }
                    }else{
                        $celeridadArr['keys'][] = $mesesL[$i];
                        $celeridadArr['values'][] = null;
                    }
                }

                $chartTTC = new ExampleChart;
                $chartTTC->legendStyle(true)->displayYAxes(false)->displayXAxes(true,'black','15px')->displayLegend(false)->plotOpt(true, 'column');
                $chartTTC->labels($celeridadArr['keys']);
                $chartTTC->dataset('Total', 'column', $celeridadArr['values'])
                         ->options([
                            'color' => 'rgb(255,51,153)',
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
                                where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null 
                                AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlPSCEM .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlPSCEM .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
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
                                where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null 
                                AND extract(year FROM d.fformalizacion) = ".$request['anio']." ";
                if( isset($request['tblinstancia_id']) && !empty($request['tblinstancia_id']) ){
                    $sqlPSCEM .= " and d.tblinstancia_id='".$request['tblinstancia_id']."' ";
                }
                if( isset($request['tblcomisaria_id']) && !empty($request['tblcomisaria_id']) ){
                    $sqlPSCEM .= " and d.tblcomisaria_id='".$request['tblcomisaria_id']."' ";
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
                        where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null 
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
                            where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null 
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
                            where tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null 
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
                            where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null 
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
                        where d.tblmodulo_id=".Auth::user()->tblmodulo_id." and d.fdenuncia is not null and d.fformalizacion is not null 
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
                    $idChartArr[] = $chartCDN->id;
                    $idChartArr[] = $chartVAR->id;
                    $idChartArr = json_encode($idChartArr);
                    return view('denuncia.denuncia.estadistica.estadistica', compact('anios','comisarias','instancias','ApTotal','AlTotal','DPTotal','chartCDN','AJTotal','PNPTotal','MVFTotal','DRTotal','REMTotal','chartVAR','idChartArr','request','graphGenerated'));
                }

                if (isset($request['graph4']) && !empty($request['graph4']) && $request['graph4'] != '0') {
                    $graphGenerated = '4';
                    // array de ids de las graficas
                    $idChartArr[] = $chartCID->id;
                    // $idChartArr[] = $chartTTC->id;
                    $idChartArr[] = "ttramite";         // id del grafico generado manualmente
                    $idChartArr = json_encode($idChartArr);
                    return view('denuncia.denuncia.estadistica.estadistica', compact('anios','comisarias','instancias','DPTotal','chartCID','PNPTotal','MVFTotal','PSCEMTotal','ALCEMTotal','MINTotal','idChartArr','request','graphGenerated'));
                }



            }else{
                $chart = new ExampleChart;
                $chart->labels(['One', 'Two', 'Three', 'Four']);
                $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
                $chart->dataset('My dataset 2', 'line', [4, 3, 2, 1]);
    
                return view('denuncia.denuncia.estadistica.estadistica', compact('anios','comisarias','instancias','chart','request'));
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
        $comisarias = Tblcomisaria::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->orderBy('nombre')->pluck('nombre', 'id');
        $parentescos = Tblparentesco::orderBy('nombre')->pluck('nombre', 'id');
        $instancias = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo','FA')->orwhere('tipo','JM')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasPL = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo','PL')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasMIN = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo','PL')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasJIP = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo','IP')->orderBy('nombre')->pluck('nombre', 'id');
        $instanciasJP = Tblinstancia::where('tbldepartamento_id',Auth::user()->tbldepartamento_id)->where('tipo','JP')->orderBy('nombre')->pluck('nombre', 'id');
        $tdenuncias = Tbldenuncia::orderBy('nombre')->pluck('nombre', 'id');

        return view('denuncia.denuncia.partials.form', compact('denuncia','comisarias','instancias','instanciasPL','instanciasMIN','instanciasJIP','instanciasJP','parentescos','tdenuncias'));
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
                $denuncia->save();
                return response()->json([
                    'tab' => 'cem',
                    'type' => 'update',
                    'status' => 'success',
                    'info' => 'Parametro(s) CEM registrado(s) en la denuncia.',
                    'url'  => route('denuncia.edit', ['id' => $denuncia->id ]),
                ]);
            }
            if ($request['action'] == 'denuncia') {
                // convertir de dd/mm/yyyy -> yyyy-mm-dd (mysql)
                if ($request['fdenuncia'] != '') {
                    $request->merge([ 'fdenuncia' => date('Y-m-d',strtotime(str_replace('/', '-', $request['fdenuncia']))) ]);
                }
                if ($request['fformalizacion'] != '') {
                    $request->merge([ 'fformalizacion' => date('Y-m-d',strtotime(str_replace('/', '-', $request['fformalizacion']))) ]);
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
                    'mimes'    => ':attribute debe ser un archivo de tipo: valores.',
                    'uploaded' => ':attribute no pudo ser cargado.',
                );

                $attributes = array(
                    'oficio' => 'Oficio',
                    'tbldenuncia_id' => 'Tipo Denuncia',
                    'fdenuncia' => 'Fecha de Denuncia',
                    'fformalizacion' => 'Fecha de Formalización',
                    'tblcomisaria_id' => 'Comisaria',
                    'observacion' => 'Observacion',
                    'registro_file' => 'Archivo de Registro',
                );

                $rules = [
                    'oficio' => 'required|string',
                    // 'tbldenuncia_id' => 'required|array|min:1',
                    // 'tbldenuncia_id' => 'min:1',
                    'fdenuncia' => 'required|date',
                    'fformalizacion' => 'required|date',
                    'tblcomisaria_id' => 'required|exists:tblcomisaria,id',
                    'observacion' => 'nullable|string',
                ];
                
                $input = [
                    'oficio' => $request['oficio'],
                    'tbldenuncia_id' => $request['tbldenuncia_id'],
                    'fdenuncia' => $request['fdenuncia'],
                    'fformalizacion' => $request['fformalizacion'],
                    'tblcomisaria_id' => $request['tblcomisaria_id'],
                    'observacion' => $request['observacion'],
                ];

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

                    unset($input['tbldenuncia_id']);
                    Denuncia::where('id', $id)->update($input);

                    // el metodo sync solo sirve para tablas relacionadas muchos a muchos
                    if (!empty($request->get('tbldenuncia_id'))) {
                      $denuncia->tbldenuncias()->sync($request->get('tbldenuncia_id'));
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
                if ($request['faudiencia'] != '') {
                    $request->merge([ 'faudiencia' => date('Y-m-d',strtotime(str_replace('/', '-', $request['faudiencia']))) ]);
                }

                $messages = array(
                    'required' => ':attribute es obligatorio.',
                    'email'    => ':attribute debe ser un e-mail válido.',
                    'min'      => ':attribute debe tener :min caracteres como mínimo.',
                    'max'      => ':attribute debe tener :max caracteres como máximo.',
                    'unique'   => ':attribute ya ha sido registrado.',
                    'numeric'  => ':attribute debe ser numérico.',
                    'image'    => ':attribute debe ser un archivo imagen.',
                    'mimes'    => ':attribute debe ser un archivo de tipo: valores.',
                );

                $attributes = array(
                    'tblinstancia_id' => 'Juzgado',
                    'expediente' => 'Expediente',
                    'calificacion' => 'Calificacion',
                    'hora' => 'Hora de Audiencia',
                    'ministerio' => 'Ministerio',
                    'faudiencia' => 'Fecha de Formalización',
                );

                $rules = [
                    'tblinstancia_id' => 'required|exists:tblinstancia,id',
                    'expediente' => 'required|string|unique:denuncia,expediente,'.$denuncia->expediente.',expediente',
                    'calificacion' => 'nullable|string',
                    'hora' => 'nullable',
                    'ministerio' => 'nullable',
                    'faudiencia' => 'nullable|date',
                ];
                
                $input = [
                    'tblinstancia_id' => $request['tblinstancia_id'],
                    'expediente' => $request['expediente'],
                    'calificacion' => $request['calificacion'],
                    'hora' => $request['hora'],
                    'ministerio' => $request['ministerio'],
                    'faudiencia' => $request['faudiencia'],
                ];

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
                    'mimes'    => ':attribute debe ser un archivo de tipo: valores.',
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
                    'mimes'    => ':attribute debe ser un archivo de tipo: valores.',
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
                    'mimes'    => ':attribute debe ser un archivo de tipo: valores.',
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

            $denuncia->tbldenuncias()->where('denuncia_id',$id)->delete();

            $denuncia->delete();

            // echo json_encode("OK.");
        }

    }
}
