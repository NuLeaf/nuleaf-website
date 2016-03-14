<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateAdmin
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
      if (!$request->user() || !$request->user()->hasRole('admin'))
      {
        if ($request->ajax())
        {
          return response('Unauthorized.', 401);
        }
        else
        {
          return redirect(action('MembersController@index'));
        }
      }

      return $next($request);
    }
}
