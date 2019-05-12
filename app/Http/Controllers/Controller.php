<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
ini_set('MAX_EXECUTION_TIME',3600);
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function array_push_assoc($array, $key, $value){
        $array[$key] = $value;
        return $array;
    }

    public function array_rm_assoc($array, $key){
        unset($array[$key]);
        return $array;
    }

    function clearString($string) {
       $string = str_replace(' ', '-', $string);
       return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    }

    
}
