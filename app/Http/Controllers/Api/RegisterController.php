<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

use App\User;
use App\Models\Tblmodulo;
use App\Models\Tbldepartamento;
use App\Models\Api\OauthClients;
use App\Models\Api\Device;
use App\Models\Victima;
use App\Models\Denuncia;

class RegisterController extends Controller
{

    public function register (Request $request)
    {

        $messages = array(
            'required' => ':attribute es obligatorio.',
            'email'    => ':attribute debe ser un e-mail válido.',
            'min'      => ':attribute debe tener :min caracteres como mínimo.',
            'unique'   => ':attribute ya ha sido registrado.',
            'max'      => ':attribute debe tener :max caracteres como máximo.',
            'numeric'  => ':attribute debe ser numérico.',
            'image'    => ':attribute debe ser un archivo imagen.',
            'mimes'    => ':attribute debe ser un archivo de tipo: valores.',
            'confirmed'=> ':attribute no coincide con el campo de confirmación.',
        );

        $attributes = array(
            'dni' => 'Nro. Documento',
            'nombre' => 'Nombre',
            'tbldepartamento_id' => 'Departamento',
            'tblmodulo_id' => 'Modulo',
            'name' => 'Usuario',
            'email' => 'Email',
            'password' => 'Contraseña',
            'client_id' => 'Cliente',
            'token_device' => 'Token',
        );

        // se asume que solo un usuario podra usar un dispositivo
        $rules = [
            'dni' => 'required|numeric|unique:users',
            'nombre' => 'required|string|max:255',
            'tbldepartamento_id' => 'required|exists:tbldepartamento,id',
            'name' => 'required|string|max:255',
            // 'email' => 'required|string|email|max:255|unique:users',
            // 'password' => 'required|string|min:6|confirmed',
            'password' => 'required|string|min:6',
            'client_id' => 'required|exists:oauth_clients,id',
            // 'token_device' => 'required|string|max:255|unique:device',
            'token_device' => 'required|max:255',
        ];

        $input = [
            'dni' => $request->dni,
            'nombre' => $request->nombre,
            'tbldepartamento_id' => $request->tbldepartamento_id,
            'name' => $request->name,
            // 'email' => $request->email,
            'password' => $request->password,
            // 'password_confirmation' => $request->password_confirmation,
            'client_id' => $request->client_id,
            'token_device' => $request->token,
        ];

        // $this->validate($request, $rules);

        $validator = Validator::make($input, $rules, $messages);
        $validator->setAttributeNames($attributes);

        if ($validator->fails()){

            return response()->json([
              'fail' => true,
              'errors' => $validator->errors()
            ], 422);

        }else{

            $sVictima = Victima::where('nro_doc','=',$request->dni)->first();

            // victima registrada en la denuncia
            // solo una victima tendra acceso a la aplicacion (por exediente)
            // la victima tendra su usario enlazado en la tabla victima (user_id)
            if (!empty($sVictima) && count($sVictima)>0) {
                // actualizar denuncias (device activo)
                foreach ($sVictima->denuncias as $denuncia) { 
                    Denuncia::where('expediente','=',$denuncia->expediente)->whereNotNull('medida_file')->whereNotNull('fdenuncia')->whereNotNull('fformalizacion')->whereNull('deleted_at')->update(['device' => 1]);
                }
                
                // get modulo
                $departamento = Tbldepartamento::where('id','=',$request->tbldepartamento_id)
                                                ->whereNull('deleted_at')->first();
                $modulo = Tblmodulo::where('tbldepartamento_id','=',$request->tbldepartamento_id)
                                    ->where('nombre','=',$departamento->nombre)->whereNull('deleted_at')->first();

                $user = User::create([
                    'nombre' => $request->nombre,
                    'tbldepartamento_id' => $request->tbldepartamento_id,
                    'tblmodulo_id' => $modulo->id,
                    'dni' => $request->dni,
                    'name' => $request->name,
                    // 'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'acceso' => 0,      // accede solo a la app movil
                ]);

                // registra en la victima el usuario de la app
                $sVictima->user_id = $user->id;
                $sVictima->save();

                $device = Device::create([
                    'user_id' => $user->id,
                    'client_id' => $request->client_id,
                    'token_device' => $request->token,
                ]);

                return response()->json([
                    'success' => 'User registrado'
                ]);
            }

            
        }

    }

    public function registerDeviceToken(Request $request)
    {

        Log::info('notification sended: ', ['request' => $request->all(),'request_user' => $request->user()]);

        $devices = Device::where('user_id','=',$request->user()->id)->where('token_device','=',$request->token)->first();
        if (!empty($devices) && count($devices)>0) {
            Device::where('id',$devices->id)->update(['sesion' => 1]);
            return 1;
        }else{
            $devices = Device::where('token_device','=',$request->token)->get();
            if (count($devices)>0) {
                return 0;
            }else{
                // 'sesion' se registra por defecto en 1.
                Device::create([
                    'user_id' => $request->user()->id,
                    'client_id' => $request->client_id,
                    'token_device' => $request->token,
                ]);
                return 1;
            }
        }
    }

