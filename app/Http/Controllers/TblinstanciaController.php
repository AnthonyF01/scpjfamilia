<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Models\Tblinstancia;
use App\Models\Tbldepartamento;
use App\Models\Tblmodulo;
use App\Models\Tblcomisaria;

class TblinstanciaController extends Controller
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

            // $tblinstancias = Tblinstancia::paginate(10);
            // return view('tablas.tblinstancia.index', compact('tblinstancias'));

        // Nueva: Search - Sort 
        
        $tblinstancias = new Tblinstancia();


        $request->session()->put('search', $request
            ->has('search') ? $request->get('search') : ($request->session()
            ->has('search') ? $request->session()->get('search') : ''));


        $fillable = $tblinstancias->getFields();

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
            $tblinstancias = $tblinstancias->where('nombre', 'like', '%' . $request->session()->get('search') . '%')
                                           ->where('tblmodulo_id', '=', Auth::user()->tblmodulo_id)
                                           ->where('tbldepartamento_id', '=', Auth::user()->tbldepartamento_id);
        }else{
            $tblinstancias = $tblinstancias
                ->where('nombre', 'like', '%' . $request->session()->get('search') . '%')
                ->orwhere('sigla', 'like', '%' . $request->session()->get('search') . '%')
                ->orwhere('tblmodulo_id', '=', ( gettype( Tblmodulo::where('nombre','=',$request->session()->get('search'))->first() ) != 'NULL' ) ? Tblmodulo::where('nombre','=',$request->session()->get('search'))->first()->id : '' )
                ->orwhere('tbldepartamento_id', '=', ( gettype( Tbldepartamento::where('nombre','=',$request->session()->get('search'))->first() ) != 'NULL' ) ? Tbldepartamento::where('nombre','=',$request->session()->get('search'))->first()->id : '' );
        }

        $tblinstancias = $tblinstancias
            ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
            // ->orderBy('nombre', $request->session()->get('sort'))
            // ->orderBy('email', $request->session()->get('sort'))
            ->paginate($request->session()->get('show'));

        // dd($request->session()->get('field'));
        // dd($request->session()->get('sort'));
        // dd($request->session()->get('search'));

        if ($request->ajax()) {
          return view('tablas.tblinstancia.ajax', compact('tblinstancias'));  
        } else {
          return view('tablas.tblinstancia.index', compact('tblinstancias'));
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
            $modulos = Tblmodulo::where('id','=',Auth::user()->tblmodulo_id)->pluck('nombre', 'id');
            $departamentos = Tbldepartamento::where('id','=',Auth::user()->tbldepartamento_id)->pluck('nombre', 'id');
        }

        return view('tablas.tblinstancia.partials.form_ajax', compact('departamentos', 'modulos'));

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
            'sigla' => 'Sigla',
            'tipo' => 'Tipo',
            'estadistica' => 'Estadística',
            'tbldepartamento_id' => 'Departamento',
            'tblmodulo_id' => 'Modulo',
        );

        $rules = [
            'nombre' => 'required|string',
            'sigla' => 'required|string|unique:tblinstancia',
            'tipo' => 'required|string',
            'estadistica' => 'required',
            'tbldepartamento_id' => 'required|exists:tbldepartamento,id',
            'tblmodulo_id' => 'nullable|exists:tblmodulo,id',
        ];
        
        $input = [
            'nombre' => $request['nombre'],
            'sigla' => $request['sigla'],
            'tipo' => $request['tipo'],
            'estadistica' => $request['estadistica'],
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

            $tblinstancia = Tblinstancia::create($input);

            //store tabla tblcomisaria
            if ($request['tipo']=='MP') {
                $input2 = [
                    'nombre' => $request['nombre'],
                    'sigla' => $request['sigla'],
                    'color' => 'light_blue',
                    'tbldepartamento_id' => $request['tbldepartamento_id'],
                    'tblmodulo_id' => $request['tblmodulo_id'],
                    'tipo_int' => 1,
                ];
                $tblcomisaria=Tblcomisaria::create($input2);
            }

            return response()->json([
                'type' => 'store',
                'info' => 'Instancia registrada.',
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tblinstancia  $tblinstancia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tblinstancia = Tblinstancia::findOrFail($id);

        // return view('tablas.tblinstancia.show', compact('tblinstancia'));

        return view('tablas.tblinstancia.detail', compact('tblinstancia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tblinstancia  $tblinstancia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        
        $tblinstancia = Tblinstancia::findOrFail($id);

        if (Auth::user()->getRoles()[0] == 'admin') {
            $modulos = Tblmodulo::all()->pluck('nombre', 'id');
            $departamentos = Tbldepartamento::all()->pluck('nombre', 'id');
        }
        if (Auth::user()->getRoles()[0] == 'adminmodulo') {
            $modulos = Tblmodulo::where('id','=',Auth::user()->tblmodulo_id)->pluck('nombre', 'id');
            $departamentos = Tbldepartamento::where('id','=',Auth::user()->tbldepartamento_id)->pluck('nombre', 'id');
        }

        return view('tablas.tblinstancia.partials.form_ajax', compact('tblinstancia', 'departamentos', 'modulos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tblinstancia  $tblinstancia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // No se pueden usar accessors o mutators en query builders, solo en elquent

        $tblinstancia = Tblinstancia::findOrFail($id);

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
            'sigla' => 'Sigla',
            'tipo' => 'Tipo',
            'estadistica' => 'Estadística',
            'tbldepartamento_id' => 'Departamento',
            'tblmodulo_id' => 'Modulo',
        );

        $rules = [
            'nombre' => 'required|string',
            'sigla' => 'required|string|unique:tblinstancia,sigla,'.$tblinstancia->sigla.',sigla',
            'tipo' => 'required|string',
            'estadistica' => 'required',
            'tbldepartamento_id' => 'required|exists:tbldepartamento,id',
            'tblmodulo_id' => 'nullable|exists:tblmodulo,id',
        ];
        
        $input = [
            'nombre' => $request['nombre'],
            'sigla' => $request['sigla'],
            'tipo' => $request['tipo'],
            'estadistica' => $request['estadistica'],
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

            //update tabla tblcomisaria
            if ($request['tipo']=='MP') {
                $t=Tblinstancia::find($id);
                $sigla=$t->sigla;
                $input2 = [
                    'nombre' => $request['nombre'],
                    'sigla' => $request['sigla'],
                    'color' => 'light_blue',
                    'tbldepartamento_id' => $request['tbldepartamento_id'],
                    'tblmodulo_id' => $request['tblmodulo_id'],
                    'tipo_int' => 1,
                ];
                if ($t->tipo=='MP') {
                    $tblcomisaria=Tblcomisaria::where('nombre', $t->nombre)
                                            ->where('sigla',$t->sigla)
                                            ->where('tipo_int',1)
                                            ->where('tblmodulo_id',$t->tblmodulo_id)
                                            ->update($input2);
                }
                else{
                    $tblcomisaria=Tblcomisaria::create($input2);
                }
            }

            //update tabla tblinstancia
            Tblinstancia::where('id', $id)->update($input);

            return response()->json([
                'type' => 'update',
                'info' => 'Instancia actualizada.',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tblinstancia  $tblinstancia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tblinstancia = Tblinstancia::find($id)->delete();

        return response()->json([
            'type' => 'destroy',
            'info' => 'Instancia eliminada correctamente.',
        ]);
    }
}
