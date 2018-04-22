<?php

/**
 * SilverEngine  - PHP MVC framework
 * @package   SilverEngine
 * @author    SilverEngine Team
 * @copyright 2015-2017
 * @license   MIT
 * @link      https://github.com/SilverEngine/Framework
 */

namespace App\Middlewares;

use App\Facades\RocketChat;
use App\Facades\Token;
use App\Facades\Utils;
use App\Helpers\RocketChatResponse;
use Closure;
use Silver\Core\Blueprints\MiddlewareInterface;
use Silver\Http\Request;
use Silver\Http\Response;
use App\Facades\Auth;

class AuthMiddleware implements MiddlewareInterface {
    
    // put the name to make it public
    private $unguard = [
            'rocket_chat',
    ];
    
    public function execute(Request $request, Response $response, Closure $next) {
        //El route es null cuando la dirección no existe. Mostrara la pagina de error 404.
        if ($request->route() == NULL) {
            return $next();
        }
        
        $middleware = $request->route()
                              ->middleware();
        
        //Si no encuentra ninguno redirecciona a la pagina de error.
        if (array_search($middleware, $this->unguard) === FALSE) {
            $r = new RocketChatResponse();
            $r->setText("Petición denegada. Middleware.");
            RocketChat::sendResponse($r);
            
            return FALSE;
        }
        
        RocketChat::initRequest();
        
        //Se comprueba el token
        if (!Utils::isRequestMethod('GET') && !RocketChat::checks()) {
            $r = new RocketChatResponse();
            $r->setText("Petición denegada. User/Token");
            RocketChat::sendResponse($r);
            
            return FALSE;
        }
        
        return $next();
    }
    
}
