<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Models\Tblcentrosalud;
use App\Models\Tbldepartamento;
use App\Models\Tblmodulo;

class TblcentrosaludController extends Controller
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

            // $tblcentrosaluds = Tblcentrosalud::paginate(10);
            // return view('tablas.tblcentrosalud.index', compact('tblcentrosaluds'));

        // Nueva: Search - Sort 
        
        $tblcentrosaluds = new Tblcentrosalud();


        $request->session()->put('search', $request
            ->has('search') ? $request->get('search') : ($request->session()
            ->has('search') ? $request->session()->get('search') : ''));


        $fillable = $tblcentrosaluds->getFields();

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


        $tblcentrosaluds = $tblcentrosaluds
            ->where('nombre', 'like', '%' . $request->session()->get('search') . '%');

        if (Auth::user()->getRoles()[0] == 'adminmodulo') {
            $tblcentrosaluds = $tblcentrosaluds->where('tblmodulo_id', '=', Auth::user()->tblmodulo_id)
                                               ->where('tblmodulo_id', '=', Auth::user()->tblmodulo_id)
                                               ->where('tbldepartamento_id', '=', Auth::user()->tbldepartamento_id);
        }else{
            $tblcentrosaluds = $tblcentrosaluds
                ->orwhere('tblmodulo_id', '=', ( gettype( Tblmodulo::where('nombre','=',$request->session()->get('search'))->first() ) != 'NULL' ) ? Tblmodulo::where('nombre','=',$request->session()->get('search'))->first()->id : '' )
                ->orwhere('tbldepartamento_id', '=', ( gettype( Tbldepartamento::where('nombre','=',$request->session()->get('search'))->first() ) != 'NULL' ) ? Tbldepartamento::where('nombre','=',$request->session()->get('search'))->first()->id : '' );
        }

        $tblcentrosaluds = $tblcentrosaluds->orderBy($request->session()->get('field'), $request->session()->get('sort'))
                ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
                // ->orderBy('nombre', $request->session()->get('sort'))
                // ->orderBy('email', $request->session()->get('sort'))
                ->paginate($request->session()->get('show'));


        // dd($tblcentrosaluds);

        if ($request->ajax()) {
          return view('tablas.tblcentrosalud.ajax', compact('tblcentrosaluds'));  
        } else {
          return view('tablas.tblcentrosalud.index', compact('tblcentrosaluds'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() /* no usado */
    {
        
        if (Auth::user()->getRoles()[0] == 'admin') {
            $modulos = Tblmodulo::all()->pluck('nombre', 'id');
            $departamentos = Tbldepartamento::all()->pluck('nombre', 'id');
        }
        if (Auth::user()->getRoles()[0] == 'adminmodulo') {
            $modulos = Tblmodulo::where('id','=',Auth::user()->tblmodulo_id)->pluck('nombre', 'id');
            $departamentos = Tbldepartamento::where('id','=',Auth::user()->tbldepartamento_id)->pluck('nombre', 'id');
        }

        return view('tablas.tblcentrosalud.partials.form_ajax', compact('departamentos', 'modulos'));

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
            'tbldepartamento_id' => 'Departamento',
            'tblmodulo_id' => 'Modulo',
        );

        $rules = [
            'nombre' => 'required|string',
            'tbldepartamento_id' => 'required|exists:tbldepartamento,id',
            'tblmodulo_id' => 'required|exists:tblmodulo,id',
        ];
        
        $input = [
            'nombre' => $request['nombre'],
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

            $tblcentrosalud = Tblcentrosalud::create($input);

            return response()->json([
                'type' => 'store',
                'info' => 'Centro de Salud registrado.',
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tblcentrosalud  $tblcentrosalud
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tblcentrosalud = Tblcentrosalud::findOrFail($id);

        // return view('tablas.tblcentrosalud.show', compact('tblcentrosalud'));

        return view('tablas.tblcentrosalud.detail', compact('tblcentrosalud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tblcentrosalud  $tblcentrosalud
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        
        $tblcentrosalud = Tblcentrosalud::findOrFail($id);

        if (Auth::user()->getRoles()[0] == 'admin') {
            $modulos = Tblmodulo::all()->pluck('nombre', 'id');
            $departamentos = Tbldepartamento::all()->pluck('nombre', 'id');
        }
        if (Auth::user()->getRoles()[0] == 'adminmodulo') {
            $modulos = Tblmodulo::where('id','=',Auth::user()->tblmodulo_id)->pluck('nombre', 'id');
            $departamentos = Tbldepartamento::where('id','=',Auth::user()->tbldepartamento_id)->pluck('nombre', 'id');
        }

        return view('tablas.tblcentrosalud.partials.form_ajax', compact('tblcentrosalud', 'roles', 'departamentos', 'modulos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tblcentrosalud  $tblcentrosalud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // No se pueden usar accessors o mutators en query builders, solo en elquent

        $tblcentrosalud = Tblcentrosalud::findOrFail($id);

        $messages = array(
            'required' => ':attribute es obligatorio.',
            'email'    => ':attribute debe ser un e-mail válido.',
            'min'      => ':attribute debe tener :min caracteres como mínimo.',
            'max'      => ':attribute debe tener :max caracteres como máximo.',
            'numeric'  => ':attribute debe ser numérico.',
        );

        $attributes = array(
            'nombre' => 'Nombre',
            'tbldepartamento_id' => 'Departamento',
            'tblmodulo_id' => 'Modulo',
        );

        $rules = [
            'nombre' => 'required|string',
            'tbldepartamento_id' => 'required|exists:tbldepartamento,id',
            'tblmodulo_id' => 'required|exists:tblmodulo,id',
        ];
        
        $input = [
            'nombre' => $request['nombre'],
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

            Tblcentrosalud::where('id', $id)->update($input);

            return response()->json([
                'type' => 'update',
                'info' => 'Centro de Salud actualizado.',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tblcentrosalud  $tblcentrosalud
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tblcentrosalud = Tblcentrosalud::find($id)->delete();

        return response()->json([
            'type' => 'destroy',
            'info' => 'Centro de Salud eliminado correctamente.',
        ]);
    }
}
