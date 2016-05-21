<?php

/* ======================================================
 * Teams Controller
 * ======================================================
 * Organization:   NuLeaf Technologies
 * Lead Developer: Tuan Pham (https://github.com/ttpham0111)
 * ======================================================*/

namespace App\Http\Controllers;

/** Laravel */
use App\Http\Requests\CreateTeamRequest;

/** Models */
use App\Team;

class TeamsController extends Controller
{
  /**
   * Store a newly created resource in storage.
   *
   * @param  App\Http\Requests\CreateTeamRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(CreateTeamRequest $request)
  {
    $team_name = $request->input('team_name');
    Team::create([$team_name]);
    return redirect(action('UserController@index'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  App\Http\Requests\CreateTeamRequest  $request
   * @param  \App\Team                            $team
   * @return \Illuminate\Http\Response
   */
  public function update(CreateTeamRequest $request, Team $team)
  {
    $team_name = $request->input('team_name');
    $team->update([$team_name]);
    return redirect(action('UserController@index'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Team  $team
   * @return \Illuminate\Http\Response
   */
  public function destroy(Team $team)
  {
    $team->delete();
    return redirect(action('UserController@index'));
  }
}
