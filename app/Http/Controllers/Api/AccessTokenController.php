<?php
namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Log;
use App\User;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use League\OAuth2\Server\Exception\OAuthServerException;
use Psr\Http\Message\ServerRequestInterface;
use Response;
use \Laravel\Passport\Http\Controllers\AccessTokenController as ATC;

// controlador creado en reemplazo del controlador por defecto de laravel passport con el mismo nombre
// para porder loguearse via api por el "username"

// revisar el modelo App\User "findForPassport()"
class AccessTokenController extends ATC
{
    public function issueToken(ServerRequestInterface $request)
    {
        try {
            //get username (default is :email)
            $username = $request->getParsedBody()['username'];
            $password = $request->getParsedBody()['password'];

            Log::info('AccessTokenController: ', ['username' => $username, 'password' => $password]);

            // Log::info('notification sended: ', ['request' => $request->all(),'request_user' => $request->user()]);

            //get user
            //change to 'email' if you want
            $user = User::where('name', '=', $username)->first();

            //generate token
            // revisar el modelo App\User "findForPassport()"
            $tokenResponse = parent::issueToken($request);

            Log::info('AccessTokenController: ', ['tokenResponse' => $tokenResponse]);

            //convert response to json string
            $content = $tokenResponse->getContent();

            //convert json to array
            $data = json_decode($content, true);

            if(isset($data["error"]))
                throw new OAuthServerException('The user credentials were incorrect.', 6, 'invalid_credentials', 401);

            /**************************/

            //add access token to user
            // $user = collect($user);
            // $user->put('access_token', $data['access_token']);
            // $user->put('refresh_token', $data['refresh_token']);
            // $user->put('expires_in', $data['expires_in']);

            // return Response::json(array($user));

            /**************************/

            // data devuelta por el controlador por defecto de laravel passport en la url "oauth/token"
            $dataAuth = [
                'access_token' => $data['access_token'],
                'refresh_token' => $data['refresh_token'],
                'expires_in' => $data['expires_in']
            ];

            return Response::json($dataAuth);

        }
        catch (ModelNotFoundException $e) { // email notfound
            //return error message
            return response(["message" => "User not found"], 500);
        }
        catch (OAuthServerException $e) { //password not correct..token not granted
            //return error message
            return response(["message" => "The user credentials were incorrect.', 6, 'invalid_credentials"], 500);
        }
        catch (Exception $e) {
            ////return error message
            return response(["message" => "Internal server error"], 500);
        }
    }
}