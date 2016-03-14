<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;

use App\User;
use App\Team;
use App\Role;

// TODO (TP):
//   - Create Policy for User.
//   - Create Request.
//   - Write Documentation.
class UsersController extends Controller
{
  public function show(User $user)
  {
    // if (Gate::denies('view', $user))
    // {
    //   abort(403);
    // }
    
    $teams = Team::all()->sortBy('team_name');
    $roles = Role::all()->sortBy('role_name');

    return view('cp.acp.users.show', compact('teams', 'roles', 'user'));
  }

  public function search(Request $request)
  {
    if (!$request->ajax())
    {
      $username = $request->input('username');
      $user = User::where('username', $username)->first();
      return $this->show($user);
    }

    $query = $request->input('query');
    if (!is_string($query) || $query == '')
    {
      return;
    }

    $usernames = User::orderBy('username')->pluck('username');

    // Should server or client do the searching?
    // TODO: Implement better search/

    $result = [];
    foreach ($usernames as $username)
    {
      if (strpos($username, $query) !== false)
      {
        $result[] = $username;
      }
    }
    return $result;
  }

  public function create()
  {
    // if (Gate::denies('storeUsers'))
    // {
    //   abort(403);
    // }
    
    return view('users.create');
  }

  public function store(CreateUserRequest $request)
  {
    // if (Gate::denies('storeUsers'))
    // {
    //   abort(403);
    // }
    
    // User::create( // )
    return redirect(action('AdminController@index'));
  }

  public function edit(User $user)
  {
    // if (Gate::denies('update', $user))
    // {
    //   abort(403);
    // }
    
    return view('users.edit', compact('user'));
  }

  public function update(CreateUserRequest $request, User $user)
  {
    // if (Gate::denies('update', $user))
    // {
    //   abort(403);
    // }
    
    // $user->update( // )
    return redirect(action('AdminController@index'));
  }

  public function destroy(User $user)
  {
    // if (Gate::denies('destroy', $user))
    // {
    //   abort(403);
    // }
    
    // $user->delete();
    return redirect(action('AdminController@index'));
  }
}
