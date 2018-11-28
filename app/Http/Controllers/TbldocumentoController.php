<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Tbldocumento;

class TbldocumentoController extends Controller
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

            // $tbldocumentos = Tbldocumento::paginate(10);
            // return view('tablas.tbldocumento.index', compact('tbldocumentos'));

        // Nueva: Search - Sort 
        
        $tbldocumentos = new Tbldocumento();


        $request->session()->put('search', $request
            ->has('search') ? $request->get('search') : ($request->session()
            ->has('search') ? $request->session()->get('search') : ''));


        $fillable = $tbldocumentos->getFields();

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


        $tbldocumentos = $tbldocumentos
            ->where('nombre', 'like', '%' . $request->session()->get('search') . '%')
            ->orwhere('sigla', 'like', '%' . $request->session()->get('search') . '%')
            ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
            // ->orderBy('nombre', $request->session()->get('sort'))
            // ->orderBy('email', $request->session()->get('sort'))
            ->paginate($request->session()->get('show'));

        // dd($request->session()->get('field'));
        // dd($request->session()->get('sort'));
        // dd($request->session()->get('search'));

        if ($request->ajax()) {
          return view('tablas.tbldocumento.ajax', compact('tbldocumentos'));  
        } else {
          return view('tablas.tbldocumento.index', compact('tbldocumentos'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() /* no usada */
    {

        return view('tablas.tbldocumento.partials.form_ajax');

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
            'sigla' => 'Sigla',
        );

        $rules = [
            'nombre' => 'required|string|unique:tbldocumento',
            'sigla' => 'required|string|unique:tbldocumento',
        ];
        
        $input = [
            'nombre' => $request['nombre'],
            'sigla' => $request['sigla'],
        ];

        $validator = Validator::make($input, $rules, $messages);

        $validator->setAttributeNames($attributes);

        if ($validator->fails()){
            return response()->json([
              'fail' => true,
              'errors' => $validator->errors()
            ]);
        }else{

            $tbldocumento = Tbldocumento::create($input);

            return response()->json([
                'type' => 'store',
                'info' => 'Documento registrado.',
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tbldocumento  $tbldocumento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbldocumento = Tbldocumento::findOrFail($id);

        // return view('tablas.tbldocumento.show', compact('tbldocumento'));

        return view('tablas.tbldocumento.detail', compact('tbldocumento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tbldocumento  $tbldocumento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        
        $tbldocumento = Tbldocumento::findOrFail($id);

        return view('tablas.tbldocumento.partials.form_ajax', compact('tbldocumento'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tbldocumento  $tbldocumento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // No se pueden usar accessors o mutators en query builders, solo en elquent

        $tbldocumento = Tbldocumento::findOrFail($id);

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
            'sigla' => 'Sigla',
        );

        $rules = [
            'nombre' => 'required|string|unique:tbldocumento,nombre,'.$tbldocumento->nombre.',nombre',
            'sigla' => 'required|string|unique:tbldocumento,sigla,'.$tbldocumento->sigla.',sigla',
        ];
        
        $input = [
            'nombre' => $request['nombre'],
            'sigla' => $request['sigla'],
        ];

        $validator = Validator::make($input, $rules, $messages);

        $validator->setAttributeNames($attributes); 

        if ($validator->fails()){
            return response()->json([
                'fail' => true,
                'errors' => $validator->errors()
            ]);
        }else{

            Tbldocumento::where('id', $id)->update($input);

            return response()->json([
                'type' => 'update',
                'info' => 'Documento actualizado.',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tbldocumento  $tbldocumento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tbldocumento = Tbldocumento::find($id)->delete();

        return response()->json([
            'type' => 'destroy',
            'info' => 'Documento eliminado correctamente.',
        ]);
    }
}
