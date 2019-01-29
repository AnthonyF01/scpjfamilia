<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Models\Tbldepartamento;
use App\Models\Tblmodulo;
use Caffeinated\Shinobi\Models\Role;

class UserController extends Controller
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

            // $users = User::paginate(10);
            // return view('admin.users.index', compact('users'));

        // Nueva: Search - Sort 
        
        $users = new User();


        $request->session()->put('search', $request
            ->has('search') ? $request->get('search') : ($request->session()
            ->has('search') ? $request->session()->get('search') : ''));


        $fillable = $users->getFields();

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


        // listara solo los usuarios con acceso al sistema web
        $users = $users
            ->where('acceso', '=', 1)
            ->where(function ($query) use ($request) {
                $query->where('nombre', 'like', '%' . $request->session()->get('search') . '%')
                      ->orwhere('name', 'like', '%' . $request->session()->get('search') . '%')
                      ->orwhere('email', 'like', '%' . $request->session()->get('search') . '%')
                      ->orwhere('fono', 'like', '%' . $request->session()->get('search') . '%');
            })
            ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
            // ->orderBy('nombre', $request->session()->get('sort'))
            // ->orderBy('email', $request->session()->get('sort'))
            ->paginate($request->session()->get('show'));

        // dd($users);

        if ($request->ajax()) {
          return view('admin.users.ajax', compact('users'));  
        } else {
          return view('admin.users.index', compact('users'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() /* no usado */
    {
        // Forma anterior
        
            // return view('admin.users.create');

        // Con Ajax

        /*$roles = Role::get();

        return view('admin.users.partials.form_ajax', compact('roles'));*/

        $user = [];
        $roles = Role::get();
        $departamentos = Tbldepartamento::all()->pluck('nombre', 'id');
        $modulos = Tblmodulo::all()->pluck('nombre', 'id');

        return view('admin.users.partials.form_ajax', compact('user', 'roles', 'departamentos', 'modulos'));

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

        // convertir de dd/mm/yyyy -> yyyy-mm-dd (mysql)
        if ($request['fchnac'] != '') {
            $request->merge([ 'fchnac' => date('Y-m-d',strtotime(str_replace('/', '-', $request['fchnac']))) ]);
        }

        $messages = array(
            'required' => ':attribute es obligatorio.',
            'email'    => ':attribute debe ser un e-mail válido.',
            'min'      => ':attribute debe tener :min caracteres como mínimo.',
            'max'      => ':attribute debe tener :max caracteres como máximo.',
            'unique'   => ':attribute ya ha sido registrado.',
            'numeric'  => ':attribute debe ser numérico.',
            'image'    => ':attribute debe ser un archivo imagen.',
            'mimes'    => ':attribute debe ser un archivo de tipo: valores.',
        );

        $attributes = array(
            'imagen' => 'Imagen',
            'nombre' => 'Nombre',
            'direccion' => 'Dirección',
            'fono' => 'Teléfono',
            'dni' => 'DNI',
            'fchnac' => 'Fecha de Nacimiento',
            'tbldepartamento_id' => 'Departamento',
            'tblmodulo_id' => 'Modulo',
            'name' => 'Usuario',
            'email' => 'Email',
            'password' => 'Contraseña',
        );

        $rules = [
            'imagen' => 'image|mimes:jpeg,png,jpg|max:2048',
            'nombre' => 'required|string',
            'direccion' => 'required|string',
            'fono' => 'required|string',
            'dni' => 'required|numeric|unique:users',
            'fchnac' => 'required|date',
            'tbldepartamento_id' => 'required|exists:tbldepartamento,id',
            'tblmodulo_id' => 'required|exists:tblmodulo,id',
            'name'     => 'required|string',
            'email'    => 'required|string|email|unique:users',
            'password' => 'required|string',
        ];
        
        $input = [
            // 'imagen' => '',
            'nombre' => $request['nombre'],
            'direccion' => $request['direccion'],
            'fono' => $request['fono'],
            'dni' => $request['dni'],
            'fchnac' => $request['fchnac'],
            'tbldepartamento_id' => $request['tbldepartamento_id'],
            'tblmodulo_id' => $request['tblmodulo_id'],
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
        ];

        $validator = Validator::make($input, $rules, $messages);

        $validator->setAttributeNames($attributes);

        if ($validator->fails()){
            return response()->json([
              'fail' => true,
              'errors' => $validator->errors()
            ]);
        }else{

            $input['password'] = bcrypt($request['password']);

            if ($request->file('imagen') && $request->hasFile('imagen')) {
                $filename = $request->file('imagen')->getClientOriginalName();
                $filetype = $request->file('imagen')->getClientOriginalExtension();
                $public_path = public_path();
                $public_path = str_replace("\\", "/", $public_path);
                $path = $public_path.'/img/users/';
                if (!file_exists($path)) { // crea el directorio si no existe
                    mkdir($path, 0777, true); // todos los permisos
                }

                // $filenameall = str_replace('/', '-', $request['doc_number'])."_".time().".".$filetype;
                $file_name = 'file_user_'.$this->generarCodigo(8).time().'.'.$filetype;

                // $request->file('imagen')->move($path,$filenameall);
                $request->file('imagen')->move($path,$file_name);

                $fakepath = '/img/users/'.$file_name;
                $input['imagen'] = $fakepath;
            }

            $user = User::create($input);

            // el metodo sync solo sirve para tablas relacionadas muchos a muchos
            $user->roles()->sync($request->get('roles'));

            return response()->json([
                'type' => 'store',
                'info' => 'Usuario registrado.',
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        // return view('admin.users.show', compact('user'));

        return view('admin.users.detail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        // Forma anterior

            // $user = User::findOrFail($id);

            // return view('admin.users.edit', compact('user'));

        // Con Ajax

        $user = User::findOrFail($id);
        $roles = Role::get();
        $departamentos = Tbldepartamento::all()->pluck('nombre', 'id');
        $modulos = Tblmodulo::all()->pluck('nombre', 'id');

        return view('admin.users.partials.form_ajax', compact('user', 'roles', 'departamentos', 'modulos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // No se pueden usar accessors o mutators en query builders, solo en elquent

        // convertir de dd/mm/yyyy -> yyyy-mm-dd (mysql)
        if ($request['fchnac'] != '') {
            $request->merge([ 'fchnac' => date('Y-m-d',strtotime(str_replace('/', '-', $request['fchnac']))) ]);
        }

        $user = User::findOrFail($id);

        $messages = array(
            'required' => ':attribute es obligatorio.',
            'email'    => ':attribute debe ser un e-mail válido.',
            'min'      => ':attribute debe tener :min caracteres como mínimo.',
            'max'      => ':attribute debe tener :max caracteres como máximo.',
            'numeric'  => ':attribute debe ser numérico.',
        );

        $attributes = array(
            'nombre' => 'Nombre',
            'direccion' => 'Dirección',
            'fono' => 'Teléfono',
            'dni' => 'DNI',
            'fchnac' => 'Fecha de Nacimiento',
        );

        $rules = [
            'nombre' => 'required|string',
            'direccion' => 'required|string',
            'fono' => 'required|string',
            'dni' => 'required|numeric|unique:users,dni,'.$user->dni.',dni',
            'fchnac' => 'required|date',
        ];
        
        $input = [
            'nombre' => $request['nombre'],
            'direccion' => $request['direccion'],
            'fono' => $request['fono'],
            'dni' => $request['dni'],
            'fchnac' => $request['fchnac'],
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

            if ($request->file('imagen') && $request->hasFile('imagen')) {
                $filename = $request->file('imagen')->getClientOriginalName();
                $filetype = $request->file('imagen')->getClientOriginalExtension();
                $public_path = public_path();
                $public_path = str_replace("\\", "/", $public_path);
                $path = $public_path.'/img/users/';
                if (!file_exists($path)) { // crea el directorio si no existe
                    mkdir($path, 0777, true); // todos los permisos
                }
                // elimina el arhivo si existe
                if (file_exists($public_path.$user->imagen) && isset($user->imagen) && !empty($user->imagen)) {
                    unlink($public_path.$user->imagen);
                }

                // $filenameall = str_replace('/', '-', $request['doc_number'])."_".time().".".$filetype;
                $file_name = 'file_user_'.$this->generarCodigo(8).time().'.'.$filetype;

                // $request->file('imagen')->move($path,$filenameall);
                $request->file('imagen')->move($path,$file_name);

                $fakepath = '/img/users/'.$file_name;
                $input['imagen'] = $fakepath;
            }

            User::where('id', $id)->update($input);
            
            // el metodo sync solo sirve para tablas relacionadas muchos a muchos
            $user->roles()->sync($request->get('roles'));

            return response()->json([
                'type' => 'update',
                'info' => 'Usuario actualizado.',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        // return back()->with('info', 'Usuario eliminada correctamente.');

        return response()->json([
            'type' => 'destroy',
            'info' => 'Usuario eliminado correctamente.',
        ]);
    }
}
