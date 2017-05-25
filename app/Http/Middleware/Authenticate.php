<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('auth/login');
            }
        }

        if($request->path() == 'inicio_plataforma') return $next($request);
        if($request->path() == 'listar_deportistas') return $next($request);
        if($request->is('listar_test_fuerza/*')) return $next($request);
        if($request->path() == 'guardardeportista') return $next($request);
        if($request->path() == 'deportista') return $next($request);
        if($request->is('test_resistencia/*')) return $next($request);
        if($request->is('guardar_resistencia/*')) return $next($request);
        if($request->is('eliminar_resistencia/*')) return $next($request);
        if($request->is('test_fuerza/*')) return $next($request);
        if($request->is('guardar_fuerza/*')) return $next($request);
        if($request->is('eliminar_fuerza/*')) return $next($request);
        if($request->is('listar_test_flexibilidad/*')) return $next($request);
        if($request->is('guardar_flexibilidad/*')) return $next($request);
        if($request->is('eliminar_flexibilidad/*')) return $next($request);
        if($request->is('listar_test_corporal/*')) return $next($request);
        if($request->is('listar_test_resistencia/*')) return $next($request);
        if($request->is('editar_deportista/*')) return $next($request);
        if($request->is('edit_deportista/*')) return $next($request);
        if($request->is('test_flexibilidad/*')) return $next($request);
        if($request->is('test_corporal/*')) return $next($request);
        if($request->is('guardar_corporal/*')) return $next($request);
        if($request->is('eliminardeportista/*')) return $next($request);
        if($request->is('eliminarentrenador/*')) return $next($request);
        if($request->is('eliminar_corporal/*')) return $next($request);

        if(auth()->user()->tipo !='admin'){
            return redirect()->route('inicio');
        }

        return $next($request);
    }
}
