<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Auth;
use App\Models\Documento;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $documentos = new Documento();

        $request->session()->put('search', $request
            ->has('search') ? $request->get('search') : ($request->session()
            ->has('search') ? $request->session()->get('search') : ''));

        $fillable = $documentos->getFields();

        $request->session()->put('field', $request
            ->has('field') ? $request->get('field') : ( $request->session()
            ->has('field') ? ( array_search($request->session()->get('field'), $fillable) ? 
                $request->session()->get('field') : 'numero' ) : 'numero') );

        $request->session()->put('sort', $request
            ->has('sort') ? $request->get('sort') : ($request->session()
            ->has('sort') ? $request->session()->get('sort') : 'asc'));

        $request->session()->put('show', $request
            ->has('show') ? $request->get('show') : ($request->session()
            ->has('show') ? ( is_numeric($request->session()->get('show')) ? 
              $request->session()->get('show') : '10' ) : '10'));

        $roles = Auth::user()->getRoles();

        // dd($roles);

        if (Auth::user()->getRoles()[0] == 'admin') {
            $documentos = $documentos
                ->where('numero', 'like', '%' . $request->session()->get('search') . '%')
                ->orwhere('tipo', 'like', '%' . $request->session()->get('search') . '%');
        }else{
            $documentos = $documentos
                ->where('tblmodulo_id', '=', Auth::user()->tblmodulo_id )
                ->where(function ($query) use ($request) {
                    $query->where('numero', 'like', '%' . $request->session()->get('search') . '%')
                          ->orwhere('tipo', 'like', '%' . $request->session()->get('search') . '%');
                });
        }

        // dd($documentos->toSql(), $documentos->getBindings());

        $documentos = $documentos
            ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
            ->paginate($request->session()->get('show'));

        if ($request->ajax()) {
          return view('denuncia.denuncia.documento.ajax', compact('documentos','roles'));  
        } else {
          return view('denuncia.denuncia.documento.index', compact('documentos','roles'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('denuncia.denuncia.documento.partials.form_ajax');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // convertir de dd/mm/yyyy -> yyyy-mm-dd (mysql)
        if ($request['fecha'] != '') {
            $request->merge([ 'fecha' => date('Y-m-d',strtotime(str_replace('/', '-', $request['fecha']))) ]);
        }

        $messages = array(
            'required' => ':attribute es obligatorio.',
            'unique'   => ':attribute ya está registrado.',
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
            'numero' => 'Nro. Documento',
            'fecha' => 'Fecha del Documento',
            'tipo' => 'Tipo Documento',
            'file' => 'Archivo',
        );

        $rules = [
            'numero' => 'required|string|unique:documento,numero',
            'fecha' => 'required|date',
            'tipo' => 'required|string',
            'file' => 'required|mimes:pdf|max:2048'
        ];

        $input = [
            'numero' => $request['numero'],
            'fecha' => $request['fecha'],
            'tipo' => $request['tipo'],
            'file' => $request['file'],
        ];

        // Log::info('documento: ', ['request' => $request->all(), 'input' => $input]);

        $validator = Validator::make($input, $rules, $messages);

        $validator->setAttributeNames($attributes);

        if ($validator->fails()){
            return response()->json([
              'fail' => true,
              'errors' => $validator->errors()
            ]);
        }else{

            if ($request->file('file') && $request->hasFile('file')) {
                $filename = $request->file('file')->getClientOriginalName();
                $filetype = $request->file('file')->getClientOriginalExtension();
                $public_path = public_path();
                $public_path = str_replace("\\", "/", $public_path);
                $path = $public_path.'/img/documento/';
                if (!file_exists($path)) { // crea el directorio si no existe
                    mkdir($path, 0777, true); // todos los permisos
                }

                // $file_name = 'file_registro_'.$this->generarCodigo(8).time().'.'.$filetype;
                $numero = parent::clearString($input['numero']);
                $file_name = 'file_digitalizado_'.$numero.'_'.time().'.'.$filetype;

                $request->file('file')->move($path,$file_name);

                $fakepath = '/img/documento/'.$file_name;
                $input['file'] = $fakepath;
            }

            $input['user_id'] = $request->user()->id; 
            $input['tblmodulo_id'] = $request->user()->tblmodulo_id; 

            $documento = Documento::create($input);

            return response()->json([
                'type' => 'store',
                'info' => 'Documento registrado.',
            ]);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $documento = Documento::findOrFail($id);
        
        return view('denuncia.denuncia.documento.partials.form_ajax', compact('documento'));

    }

    public function verificar($id)
    {
        $documento = Documento::findOrFail($id);
        
        $input = [
            'verificado' => 1,
        ];

        Documento::where('id',$id)->update($input);

        return response()->json([
            'type' => 'update',
            'info' => 'Documento verificado.',
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $documento = Documento::find($id);

        // convertir de dd/mm/yyyy -> yyyy-mm-dd (mysql)
        if ($request['fecha'] != '') {
            $request->merge([ 'fecha' => date('Y-m-d',strtotime(str_replace('/', '-', $request['fecha']))) ]);
        }

        $messages = array(
            'required' => ':attribute es obligatorio.',
            'unique'   => ':attribute ya está registrado.',
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
            'numero' => 'Nro. Documento',
            'fecha' => 'Fecha del Documento',
            'tipo' => 'Tipo Documento',
            'file' => 'Archivo',
        );

        $rules = [
            'numero' => 'required|string|unique:documento,numero,'.$documento->numero.',numero',
            'fecha' => 'required|date',
            'tipo' => 'required|string',
        ];

        $input = [
            'numero' => $request['numero'],
            'fecha' => $request['fecha'],
            'tipo' => $request['tipo'],
        ];

        if (!isset($documento->file) && empty($documento->file) && isset(explode("documento/",$documento->file)[1])) {
            // no existe registro de archivo: se valida el archivo
            $rules['file'] = 'required|mimes:pdf|max:2048';
            $input['file'] = $request['file'];
        }else{
            if ($request->file('file') && $request->hasFile('file')) {
                $rules['file'] = 'required|mimes:pdf|max:2048';
                $input['file'] = $request['file'];
            }
        }

        // Log::info('documento: ', ['request' => $request->all(), 'input' => $input]);

        $validator = Validator::make($input, $rules, $messages);

        $validator->setAttributeNames($attributes);

        if ($validator->fails()){
            return response()->json([
              'fail' => true,
              'errors' => $validator->errors()
            ]);
        }else{

            if ($request->file('file') && $request->hasFile('file')) {
                $filename = $request->file('file')->getClientOriginalName();
                $filetype = $request->file('file')->getClientOriginalExtension();
                $public_path = public_path();
                $public_path = str_replace("\\", "/", $public_path);
                $path = $public_path.'/img/documento/';
                if (!file_exists($path)) { // crea el directorio si no existe
                    mkdir($path, 0777, true); // todos los permisos
                }
                // elimina el arhivo si existe
                if (file_exists($public_path.$documento->file) && isset($documento->file) && !empty($documento->file)) {
                    unlink($public_path.$documento->file);
                }

                // $filenameall = str_replace('/', '-', $request['doc_number'])."_".time().".".$filetype;
                $numero = parent::clearString($input['numero']);
                $file_name = 'file_digitalizado_'.$numero.'_'.time().'.'.$filetype;

                // $request->file('file')->move($path,$filenameall);
                $request->file('file')->move($path,$file_name);

                $fakepath = '/img/documento/'.$file_name;
                $input['file'] = $fakepath;

            }

            // $input['user_id'] = $request->user()->id; 
            // $input['tblmodulo_id'] = $request->user()->tblmodulo_id; 

            Documento::where('id',$id)->update($input);

            return response()->json([
                'type' => 'update',
                'info' => 'Documento actualizado.',
            ]);

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
