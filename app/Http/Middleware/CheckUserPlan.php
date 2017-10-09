<?php

namespace App\Http\Middleware;

use Closure;
use App\PlanEmpresa;
use Illuminate\Support\Facades\Auth;
use Session;

class CheckUserPlan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $PlanEmpresa = PlanEmpresa::find($request->id);

        if ($PlanEmpresa){
            if ($PlanEmpresa->user_id !=  Auth::id()){
                Session::flash('mensaje', 'Acceso denegado');
                Session::flash('mensajeType', 'danger');

                return redirect('/home');
            }
        }else{
            Session::flash('mensaje', 'El plan de empresa no existe');
            Session::flash('mensajeType', 'danger');
            return redirect('/home');
        }

        return $next($request);
    }
}
