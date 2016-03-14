<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateEditor
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
    if (!$request->user() ||
        !$request->user()->hasRole(['admin', 'editor'], 'or')
    )
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