    public function update(Request $request)
    {
        
        $messages = array(
            'required' => ':attribute es obligatorio.',
            'email'    => ':attribute debe ser un e-mail válido.',
            'min'      => ':attribute debe tener :min caracteres como mínimo.',
            'max'      => ':attribute debe tener :max caracteres como máximo.',
            'numeric'  => ':attribute debe ser numérico.',
            'image'    => ':attribute debe ser un archivo imagen.',
            'mimes'    => ':attribute debe ser un archivo de tipo: valores.',
            'confirmed'=> ':attribute no coincide con el campo de confirmación.',
        );

        $attributes = array(
            'nombre' => 'Nombre',
            'tbldepartamento_id' => 'Departamento',
            'tblmodulo_id' => 'Modulo',
            'name' => 'Usuario',
            'email' => 'Email',
            'fono' => 'Celular',
            'direccion' => 'Dirección',
            'password' => 'Contraseña',
            'client_id' => 'Cliente',
            'token_device' => 'Token',
        );

        $rules = [
            'nombre' => 'required|string|max:255',
            'tbldepartamento_id' => 'required|exists:tbldepartamento,id',
            'name' => 'required|string|max:255',
            'fono' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
        ];

        $input = [
            'nombre' => $request->nombre,
            'tbldepartamento_id' => $request->tbldepartamento_id,
            'name' => $request->name,
            'fono' => $request->fono,
            'direccion' => $request->direccion,
        ];

        $validator = Validator::make($input, $rules, $messages);
        $validator->setAttributeNames($attributes);

        if ($validator->fails()){

            return response()->json([
              'fail' => true,
              'errors' => $validator->errors()
            ], 422);

        }else{

            // get modulo
            $departamento = Tbldepartamento::where('id','=',$request->tbldepartamento_id)->first();
            $modulo = Tblmodulo::where('tbldepartamento_id','=',$request->tbldepartamento_id)
                                ->where('nombre','=',$departamento->nombre)->first();

            $user = User::where('id', $request->user()->id)->update([
                'nombre' => $request->nombre,
                'tbldepartamento_id' => $request->tbldepartamento_id,
                'tblmodulo_id' => $modulo->id,
                'name' => $request->name,
                'fono' => $request->fono,
                'direccion' => $request->direccion,
            ]);

            // actualizar victima (user_id)
            if ($user->acceso == 0) { // victima
                $victima = Victima::where('nro_doc','=',$user->dni)->first();
                if (isset($victima) && !empty($victima)) {
                    $victima->user_id = $user->id;
                    $victima->save();
                }
            }

            return response()->json([
                'success' => 'Datos actualizados'
            ]);
            
        }

    }

    public function resetPassword(Request $request)
    {

        $user = User::findOrFail($request->user()->id);
        
        $messages = array(
            'required' => ':attribute es obligatorio.',
            'email'    => ':attribute debe ser un e-mail válido.',
            'min'      => ':attribute debe tener :min caracteres como mínimo.',
            'max'      => ':attribute debe tener :max caracteres como máximo.',
            'numeric'  => ':attribute debe ser numérico.',
            'image'    => ':attribute debe ser un archivo imagen.',
            'mimes'    => ':attribute debe ser un archivo de tipo: valores.',
            'confirmed'=> ':attribute no coincide con el campo de confirmación.',
        );

        $attributes = array(
            'nombre' => 'Nombre',
            'tbldepartamento_id' => 'Departamento',
            'tblmodulo_id' => 'Modulo',
            'name' => 'Usuario',
            'email' => 'Email',
            'password' => 'Contraseña',
            'client_id' => 'Cliente',
            'token_device' => 'Token',
        );

        $rules = [
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->email.',email',
            'password' => 'required|string|min:6|confirmed',
        ];

        $input = [
            'email' => $request->email,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
        ];

        $validator = Validator::make($input, $rules, $messages);
        $validator->setAttributeNames($attributes);

        if ($validator->fails()){

            return response()->json([
              'fail' => true,
              'errors' => $validator->errors()
            ], 422);

        }else{

            $user = User::where('id', $request->user()->id)->update([
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            return response()->json([
                'success' => 'Contraseña actualizada'
            ]);
            
        }

    }

    public function logout(Request $request)
    {
        $deviceSesion = Device::where('user_id','=',$request->user()->id)
                        ->where('client_id','=',$request->client_id)
                        ->where('token_device','=',$request->tokenDevice)
                        ->where('sesion','=','1')
                        ->first();

        if (!empty($deviceSesion) && count($deviceSesion)>0) {
            Device::where('id',$deviceSesion->id)->update(['sesion' => 0]);
            return 1;
        }else{
            // ningun usuario logeado? error poco probable 

            // puede darse el caso que se elimine la app del dispositivo y se reinstale generandose otro token_device?
            // por lo que el token guardado en el storage(ionic) no sea valido si es que no se ha cerrado la sesion antes de 
            // quitar la app.
            // ver /appPanic/pages/home/home.ts:logout ()
            return 0;
        }
    }

    public function checkAccess(Request $request)
    {

        Log::info('checkAccess: ', ['request' => $request->all(),'request_user' => $request->user()]);

        // si el usuario buscado puede acceder a la aplicacion web, entonces puede ver el menu notificaciones
        $user = User::where('id','=',$request->user()->id)->where('acceso','=','1')->first();
        if (!empty($user) && count($user)>0) { // admin o policia
            return 1;
        }else{ // victima
            return 0;
        }
    }

}
