<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Permiso;

class PermisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $permiso=Permiso::with('permisos')->orderBy('id','asc')->first();
        // dd($permiso);
        if ($request->ajax()) {
          return view('admin.permisos.ajax', compact('permiso'));
        } else {
          return view('admin.permisos.index', compact('permiso'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $padre=$request->padre;
        $depende_de=$request->depende_de;
        return view('admin.permisos.partials.form_ajax',compact('padre','depende_de'));
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
            'depende_de'    => 'required',
            'nivel'         => 'required',
            'name'          => 'required|string',
            'slug'          => 'required|string',
            'description'   =>'nullable|string',
        ];

        $input = [
            'depende_de'    => $request['depende_de'],
            'nivel'         => $request['nivel'],
            'name'          => $request['name'],
            'slug'          => $request['slug'],
            'description'   => $request['description']
        ];

        $validator = Validator::make($input, $rules);

        if ($validator->fails()){
            return response()->json([
              'fail'    => true,
              'errors'  => $validator->errors()
            ]);
        }else{
            Permiso::create($input);
            return response()->json([
                'type' => 'store',
                'info' => 'Permiso guardado con éxito.',
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
    public function edit(Request $request,$id)
    {
        $permiso = Permiso::with('padre')->with('permisos')->findOrFail($id);
        // dd($permiso);
        $padre=$request->padre;
        $depende_de=$request->depende_de;
        return view('admin.permisos.partials.form_ajax', compact('permiso', 'padre','depende_de'));
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
        // $role = Permiso::findOrFail($id);

        $rules = [
            'depende_de'    => 'required',
            'nivel'         => 'required',
            'name'          => 'required|string',
            'slug'          => 'required|string',
            'description'   => 'nullable|string',
        ];

        $input = [
            'depende_de'    => $request['depende_de'],
            'nivel'         => $request['nivel'],
            'name'          => $request['name'],
            'slug'          => $request['slug'],
            'description'   => $request['description']
        ];

        $validator = Validator::make($input, $rules);

        if ($validator->fails()){
            return response()->json([
                'fail'   => true,
                'errors' => $validator->errors()
            ]);
        }else{
            Permiso::where('id', $id)->update($input);
            return response()->json([
                'type' => 'update',
                'info' => 'Permiso actualizado con éxito.',
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
        $role = Permiso::find($id)->delete();
        return response()->json([
            'type' => 'destroy',
            'info' => 'Permiso eliminado correctamente.',
        ]);
    }
}
