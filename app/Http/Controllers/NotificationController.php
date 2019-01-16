<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) 
    {
        $notifications = DB::table('notification')
                         ->join('users as u','u.id','=','notification.user_id')
                         ->leftJoin('users as u1','u1.id','=','notification.worker_id')
                         ->leftJoin('role_user','role_user.user_id','=','u1.id')
                         ->leftJoin('roles','roles.id','=','role_user.role_id')
                         ->select('notification.*','u.nombre','u.fono','u.direccion','roles.name')
                         ->where('notification.tbldepartamento_id','=',$request->user()->tbldepartamento_id)
                         // ->where('state','=',0)
                         ->orderBy('created_at','desc') 
                         ->get();
        $ubicacion = Auth::user()->tbldepartamento_id;
        return view('notification.index',compact('notifications','ubicacion'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
