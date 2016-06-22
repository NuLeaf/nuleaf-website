<?php

/* ======================================================
 * Authenticate Role Middleware
 * ======================================================
 * Organization:   NuLeaf Technologies
 * Lead Developer: Tuan Pham (https://github.com/ttpham0111)
 * ======================================================*/

namespace App\Http\Middleware;

use Closure;

class AuthenticateRole
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure                  $next
   * @param  string                    $boolean
   * @param  string|array              $roles
   * @return mixed
   */
  public function handle($request, Closure $next, $boolean, ...$roles)
  {
    if (count($roles) === 0)
    {
      $roles   = $boolean;
      $boolean = 'and';
    }
    
    $user = $request->user();
    if (!$user || !$user->hasRoles($roles, $boolean)
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
