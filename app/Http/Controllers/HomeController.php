<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Auth;

use App\User;
use App\Models\Denuncia;


/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::where('acceso','!=',0)->where('tblmodulo_id','=',Auth::user()->tblmodulo_id)->WhereNull('deleted_at')->get()->count();
        $denuncias = Denuncia::whereNotNull('fdenuncia')->whereNotNull('fformalizacion')->whereNotNull('expediente')->where('tblmodulo_id','=',Auth::user()->tblmodulo_id)->whereNull('deleted_at')->get()->count();
        $sqlv = 'SELECT count(*) as total from ( SELECT distinct v.id,v.nombre,v.nro_doc from denuncia d
                join denuncia_victima vd on d.id = vd.denuncia_id
                join victima v on v.id = vd.victima_id
                where d.tblmodulo_id='.Auth::user()->tblmodulo_id.' and d.fdenuncia IS NOT NULL and d.fformalizacion IS NOT NULL and d.expediente IS NOT NULL and d.deleted_at IS NULL
                order by v.id ) as a';
        $victimas = DB::select(DB::raw($sqlv))[0]->total;
        $sqla = 'SELECT count(*) as total from (
                select distinct a.id,a.nombre,a.nro_doc from denuncia d
                join denuncia_agresor ad on d.id = ad.denuncia_id
                join agresor a on a.id = ad.agresor_id
                where d.tblmodulo_id='.Auth::user()->tblmodulo_id.' and d.fdenuncia IS NOT NULL and d.fformalizacion IS NOT NULL and d.expediente IS NOT NULL and d.deleted_at is null
                order by a.id ) as a';
        $agresores = DB::select(DB::raw($sqla))[0]->total;

        return view('adminlte::home', compact('users','denuncias','victimas','agresores'));
    }
}


