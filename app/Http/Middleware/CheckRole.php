<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    public function handle($request, Closure $next, $role)
    {

        $roles = explode('_', $role);
       
        $user = $this->auth->user();
        $cek = false;
         foreach ($roles  as $role) {

            if ($user->role == $role) {
                $cek = true;
            }
        }
        if ($cek == false) {
            return "denied";
        }
        return $next($request);
    }
}
