<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Victima;
use App\Models\Tbldepartamento;
use App\Models\Tblprovincia;
use App\Models\Tbldistrito;
use App\Models\Tbldocumento;
use App\Models\Tbltipo;
use App\Models\Tblparentesco;
use App\Models\Tblviolencia;
use App\Models\Tblcomisaria;


class FormdenunciasController extends Controller
{
    //Listar tipo de documento
    public function index(Request $request)
    {
    	$departamentos = Tbldepartamento::all()->pluck('nombre', 'id');
        $provincias = Tblprovincia::all()->pluck('nombre', 'id');
        $distritos = Tbldistrito::all()->pluck('nombre', 'id');
        $documentos = Tbldocumento::orderBy('nombre','asc')->pluck('nombre', 'id');
        $tipos = Tbltipo::all()->pluck('nombre', 'id');
        $parentescos = Tblparentesco::orderBy('nombre')->pluck('nombre', 'id');
        $violencias = Tblviolencia::orderBy('nombre','asc')->whereNull('deleted_at')->pluck('nombre', 'id');
        $comisariaform = Tblcomisaria::orderBy('nombre','asc')->whereNull('deleted_at')->pluck('nombre', 'id');
        return view('vendor/adminlte/auth/formulario', compact('departamentos', 'provincias', 'documentos','distritos', 'tipos','parentescos','violencias','comisariaform'));
    }

    public function getProvincias($id){
    	$tblprovincias = DB::table("tblprovincias")->where("tbldepartamento_id",$id)->pluck("name","id");
        return json_encode($tblprovincias);   		
    }

////////////////////store formulario denuncias

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
            'nombre1_vic' => 'Primer Nombre',
            'nombre2_vic' => 'Segundo Nombre',
            'apellido1_vic' => 'Apellido Paterno',
            'apellido2_vic' => 'Apellido Materno',
            'tbldocumento_id_vic' => 'Tipo de Documento',
            'nro_doc_vic' => 'Numero de Documento',
            'tbltipo_id_vic' => 'Tipo',
            'edad_vic' => 'Edad',
            'hijos_vic' => 'Hijos',
            'tbldepartamento_id_vic' => 'Departamento',
            'tblprovincia_id_vic' => 'Provincia',
            'tbldistrito_id_vic' => 'Distrito',
            'direccion_vic' => 'Dirección',
            'telefono_vic' => 'Teléfono',
            'email_vic' => 'Correo Electrónico',

            'nombre1_agre' => 'Primer Nombre',
            'nombre2_agre' => 'Segundo Nombre',
            'apellido1_agre' => 'Apellido Paterno',
            'apellido2_agre' => 'Apellido Materno',
            'tbldocumento_id_agre' => 'Tipo de Documento',
            'nro_doc_agre' => 'Numero de Documento',
            'sexo_agre' => 'Sexo',
            'tbldepartamento_id_agre' => 'Departamento',
            'tblprovincia_id_agre' => 'Provincia',
            'tbldistrito_id_agre' => 'Distrito',
            'telefono_agre' => 'Teléfono',
            'email_agre' => 'Correo Electrónico',
            'direccion_agre' => 'Dirección',
            'tblparentesco_id' => 'Parentesco',
            'tblviolencia_id' => 'Tipo de Violencia',
            'comisaria_id' => 'Comisaria',
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

            'nombre1' => 'required|string',
            'nombre2' => 'nullable|string',
            'apellido1' => 'required|string',
            'apellido2' => 'required|string',
            'tbldocumento_id' => 'required|exists:tbldocumento,id',
            'nro_doc' => 'required|unique:agresor',
            'sexo' => 'required|string',
            'tbldepartamento_id' => 'required|exists:tbldepartamento,id',
            'tblprovincia_id' => 'required|exists:tblprovincia,id',
            'tbldistrito_id' => 'required|exists:tbldistrito,id',
            'telefono' => 'nullable|string',
            'email' => 'nullable|email|string',
            'direccion' => 'nullable|string',
            'tbldistrito_id' => 'required|exists:tblparentesco,id',
            'tblviolencia_id' => 'required|exists:tblviolencia,id',
            'comisaria_id' => 'required|exists:comisaria,id',
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


////////////////    

////////////////index - administrador - temporales

       public function formularioweb(Request $request)
    {

        // Nueva: Search - Sort 
        
        $formularioweb = new TblformularioWeb();

        $request->session()->put('search', $request
            ->has('search') ? $request->get('search') : ($request->session()
            ->has('search') ? $request->session()->get('search') : ''));

        $fillable = $formularioweb->getFields();

        $request->session()->put('field', $request
            ->has('field') ? $request->get('field') : ( $request->session()
            ->has('field') ? ( array_search($request->session()->get('field'), $fillable) ? 
                $request->session()->get('field') : 'nombre1' ) : 'nombre1') );

        $request->session()->put('sort', $request
            ->has('sort') ? $request->get('sort') : ($request->session()
            ->has('sort') ? $request->session()->get('sort') : 'asc'));

        $request->session()->put('show', $request
            ->has('show') ? $request->get('show') : ($request->session()
            ->has('show') ? ( is_numeric($request->session()->get('show')) ? 
              $request->session()->get('show') : '10' ) : '10'));

        $agresores = $agresores
            ->where('nombre1', 'like', '%' . $request->session()->get('search') . '%')
            ->orwhere('apellido1', 'like', '%' . $request->session()->get('search') . '%')
            ->orwhere('nro_doc_vic', 'like', '%' . $request->session()->get('search') . '%')
            ->orwhere('sexo', 'like', '%' . $request->session()->get('search') . '%')
            ->orwhere('tbldepartamento_id_vic', '=', ( gettype( Tbldepartamento::where('nombre','=',$request->session()->get('search'))->first() ) != 'NULL' ) ? Tbldepartamento::where('nombre','=',$request->session()->get('search'))->first()->id : '' )
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

///////////    

}
