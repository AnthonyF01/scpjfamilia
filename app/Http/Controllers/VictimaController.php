<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Victima;
use App\Models\Tbldepartamento;
// use App\Models\Tblprovincia;
// use App\Models\Tbldistrito;
use App\Models\Tbldocumento;
use App\Models\Tbltipo;

class VictimaController extends Controller
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

            // $victimas = Victima::paginate(10);
            // return view('denuncia.victima.index', compact('victimas'));

        // Nueva: Search - Sort 
        
        $victimas = new Victima();


        $request->session()->put('search', $request
            ->has('search') ? $request->get('search') : ($request->session()
            ->has('search') ? $request->session()->get('search') : ''));


        $fillable = $victimas->getFields();

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


        $victimas = $victimas
            ->where('nombre', 'like', '%' . $request->session()->get('search') . '%')
            ->orwhere('apellido', 'like', '%' . $request->session()->get('search') . '%')
            ->orwhere('nro_doc', 'like', '%' . $request->session()->get('search') . '%')
            ->orwhere('tbltipo_id', '=', ( gettype( Tbltipo::where('nombre','=',$request->session()->get('search'))->first() ) != 'NULL' ) ? Tbltipo::where('nombre','=',$request->session()->get('search'))->first()->id : '' )
            ->orwhere('tbldepartamento_id', '=', ( gettype( Tbldepartamento::where('nombre','=',$request->session()->get('search'))->first() ) != 'NULL' ) ? Tbldepartamento::where('nombre','=',$request->session()->get('search'))->first()->id : '' )
            ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
            // ->orderBy('nombre', $request->session()->get('sort'))
            // ->orderBy('email', $request->session()->get('sort'))
            ->paginate($request->session()->get('show'));

        // dd($victimas);

        if ($request->ajax()) {
          return view('denuncia.victima.ajax', compact('victimas'));  
        } else {
          return view('denuncia.victima.index', compact('victimas'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() /* no usado */
    {

        $departamentos = Tbldepartamento::all()->pluck('nombre', 'id');
        // $provincias = Tblprovincia::all()->pluck('nombre', 'id');
        // $distritos = Tbldistrito::all()->pluck('nombre', 'id');
        $documentos = Tbldocumento::orderBy('nombre','asc')->pluck('nombre', 'id');
        $tipos = Tbltipo::all()->pluck('nombre', 'id');

        // return view('denuncia.victima.partials.form_ajax', compact('departamentos', 'provincias', 'distrito', 'documentos', 'tipos'));
        return view('denuncia.victima.partials.form_ajax', compact('departamentos', 'documentos', 'tipos'));

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

    public function getVictima(Request $request, $id = null)
    {

        if ($id !== null) {
            $victima = Victima::whereNull('deleted_at')->with(['tbldepartamento', 'tbldepartamento', 'tbldocumento'])->findOrFail($id);
            return response()->json($victima);
        }else{
            $data = [];
            if($request->has('q')){
                $search = $request->q;
                $data = Victima::select('id','nombre','apellido','nro_doc','edad')
                        ->where("nombre","LIKE","%$search%")
                        ->orwhere("apellido","LIKE","%$search%")
                        ->orwhere("nro_doc","LIKE","%$search%")
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
            'unique'   => ':attribute ya ha sido registrado.',
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
            'tbltipo_id' => 'Tipo',
            'edad' => 'Edad',
            'hijos' => 'Hijos',
            'tbldepartamento_id' => 'Departamento',
            'tblprovincia_id' => 'Provincia',
            'tbldistrito_id' => 'Distrito',
            'direccion' => 'Dirección',
            'telefono' => 'Teléfono',
            'email' => 'Correo Electrónico',
        );

        $rules = [
            // 'nombre' => 'nullable|string',
            // 'apellido' => 'nullable|string',
            'nombre1' => 'required|string',
            'nombre2' => 'nullable|string',
            'nombre3' => 'nullable|string',
            'apellido1' => 'required|string',
            'apellido2' => 'required|string',
            'tbldocumento_id' => 'required|exists:tbldocumento,id',
            'nro_doc' => 'required|unique:victima',
            'tbltipo_id' => 'required|exists:tbltipo,id',
            'edad' => 'required|numeric',
            'hijos' => 'required|numeric',
            'tbldepartamento_id' => 'required|exists:tbldepartamento,id',
            'tblprovincia_id' => 'required|exists:tblprovincia,id',
            'tbldistrito_id' => 'required|exists:tbldistrito,id',
            'direccion' => 'nullable|string',
            'telefono' => 'nullable|string',
            'email' => 'nullable|email|string',
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
            'tbltipo_id' => $request['tbltipo_id'],
            'edad' => $request['edad'],
            'hijos' => $request['hijos'],
            'tbldepartamento_id' => $request['tbldepartamento_id'],
            'tblprovincia_id' => $request['tblprovincia_id'],
            'tbldistrito_id' => $request['tbldistrito_id'],
            'direccion' => $request['direccion'],
            'telefono' => $request['telefono'],
            'email' => $request['email'],
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

            $victima = Victima::create($input);

            return response()->json([
                'tab' => 'victima_modal',
                'type' => 'store',
                'info' => 'Victima registrada.',
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Victima  $victima
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $victima = Victima::findOrFail($id);

        // return view('denuncia.victima.show', compact('victima'));

        return view('denuncia.victima.detail', compact('victima'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Victima  $victima
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   

        $victima = Victima::findOrFail($id);

        $departamentos = Tbldepartamento::all()->pluck('nombre', 'id');
        // $provincias = Tblprovincia::all()->pluck('nombre', 'id');
        // $distritos = Tbldistrito::all()->pluck('nombre', 'id');
        $documentos = Tbldocumento::orderBy('nombre','asc')->pluck('nombre', 'id');
        $tipos = Tbltipo::all()->pluck('nombre', 'id');

        return view('denuncia.victima.partials.form_ajax', compact('victima', 'departamentos', 'documentos', 'tipos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Victima  $victima
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // No se pueden usar accessors o mutators en query builders, solo en elquent

        // convertir de dd/mm/yyyy -> yyyy-mm-dd (mysql)
        if ($request['fchnac'] != '') {
            $request->merge([ 'fchnac' => date('Y-m-d',strtotime(str_replace('/', '-', $request['fchnac']))) ]);
        }

        $victima = Victima::findOrFail($id);

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
            'tbltipo_id' => 'Tipo',
            'edad' => 'Edad',
            'hijos' => 'Hijos',
            'tbldepartamento_id' => 'Departamento',
            'tblprovincia_id' => 'Provincia',
            'tbldistrito_id' => 'Distrito',
            'telefono' => 'Teléfono',
            'email' => 'Correo Electrónico',
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
            'nro_doc' => 'required|unique:victima,nro_doc,'.$victima->nro_doc.',nro_doc',
            'tbltipo_id' => 'required|exists:tbltipo,id',
            'edad' => 'required|numeric',
            'hijos' => 'required|numeric',
            'tbldepartamento_id' => 'required|exists:tbldepartamento,id',
            'tblprovincia_id' => 'required|exists:tblprovincia,id',
            'tbldistrito_id' => 'required|exists:tbldistrito,id',
            'telefono' => 'nullable|string',
            'email' => 'nullable|email|string',
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
            'tbltipo_id' => $request['tbltipo_id'],
            'edad' => $request['edad'],
            'hijos' => $request['hijos'],
            'tbldepartamento_id' => $request['tbldepartamento_id'],
            'tblprovincia_id' => $request['tblprovincia_id'],
            'tbldistrito_id' => $request['tbldistrito_id'],
            'telefono' => $request['telefono'],
            'email' => $request['email'],
            'direccion' => $request['direccion'],
        ];

        // return response()->json( $input , 200);

        $validator = Validator::make($input, $rules, $messages);

        $validator->setAttributeNames($attributes); 

        if ($validator->fails()){
            return response()->json([
                'fail' => true,
                'type' => 'update',
                'errors' => $validator->errors()
            ]);
        }else{

            $input = parent::array_push_assoc($input, 'nombre', $request['nombre1'].' '.$request['nombre2'].' '.$request['nombre3']);
            $input = parent::array_push_assoc($input, 'apellido', $request['apellido1'].' '.$request['apellido2']);

            Victima::where('id', $id)->update($input);
            
            return response()->json([
                'tab' => 'victima_modal',
                'type' => 'update',
                'info' => 'Victima actualizada.',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Victima  $victima
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $victima = Victima::find($id)->delete();

        // return back()->with('info', 'Victima eliminada correctamente.');

        return response()->json([
            'type' => 'destroy',
            'info' => 'Victima eliminada correctamente.',
        ]);
    }
}
