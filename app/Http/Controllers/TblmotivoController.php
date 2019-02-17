<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Tblmotivo;

class TblmotivoController extends Controller
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

            // $tblmotivos = Tblmotivo::paginate(10);
            // return view('tablas.tblmotivo.index', compact('tblmotivos'));

        // Nueva: Search - Sort 
        
        $tblmotivos = new Tblmotivo();


        $request->session()->put('search', $request
            ->has('search') ? $request->get('search') : ($request->session()
            ->has('search') ? $request->session()->get('search') : ''));


        $fillable = $tblmotivos->getFields();

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


        $tblmotivos = $tblmotivos
            ->where('nombre', 'like', '%' . $request->session()->get('search') . '%')
            ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
            // ->orderBy('nombre', $request->session()->get('sort'))
            // ->orderBy('email', $request->session()->get('sort'))
            ->paginate($request->session()->get('show'));

        // dd($request->session()->get('field'));
        // dd($request->session()->get('sort'));
        // dd($request->session()->get('search'));

        if ($request->ajax()) {
          return view('tablas.tblmotivo.ajax', compact('tblmotivos'));  
        } else {
          return view('tablas.tblmotivo.index', compact('tblmotivos'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() /* no usada */
    {

        return view('tablas.tblmotivo.partials.form_ajax');

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
            'unique'   => ':attribute ya ha sido registrado.',
        );

        $attributes = array(
            'nombre' => 'Nombre',
        );

        $rules = [
            'nombre' => 'required|string|unique:tblmotivo',
        ];
        
        $input = [
            'nombre' => $request['nombre'],
        ];

        $validator = Validator::make($input, $rules, $messages);

        $validator->setAttributeNames($attributes);

        if ($validator->fails()){
            return response()->json([
              'fail' => true,
              'errors' => $validator->errors()
            ]);
        }else{

            $tblmotivo = Tblmotivo::create($input);

            return response()->json([
                'type' => 'store',
                'info' => 'Motivo registrado.',
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tblmotivo  $tblmotivo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tblmotivo = Tblmotivo::findOrFail($id);

        // return view('tablas.tblmotivo.show', compact('tblmotivo'));

        return view('tablas.tblmotivo.detail', compact('tblmotivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tblmotivo  $tblmotivo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        
        $tblmotivo = Tblmotivo::findOrFail($id);

        return view('tablas.tblmotivo.partials.form_ajax', compact('tblmotivo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tblmotivo  $tblmotivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // No se pueden usar accessors o mutators en query builders, solo en elquent

        $tblmotivo = Tblmotivo::findOrFail($id);

        $messages = array(
            'required' => ':attribute es obligatorio.',
            'email'    => ':attribute debe ser un e-mail válido.',
            'min'      => ':attribute debe tener :min caracteres como mínimo.',
            'max'      => ':attribute debe tener :max caracteres como máximo.',
            'numeric'  => ':attribute debe ser numérico.',
            'image'    => ':attribute debe ser un archivo imagen.',
            'mimes'    => ':attribute debe ser un archivo de tipo: valores.',
            'unique'   => ':attribute ya ha sido registrado.',
        );

        $attributes = array(
            'nombre' => 'Nombre',
        );

        $rules = [
            'nombre' => 'required|string|unique:tblmotivo,nombre,'.$tblmotivo->nombre.',nombre',
        ];
        
        $input = [
            'nombre' => $request['nombre'],
        ];

        $validator = Validator::make($input, $rules, $messages);

        $validator->setAttributeNames($attributes); 

        if ($validator->fails()){
            return response()->json([
                'fail' => true,
                'errors' => $validator->errors()
            ]);
        }else{

            Tblmotivo::where('id', $id)->update($input);

            return response()->json([
                'type' => 'update',
                'info' => 'Motivo actualizado.',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tblmotivo  $tblmotivo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tblmotivo = Tblmotivo::find($id)->delete();

        return response()->json([
            'type' => 'destroy',
            'info' => 'Motivo eliminado correctamente.',
        ]);
    }
}
