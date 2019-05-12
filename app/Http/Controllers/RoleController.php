<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use App\Models\Role as RoleApp;
use App\Models\Permiso;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Forma anterior

            // $roles = Role::paginate(10);
            // return view('admin.roles.index', compact('roles'));

        // Nueva: Search - Sort
        $roles = new RoleApp();


        $request->session()->put('search', $request
            ->has('search') ? $request->get('search') : ($request->session()
            ->has('search') ? $request->session()->get('search') : ''));


        $fillable = $roles->getFields();

        $request->session()->put('field', $request
            ->has('field') ? $request->get('field') : ( $request->session()
            ->has('field') ? ( array_search($request->session()->get('field'), $fillable) ?
                $request->session()->get('field') : 'name' ) : 'name') );


        $request->session()->put('sort', $request
            ->has('sort') ? $request->get('sort') : ($request->session()
            ->has('sort') ? $request->session()->get('sort') : 'asc'));

        $request->session()->put('show', $request
            ->has('show') ? $request->get('show') : ($request->session()
            ->has('show') ? ( is_numeric($request->session()->get('show')) ?
              $request->session()->get('show') : '10' ) : '10'));


        $roles = $roles
            ->where('name', 'like', '%' . $request->session()->get('search') . '%')
            ->orwhere('description', 'like', '%' . $request->session()->get('search') . '%')
            ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
            // ->orderBy('name', $request->session()->get('sort'))
            // ->orderBy('description', $request->session()->get('sort'))
            ->paginate($request->session()->get('show'));

        if ($request->ajax()) {
          return view('admin.roles.ajax', compact('roles'));
        } else {
          return view('admin.roles.index', compact('roles'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Forma anterior

            // return view('admin.roles.create');

        // Con Ajax

        // $permissions = Permission::get();
        $permiso=Permiso::with('permisos')->orderBy('id','asc')->first();

        return view('admin.roles.partials.form_ajax', compact('permiso'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ];

        $input = [
            'name' => $request['name'],
            'slug' => $request['slug'],
            'description' => $request['description']
        ];

        $validator = Validator::make($input, $rules);

        if ($validator->fails()){
            return response()->json([
              'fail' => true,
              'errors' => $validator->errors()
            ]);
        }else{
            $role = Role::create($input);

            // el metodo sync solo sirve para tablas realcionadas muchos a muchos
            $role->permissions()->sync($request->get('permissions'));

            return response()->json([
                'type' => 'store',
                'info' => 'Rol guardado con éxito.',
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);

        // return view('admin.roles.show', compact('role'));

        return view('admin.roles.detail', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Forma anterior

            // $role = Role::findOrFail($id);

            // return view('admin.roles.edit', compact('role'));

        // Con Ajax

        $role = Role::findOrFail($id);

        // $permissions = Permission::get();
        $permiso=Permiso::with('permisos')->orderBy('id','asc')->first();

        return view('admin.roles.partials.form_ajax', compact('role', 'permiso'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        $rules = [
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ];

        $input = [
            'name' => $request['name'],
            'slug' => $request['slug'],
            'description' => $request['description']
        ];

        $validator = Validator::make($input, $rules);

        if ($validator->fails()){
            return response()->json([
                'fail' => true,
                'errors' => $validator->errors()
            ]);
        }else{
            Role::where('id', $id)->update($input);

            // el metodo sync solo sirve para tablas realcionadas muchos a muchos
            $role->permissions()->sync($request->get('permissions'));

            return response()->json([
                'type' => 'update',
                'info' => 'Rol actualizado con éxito.',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id)->delete();

        // return back()->with('info', 'Categoría eliminada correctamente.');

        return response()->json([
            'type' => 'destroy',
            'info' => 'Rol eliminado correctamente.',
        ]);
    }
}
