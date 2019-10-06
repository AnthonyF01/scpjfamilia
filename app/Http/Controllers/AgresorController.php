<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Agresor;
use App\Models\Tbldepartamento;
// use App\Models\Tblprovincia;
// use App\Models\Tbldistrito;
use App\Models\Tbldocumento;

class AgresorController extends Controller
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

            // $agresores = Agresor::paginate(10);
            // return view('denuncia.agresor.index', compact('agresores'));

        // Nueva: Search - Sort 
        
        $agresores = new Agresor();


        $request->session()->put('search', $request
            ->has('search') ? $request->get('search') : ($request->session()
            ->has('search') ? $request->session()->get('search') : ''));


        $fillable = $agresores->getFields();

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


        $agresores = $agresores
            ->where('nombre', 'like', '%' . $request->session()->get('search') . '%')
            ->orwhere('apellido', 'like', '%' . $request->session()->get('search') . '%')
            ->orwhere('nro_doc', 'like', '%' . $request->session()->get('search') . '%')
            ->orwhere('sexo', 'like', '%' . $request->session()->get('search') . '%')
            ->orwhere('tbldepartamento_id', '=', ( gettype( Tbldepartamento::where('nombre','=',$request->session()->get('search'))->first() ) != 'NULL' ) ? Tbldepartamento::where('nombre','=',$request->session()->get('search'))->first()->id : '' )
            ->whereNull('deleted_at')
            ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
            // ->orderBy('nombre', $request->session()->get('sort'))
            // ->orderBy('email', $request->session()->get('sort'))
            ->paginate($request->session()->get('show'));

        // dd($agresores);

        if ($request->ajax()) {
          return view('denuncia.agresor.ajax', compact('agresores'));  
        } else {
          return view('denuncia.agresor.index', compact('agresores'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() /* no usado */
    {

        $departamentos = Tbldepartamento::whereNull('deleted_at')->pluck('nombre', 'id');
        // $provincias = Tblprovincia::all()->pluck('nombre', 'id');
        // $distritos = Tbldistrito::all()->pluck('nombre', 'id');
        $documentos = Tbldocumento::whereNull('deleted_at')->orderBy('nombre','asc')->pluck('nombre', 'id');

        // return view('denuncia.agresor.partials.form_ajax', compact('departamentos', 'provincias', 'distrito', 'documentos', 'tipos'));
        return view('denuncia.agresor.partials.form_ajax', compact('departamentos', 'documentos'));

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

    public function getAgresor(Request $request, $id = null)
    {
        if ($id !== null) {
            $agresor = Agresor::whereNull('deleted_at')->findOrFail($id);
            return response()->json($agresor);
        }else{
            $data = [];
            if($request->has('q')){
                $search = $request->q;
                $data = Agresor::select('id','nombre','apellido','nro_doc')
                        ->where("nombre","LIKE","%$search%")
                        ->orwhere("apellido","LIKE","%$search%")
                        ->orwhere("nro_doc","LIKE","%$search%")
                        ->whereNull('deleted_at')
                        ->orderBy('apellido', 'asc')
                        ->take(10)
                        ->get();
            }
            return response()->json($data);
        }
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
            // 'nombre' => 'Nombre',
            // 'apellido' => 'Apellido',
            'nombre1' => 'Primer Nombre',
            'nombre2' => 'Segundo Nombre',
            'nombre3' => 'Tercer Nombre',
            'apellido1' => 'Apellido Paterno',
            'apellido2' => 'Apellido Materno',
            'tbldocumento_id' => 'Tipo de Documento',
            'nro_doc' => 'Numero de Documento',
            'sexo' => 'Sexo',
            'tbldepartamento_id' => 'Departamento',
            'tblprovincia_id' => 'Provincia',
            'tbldistrito_id' => 'Distrito',
            'telefono' => 'Teléfono',
            'direccion' => 'Dirección',
        );

        $rules = [
            // 'nombre' => 'required|string',
            // 'apellido' => 'required|string',
            'nombre1' => 'required|string',
            'nombre2' => 'nullable|string',
            'nombre3' => 'nullable|string',
            'apellido1' => 'required|string',
            'apellido2' => 'required|string',
            'tbldocumento_id' => 'required|exists:tbldocumento,id',
            'nro_doc' => 'required|unique:agresor',
            'sexo' => 'required|string',
            'tbldepartamento_id' => 'required|exists:tbldepartamento,id',
            'tblprovincia_id' => 'required|exists:tblprovincia,id',
            'tbldistrito_id' => 'required|exists:tbldistrito,id',
            'telefono' => 'nullable|string',
            'direccion' => 'nullable|string',
        ];
        
        $input = [
            // 'nombre' => $request['nombre'],
            // 'apellido' => $request['apellido'],
            'nombre1' => $request['nombre1'],
            'nombre2' => $request['nombre2'],
            'nombre3' => $request['nombre3'],
            'apellido1' => $request['apellido1'],
            'apellido2' => $request['apellido2'],
            'tbldocumento_id' => $request['tbldocumento_id'],
            'nro_doc' => $request['nro_doc'],
            'sexo' => $request['sexo'],
            'tbldepartamento_id' => $request['tbldepartamento_id'],
            'tblprovincia_id' => $request['tblprovincia_id'],
            'tbldistrito_id' => $request['tbldistrito_id'],
            'telefono' => $request['telefono'],
            'direccion' => $request['direccion'],
        ];

        $validator = Validator::make($input, $rules, $messages);

        $validator->setAttributeNames($attributes);

        if ($validator->fails()){
            return response()->json([
              'fail' => true,
              'errors' => $validator->errors()
            ]);
        }else{

            $input = parent::array_push_assoc($input, 'nombre', $request['nombre1'].' '.$request['nombre2'].' '.$request['nombre3']);
            $input = parent::array_push_assoc($input, 'apellido', $request['apellido1'].' '.$request['apellido2']);

            $agresor = Agresor::create($input);

            return response()->json([
                'tab' => 'agresor_modal',
                'type' => 'store',
                'info' => 'Agresor registrado.',
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agresor  $agresor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agresor = Agresor::findOrFail($id);

        // return view('denuncia.agresor.show', compact('agresor'));

        return view('denuncia.agresor.detail', compact('agresor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agresor  $agresor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   

        $agresor = Agresor::findOrFail($id);

        $departamentos = Tbldepartamento::whereNull('deleted_at')->pluck('nombre', 'id');
        // $provincias = Tblprovincia::all()->pluck('nombre', 'id');
        // $distritos = Tbldistrito::all()->pluck('nombre', 'id');
        $documentos = Tbldocumento::whereNull('deleted_at')->orderBy('nombre','asc')->pluck('nombre', 'id');

        return view('denuncia.agresor.partials.form_ajax', compact('agresor', 'departamentos', 'documentos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agresor  $agresor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // No se pueden usar accessors o mutators en query builders, solo en elquent

        // convertir de dd/mm/yyyy -> yyyy-mm-dd (mysql)
        if ($request['fchnac'] != '') {
            $request->merge([ 'fchnac' => date('Y-m-d',strtotime(str_replace('/', '-', $request['fchnac']))) ]);
        }

        $agresor = Agresor::whereNull('deleted_at')->findOrFail($id);

        $messages = array(
            'required' => ':attribute es obligatorio.',
            'email'    => ':attribute debe ser un e-mail válido.',
            'min'      => ':attribute debe tener :min caracteres como mínimo.',
            'max'      => ':attribute debe tener :max caracteres como máximo.',
            'numeric'  => ':attribute debe ser numérico.',
        );

        $attributes = array(
            // 'nombre' => 'Nombre',
            // 'apellido' => 'Apellido',
            'nombre1' => 'Primer Nombre',
            'nombre2' => 'Segundo Nombre',
            'nombre3' => 'Tercer Nombre',
            'apellido1' => 'Apellido Paterno',
            'apellido2' => 'Apellido Materno',
            'tbldocumento_id' => 'Tipo de Documento',
            'nro_doc' => 'Numero de Documento',
            'sexo' => 'Sexo',
            'tbldepartamento_id' => 'Departamento',
            'tblprovincia_id' => 'Provincia',
            'tbldistrito_id' => 'Distrito',
            'telefono' => 'Teléfono',
            'direccion' => 'Dirección',
        );

        $rules = [
            // 'nombre' => 'required|string',
            // 'apellido' => 'required|string',
            'nombre1' => 'required|string',
            'nombre2' => 'nullable|string',
            'nombre3' => 'nullable|string',
            'apellido1' => 'required|string',
            'apellido2' => 'required|string',
            'tbldocumento_id' => 'required|exists:tbldocumento,id',
            'nro_doc' => 'required|unique:agresor,nro_doc,'.$agresor->nro_doc.',nro_doc',
            'sexo' => 'required|string',
            'tbldepartamento_id' => 'required|exists:tbldepartamento,id',
            'tblprovincia_id' => 'required|exists:tblprovincia,id',
            'tbldistrito_id' => 'required|exists:tbldistrito,id',
            'telefono' => 'nullable|string',
            'direccion' => 'nullable|string',
        ];
        
        $input = [
            // 'nombre' => $request['nombre'],
            // 'apellido' => $request['apellido'],
            'nombre1' => $request['nombre1'],
            'nombre2' => $request['nombre2'],
            'nombre3' => $request['nombre3'],
            'apellido1' => $request['apellido1'],
            'apellido2' => $request['apellido2'],
            'tbldocumento_id' => $request['tbldocumento_id'],
            'nro_doc' => $request['nro_doc'],
            'sexo' => $request['sexo'],
            'tbldepartamento_id' => $request['tbldepartamento_id'],
            'tblprovincia_id' => $request['tblprovincia_id'],
            'tbldistrito_id' => $request['tbldistrito_id'],
            'telefono' => $request['telefono'],
            'direccion' => $request['direccion'],
        ];

        // return response()->json( $input , 200);

        $validator = Validator::make($input, $rules, $messages);

        $validator->setAttributeNames($attributes); 

        if ($validator->fails()){
            return response()->json([
                'fail' => true,
                'errors' => $validator->errors()
            ]);
        }else{

            $input = parent::array_push_assoc($input, 'nombre', $request['nombre1'].' '.$request['nombre2'].' '.$request['nombre3']);
            $input = parent::array_push_assoc($input, 'apellido', $request['apellido1'].' '.$request['apellido2']);

            Agresor::where('id', $id)->whereNull('deleted_at')->update($input);
            
            return response()->json([
                'tab' => 'agresor_modal',
                'type' => 'update',
                'info' => 'Agresor actualizado.',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agresor  $agresor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agresor = Agresor::find($id)->delete();

        // return back()->with('info', 'Agresor eliminada correctamente.');

        return response()->json([
            'type' => 'destroy',
            'info' => 'Agresor eliminado correctamente.',
        ]);
    }
}
