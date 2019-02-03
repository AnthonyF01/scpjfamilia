<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Api\Device;
use App\Models\Victima;
use App\Models\Denuncia;
use App\User;
use App\Models\Api\Notification;

class NotificationController extends Controller
{
    
    public function sendNotification(Request $request)
    {

        Log::info('notification sended: ', ['request' => $request->all(),'request_user' => $request->user()]);

        // return response()->json([
        //     'status' => 'success',
        //     'info' => "La notificación ha sido enviada, en breves minutos un operador se pondrá en contacto con usted.",
        // ]);

        // se seleccionan los dispositivos de los usuarios que recibiran las notificaciones enviadas por las victimas
        $devices = DB::table('device')
        ->join('users','device.user_id','=','users.id')
        ->select('token_device')
        ->where('users.tbldepartamento_id',$request->user()->tbldepartamento_id)
        // ->where('users.tbldepartamento_id',23)
        ->where('users.acceso',1)
        ->get();

        if ( isset($request->user()->fono) && isset($request->user()->direccion) ) {
            // si existen dispositivos a los cuales enviar notificaciones
            if (count($devices) > 0) {

                $tokens = [];
                for ($i=0; $i < count($devices); $i++) { 
                    $tokens[] = $devices[$i]->token_device;
                }

                // data to send
                $data = array(
                    'user_id' => $request->user()->id,
                    'lat' => $request->lat,
                    'lng' => $request->lng,
                ); 
                
                $ch = curl_init("https://fcm.googleapis.com/fcm/send");

                //The device token.
                // $token = "dKA6KdUZGdo:APA91bFi12M8fA8qdvlhlyaSjD2aypYyNCUHpKZxa2NnYsSKbAATTC5aD8A9lHx7nextlZmyJC9J2Cy0hUxyh4J1J5QB6ndlntfeYnEUN0W9ZEEUVehK-baMw2X0TKJSwUwPlse3bHNv";
                $token = "evG3FXWVUzs:APA91bFog6LFEcBybyoNr6qMomITZ8bBDQS7_ub21MC56MOiHrzLnzqSjaOcsJyx9Nrof_Yw_CGYe1-Oh1lAtbrk2oVycsYZhbZ9hjb0ApYyPQ84s4zYagcYqJjbNpK0qzAb5vvrUrcj";

                //Title of the Notification.
                $title = " Notificaciones de AppPanic.";

                //Body of the Notification.
                $body = $request->user()->nombre." solicita ayuda.";

                //Creating the notification array.
                $notification = array('title' =>$title , 'body' => $body, 'sound'=>'Default', "icon" => "fcm_push_icon", "click_action" => "FCM_PLUGIN_ACTIVITY");
                // $notification = array('title' => 'CodeCastra', 'body' =>  $message ,'sound'=>'Default','image'=>'Notification Image' );

                //This array contains, the token and the notification. The 'to' attribute stores the token.
                    // unique device
                    // $arrayToSend = array('to' => $token, 'notification' => $notification);
                    // multiple devices ( $registration_ids not defined)
                    // $arrayToSend = array('registration_ids' => $registration_ids, 'notification' => $notification);

                    // $data contains a data value from request 
                    $arrayToSend = array(
                        'registration_ids' => $tokens, 
                        'priority' => 10,
                        'notification' => $notification,
                        'data' => $data
                    );

                //Generating JSON encoded string form the above array.
                $json = json_encode($arrayToSend);

                //Setup headers:
                $headers = array();
                $headers[] = 'Content-Type: application/json';
                // server key (firebase web app)
                $headers[] = 'Authorization: key=AAAAYyw-z_s:APA91bEqQus73cpYwY1VKPPXGmbhAyPVxCaWBynuXn8buwSc9LuVnznj496zxfrtVd-BnimKhDbUv6LXWHaH6sR_7L5Ahn_F3GF2l7PXz7B_XW2bDSHyuwUlIy_7MH7Rel6ErUWGadIh';

                //Setup curl, add headers and post parameters.
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);                                                                     
                curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
                curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);       

                //Send the request
                $result = curl_exec($ch);
                // puede devolver true o false (excepto con << CURLOPT_RETURNTRANSFER, 1 >> que devuelve string si es true o false)

                if($result === FALSE) {
                    $error = die(curl_error($ch));
                    return response()->json([
                        'status' => 'error',
                        'info' => $error,
                    ]);
                }

                //Close request
                curl_close($ch);

                // find user with session token
                // $user = $request->user();

                // create a notification
                $device = Notification::create([
                    'user_id' => $request->user()->id,
                    'lat' => $request->lat,
                    'lng' => $request->lng,
                    'acc' => $request->acc,
                    'title' => $title,
                    'body' => $body,
                    'tbldepartamento_id' => $request->user()->tbldepartamento_id,
                    'tblmodulo_id' => $request->user()->tblmodulo_id,
                ]);

                // actualizar la denuncia (cell estado)
                $sVictima = Victima::where('nro_doc','=',$request->user()->dni)->first();
                if (!empty($sVictima) && count($sVictima)>0) {
                    // actualizar denuncias (device activo)
                    foreach ($sVictima->denuncias as $denuncia) { 
                        Denuncia::where('expediente','=',$denuncia->expediente)->update(['device' => 2]);
                    }
                }


                return response()->json([
                    'status' => 'success',
                    'info' => "La notificación ha sido enviada, en breves minutos un operador se pondrá en contacto con usted.",
                ]);

            }else {

                return response()->json([
                    'status' => 'error',
                    'info' => "La notificación no ha sido enviada porque no hay receptores disponibles.",
                ]);

            }
        }else {
            return response()->json([
                'status' => 'error',
                'info' => "La notificación no ha sido enviada. Por favor complete sus datos de perfil en el menu 'Perfil'.",
            ]);
        }

    }

    public function getNotification(Request $request)
    {
        $notifications = DB::table('notification')
                         ->join('users','users.id','=','notification.user_id')
                         ->select('notification.*','users.nombre','users.fono','users.direccion')
                         ->where('notification.tbldepartamento_id','=',$request->user()->tbldepartamento_id)
                         // ->where('state','=',0)
                         ->orderBy('notification.created_at','desc')
                         ->get();

        return response()->json([
            'notifications' => $notifications,
        ]);
    }

    public function checkNotification(Request $request)
    {
        Notification::where('id','=',$request->idnot)->update([
            'state' => $request->check,
            'worker_id' => $request->user()->id,
        ]);

        // actualizar la denuncia (cell estado)
        $sVictima = Victima::where('nro_doc','=',$request->user()->dni)->first();
        if (!empty($sVictima) && count($sVictima)>0) {
            // actualizar denuncias (device activo)
            foreach ($sVictima->denuncias as $denuncia) { 
                Denuncia::where('expediente','=',$denuncia->expediente)->update(['device' => 3]);
            }
        }

        return response()->json([
            'status' => 'success',
            'info' => "La notificación ha cambiado de estado de atención.",
        ]);
    }

}

