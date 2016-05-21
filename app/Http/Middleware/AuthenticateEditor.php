<?php

/* ======================================================
 * Authenticate Editor Middleware
 * ======================================================
 * Organization:   NuLeaf Technologies
 * Lead Developer: Tuan Pham (https://github.com/ttpham0111)
 * ======================================================*/

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
        !$request->user()->hasRoles(['admin', 'editor'], 'or')
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
