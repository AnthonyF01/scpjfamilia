<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Tblmedida;

class TblmedidaController extends Controller
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

            // $tblmedidas = Tblmedida::paginate(10);
            // return view('tablas.tblmedida.index', compact('tblmedidas'));

        // Nueva: Search - Sort 
        
        $tblmedidas = new Tblmedida();


        $request->session()->put('search', $request
            ->has('search') ? $request->get('search') : ($request->session()
            ->has('search') ? $request->session()->get('search') : ''));


        $fillable = $tblmedidas->getFields();

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


        $tblmedidas = $tblmedidas
            ->where('nombre', 'like', '%' . $request->session()->get('search') . '%')
            ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
            // ->orderBy('nombre', $request->session()->get('sort'))
            // ->orderBy('email', $request->session()->get('sort'))
            ->paginate($request->session()->get('show'));

        // dd($request->session()->get('field'));
        // dd($request->session()->get('sort'));
        // dd($request->session()->get('search'));

        if ($request->ajax()) {
          return view('tablas.tblmedida.ajax', compact('tblmedidas'));  
        } else {
          return view('tablas.tblmedida.index', compact('tblmedidas'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() /* no usada */
    {

        return view('tablas.tblmedida.partials.form_ajax');

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
            'mimes'    => ':attribute debe ser un archivo de denuncia: valores.',
            'unique'   => ':attribute ya ha sido registrado.',
        );

        $attributes = array(
            'nombre' => 'Nombre',
        );

        $rules = [
            'nombre' => 'required|string|unique:tblmedida',
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

            $tblmedida = Tblmedida::create($input);

            return response()->json([
                'type' => 'store',
                'info' => 'Tipo medida registrada.',
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tblmedida  $tblmedida
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tblmedida = Tblmedida::findOrFail($id);

        // return view('tablas.tblmedida.show', compact('tblmedida'));

        return view('tablas.tblmedida.detail', compact('tblmedida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tblmedida  $tblmedida
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        
        $tblmedida = Tblmedida::findOrFail($id);

        return view('tablas.tblmedida.partials.form_ajax', compact('tblmedida'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tblmedida  $tblmedida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // No se pueden usar accessors o mutators en query builders, solo en elquent

        $tblmedida = Tblmedida::findOrFail($id);

        $messages = array(
            'required' => ':attribute es obligatorio.',
            'email'    => ':attribute debe ser un e-mail válido.',
            'min'      => ':attribute debe tener :min caracteres como mínimo.',
            'max'      => ':attribute debe tener :max caracteres como máximo.',
            'numeric'  => ':attribute debe ser numérico.',
            'image'    => ':attribute debe ser un archivo imagen.',
            'mimes'    => ':attribute debe ser un archivo de denuncia: valores.',
            'unique'   => ':attribute ya ha sido registrado.',
        );

        $attributes = array(
            'nombre' => 'Nombre',
        );

        $rules = [
            'nombre' => 'required|string|unique:tblmedida,nombre,'.$tblmedida->nombre.',nombre',
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

            Tblmedida::where('id', $id)->update($input);

            return response()->json([
                'type' => 'update',
                'info' => 'Tipo medida actualizada.',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tblmedida  $tblmedida
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tblmedida = Tblmedida::find($id)->delete();

        return response()->json([
            'type' => 'destroy',
            'info' => 'Tipo medida eliminado correctamente.',
        ]);
    }
}
