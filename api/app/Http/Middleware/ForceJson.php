<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ForceJson
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
     /*    $request->headers->set('Accept', 'application/json; charset=utf-8');
        
       return $next($request); */
       $data =  $next($request);
       if($data instanceof JsonResponse) {
           $data->withHeaders(['Content-Type' => "application/json; charset=utf-8"]);
           $data->setEncodingOptions(JSON_UNESCAPED_UNICODE);
       }

       return $data;
    }
}