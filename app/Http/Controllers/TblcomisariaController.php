<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Models\Tblcomisaria;
use App\Models\Tbldepartamento;
use App\Models\Tblmodulo;
use Illuminate\Support\Facades\Log;


class TblcomisariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // dd(session()->all());

        // Forma anterior

            // $tblcomisarias = Tblcomisaria::paginate(10);
            // return view('tablas.tblcomisaria.index', compact('tblcomisarias'));

        // Nueva: Search - Sort 
        
        $tblcomisarias = new Tblcomisaria();


        $request->session()->put('search', $request
            ->has('search') ? $request->get('search') : ($request->session()
            ->has('search') ? $request->session()->get('search') : ''));


        $fillable = $tblcomisarias->getFields();

        $request->session()->put('field', $request
            ->has('field') ? $request->get('field') : ( $request->session()
            ->has('field') ? ( array_search($request->session()->get('field'), $fillable) ? 
                $request->session()->get('field') : 'nombre' ) : 'nombre') );


        $request->session()->put('sort', $request
            ->has('sort') ? $request->get('sort') : ($request->session()
            ->has('sort') ? $request->session()->get('sort') : 'asc'));

        $request->session()->put('show', $request
            ->has('show') ? $request->get('show') : ($request->session()
            ->has('show') ? ( is_numeric($request->session()->get('show')) ? 
              $request->session()->get('show') : '10' ) : '10'));

        if (Auth::user()->getRoles()[0] == 'adminmodulo') {
            $tblcomisarias = $tblcomisarias->where('nombre', 'like', '%' . $request->session()->get('search') . '%')
                                           ->where('tblmodulo_id', '=', Auth::user()->tblmodulo_id)
                                           ->where('tbldepartamento_id', '=', Auth::user()->tbldepartamento_id);
        }else{
            $tblcomisarias = $tblcomisarias
            ->where('nombre', 'like', '%' . $request->session()->get('search') . '%')
            ->orwhere('tblmodulo_id', '=', ( gettype( Tblmodulo::where('nombre','=',$request->session()->get('search'))->first() ) != 'NULL' ) ? Tblmodulo::where('nombre','=',$request->session()->get('search'))->first()->id : '' )
            ->orwhere('tbldepartamento_id', '=', ( gettype( Tbldepartamento::where('nombre','=',$request->session()->get('search'))->first() ) != 'NULL' ) ? Tbldepartamento::where('nombre','=',$request->session()->get('search'))->first()->id : '' );
            // dd($tblcomisarias->toSql(),$tblcomisarias->getBindings());

        }

        // dd(Auth::user()->tblmodulo_id);

        // dd($tblcomisarias->toSql(),$tblcomisarias->getBindings());

        $tblcomisarias = $tblcomisarias
            ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
            // ->orderBy('nombre', $request->session()->get('sort'))
            // ->orderBy('email', $request->session()->get('sort'))
            ->paginate($request->session()->get('show'));

        // dd($tblcomisarias);

        if ($request->ajax()) {
          return view('tablas.tblcomisaria.ajax', compact('tblcomisarias'));  
        } else {
          return view('tablas.tblcomisaria.index', compact('tblcomisarias'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() /* no usada */
    {
        
        if (Auth::user()->getRoles()[0] == 'admin') {
            $modulos = Tblmodulo::all()->pluck('nombre', 'id');
            $departamentos = Tbldepartamento::all()->pluck('nombre', 'id');
        }
        if (Auth::user()->getRoles()[0] == 'adminmodulo') {
            // dd(Auth::user()->tbldepartamento_id);
            $modulos = Tblmodulo::where('id','=',Auth::user()->tblmodulo_id)->pluck('nombre', 'id');
            $departamentos = Tbldepartamento::where('id','=',Auth::user()->tbldepartamento_id)->pluck('nombre', 'id');
        }

        return view('tablas.tblcomisaria.partials.form_ajax', compact('departamentos', 'modulos'));

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

        // No se pueden usar accessors o mutators en query builders, solo en elquent

        Log::info('store institucion: ', ['request' => $request->all()]);

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
            'nombre' => 'Nombre',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
            'tipo_int' => 'Tipo Institucion',
            'tbldepartamento_id' => 'Departamento',
            'tblmodulo_id' => 'Modulo',
        );

        $rules = [
            'nombre' => 'required|string',
            'latitud' => 'nullable|string',
            'longitud' => 'nullable|string',
            'tipo_int' => 'required',
            'tbldepartamento_id' => 'required|exists:tbldepartamento,id',
            'tblmodulo_id' => 'nullable|exists:tblmodulo,id',
        ];
        
        $input = [
            'nombre' => $request['nombre'],
            'latitud' => $request['latitud'],
            'longitud' => $request['longitud'],
            'tipo_int' => $request['tipo_int'],
            'tbldepartamento_id' => $request['tbldepartamento_id'],
            'tblmodulo_id' => $request['tblmodulo_id'],
        ];

        $validator = Validator::make($input, $rules, $messages);

        $validator->setAttributeNames($attributes);

        if ($validator->fails()){
            return response()->json([
              'fail' => true,
              'errors' => $validator->errors()
            ]);
        }else{

            $tblcomisaria = Tblcomisaria::create($input);

            return response()->json([
                'type' => 'store',
                'info' => 'Institución registrada.',
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tblcomisaria  $tblcomisaria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tblcomisaria = Tblcomisaria::findOrFail($id);

        // return view('tablas.tblcomisaria.show', compact('tblcomisaria'));

        return view('tablas.tblcomisaria.detail', compact('tblcomisaria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tblcomisaria  $tblcomisaria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        
        $tblcomisaria = Tblcomisaria::findOrFail($id);

        if (Auth::user()->getRoles()[0] == 'admin') {
            $modulos = Tblmodulo::all()->pluck('nombre', 'id');
            $departamentos = Tbldepartamento::all()->pluck('nombre', 'id');
        }
        if (Auth::user()->getRoles()[0] == 'adminmodulo') {
            $modulos = Tblmodulo::where('id','=',Auth::user()->tblmodulo_id)->pluck('nombre', 'id');
            $departamentos = Tbldepartamento::where('id','=',Auth::user()->tbldepartamento_id)->pluck('nombre', 'id');
        }

        return view('tablas.tblcomisaria.partials.form_ajax', compact('tblcomisaria', 'roles', 'departamentos', 'modulos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tblcomisaria  $tblcomisaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // No se pueden usar accessors o mutators en query builders, solo en elquent

        $tblcomisaria = Tblcomisaria::findOrFail($id);

        $messages = array(
            'required' => ':attribute es obligatorio.',
            'email'    => ':attribute debe ser un e-mail válido.',
            'min'      => ':attribute debe tener :min caracteres como mínimo.',
            'max'      => ':attribute debe tener :max caracteres como máximo.',
            'numeric'  => ':attribute debe ser numérico.',
        );

        $attributes = array(
            'nombre' => 'Nombre',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
            'tipo_int' => 'Tipo Institucion',
            'tbldepartamento_id' => 'Departamento',
            'tblmodulo_id' => 'Modulo',
        );

        $rules = [
            'nombre' => 'required|string',
            'latitud' => 'nullable|string',
            'longitud' => 'nullable|string',
            'tipo_int' => 'required',
            'tbldepartamento_id' => 'required|exists:tbldepartamento,id',
            'tblmodulo_id' => 'nullable|exists:tblmodulo,id',
        ];
        
        $input = [
            'nombre' => $request['nombre'],
            'latitud' => $request['latitud'],
            'longitud' => $request['longitud'],
            'tipo_int' => $request['tipo_int'],
            'tbldepartamento_id' => $request['tbldepartamento_id'],
            'tblmodulo_id' => $request['tblmodulo_id'],
        ];

        $validator = Validator::make($input, $rules, $messages);

        $validator->setAttributeNames($attributes); 

        if ($validator->fails()){
            return response()->json([
                'fail' => true,
                'errors' => $validator->errors()
            ]);
        }else{

            Tblcomisaria::where('id', $id)->update($input);

            return response()->json([
                'type' => 'update',
                'info' => 'Institución actualizada.',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tblcomisaria  $tblcomisaria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tblcomisaria = Tblcomisaria::find($id)->delete();

        return response()->json([
            'type' => 'destroy',
            'info' => 'Institución eliminada correctamente.',
        ]);
    }
}
