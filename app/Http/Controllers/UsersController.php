<?php

/* ======================================================
 * Users Controller
 * ======================================================
 * Organization:   NuLeaf Technologies
 * Lead Developer: Tuan Pham (https://github.com/ttpham0111)
 * ======================================================*/

namespace App\Http\Controllers;

/** Laravel */
use App\Http\Requests\CreateUserRequest;

/** Vendors */
use Illuminate\Http\Request;

/** Models */
use App\User;
use App\Team;
use App\Role;

class UsersController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $users = User::orderBy('firstname')->paginate(12);
    $teams = Team::orderBy('team_name')->get();
    $roles = Role::orderBy('role_name')->get();
    return view('cp.users.index', compact('users', 'teams', 'roles'));
  }

  /**
   * Store a newly created resource.
   *
   * @param  App\Http\Requests\CreateUserRequest
   * @return \Illuminate\Http\Response
   */
  public function store(CreateUserRequest $request)
  {
    if ($request->ajax())
    {
      $username    = $request->input('username');
      $email       = $request->input('email');
      $password    = bcrypt($request->input('password'));
      $firstname   = $request->input('firstname');
      $lastname    = $request->input('lastname');
      $image1      = $request->input('image1');
      $image2      = $request->input('image2');
      $description = $request->input('description');
      $team_name   = $request->input('team_name', '');
      $team_id     = ($team_name === '') ? $request->input('team_id') : $this->create_new_team($team_name);
      $role_ids    = $request->input('role_ids', []);

      $user = User::create(compact('username', 'email', 'password', 'firstname', 'lastname', 'image1', 'image2', 'description', 'team_id'));
      
      $user->roles()->sync((gettype($role_ids) === 'array') ? $role_ids : []);
      return;
    }
    return redirect(action('UsersController@index'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  App\Http\Requests\CreateUserRequest
   * @param  \App\Event
   * @return \Illuminate\Http\Response
   */
  public function update(CreateUserRequest $request, User $user)
  {
    if ($request->ajax())
    {
      $username    = $request->input('username');
      $email       = $request->input('email');
      $password    = $request->input('password', '');
      $firstname   = $request->input('firstname');
      $lastname    = $request->input('lastname');
      $image1      = $request->input('image1');
      $image2      = $request->input('image2');
      $description = $request->input('description');
      $team_name   = $request->input('team_name', '');
      $team_id     = ($team_name === '') ? $request->input('team_id') : $this->create_new_team($team_name);
      $role_ids    = $request->input('role_ids', []);

      $user->update(compact('username', 'email', 'firstname', 'lastname', 'image1', 'image2', 'description', 'team_id'));

      if ($password !== '')
      {
        $user->password = bcrypt($password);
        $user->save();
      }

      $user->roles()->sync((gettype($role_ids) === 'array') ? $role_ids : []);
      return;
    }
    return redirect(action('UsersController@index'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \Illuminate\Http\Request
   * @param  \App\User $user
   * @return \Illuminate\Http\Response
   */
  public function destroy(Request $request, User $user)
  {
    if ($request->ajax())
    {
      $user->delete();
      return;
    }
    return redirect(action('UsersController@index'));
  }

  /**
   * Creates a new team and returns its id.
   *
   * @param string
   * @return int
   */
  private function create_new_team($team_name)
  {
    $team = Team::create(compact('team_name'));
    return $team->team_id;
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

}
