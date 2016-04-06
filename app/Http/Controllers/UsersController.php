<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;

use App\User;
use App\Team;
use App\Role;

// TODO (TP):
//   - Create Request.
//   - Write Documentation.
class UsersController extends Controller
{
  public function index()
  {
    return view('cp.users.index');
  }

  public function show(User $user)
  {
    return view('cp.users.show', compact('user'));
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
    // TODO: Decide between object or array using pluck.
    //       Pluck is more efficient but sacrifices readability.
    $teams = Team::orderBy('team_name')->get();
    $roles = Role::orderBy('role_name')->get();

    return view('cp.users.create', compact('teams', 'roles'));
  }

  public function store(CreateUserRequest $request)
  {
    $username    = $request->input('username');
    $email       = $request->input('email');
    $password    = bcrypt($request->input('password'));
    $firstname   = $request->input('firstname');
    $lastname    = $request->input('lastname');
    $image1      = $request->input('image1');
    $image2      = $request->input('image2');
    $description = $request->input('description');
    $team_id     = $request->input('team_id');

    $user = User::create(compact('username', 'email', 'password', 'firstname', 'lastname', 'image1', 'image2', 'description', 'team_id'));
    
    $role_ids = $request->input('role_ids');
    $user->roles()->sync($role_ids);

    return redirect(action('AdminController@index'));
  }

  public function edit(User $user)
  {
    // TODO: Decide between object or array using pluck.
    //       Pluck is more efficient but sacrifices readability.
    $teams = Team::orderBy('team_name')->get();
    $roles = Role::orderBy('role_name')->get();

    return view('cp.users.edit', compact('user', 'teams', 'roles'));
  }

  public function update(CreateUserRequest $request, User $user)
  {
    $username    = $request->input('username');
    $email       = $request->input('email');
    $password    = bcrypt($request->input('password'));
    $firstname   = $request->input('firstname');
    $lastname    = $request->input('lastname');
    $image1      = $request->input('image1');
    $image2      = $request->input('image2');
    $description = $request->input('description');
    $team_id     = $request->input('team_id');

    $user->update(compact('username', 'email', 'password', 'firstname', 'lastname', 'image1', 'image2', 'description', 'team_id'));

    $role_ids = $request->input('role_ids');
    $user->roles()->sync($role_ids);

    return redirect(action('AdminController@index'));
  }

  public function destroy(User $user)
  {
    $user->delete();
    return redirect(action('AdminController@index'));
  }
}
