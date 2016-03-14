<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\User;
use App\Steminar;

class SteminarPolicy
{
  use HandlesAuthorization;

  /**
   * Determine if the given user can manage steminars.
   *
   * @param \App\User $user
   * @return bool
   */
  public function manageSteminars(User $user)
  {
    return true;
  }

  /**
   * Determine if the given user can view all steminars.
   *
   * @param \App\User $user
   * @return bool
   */
  public function viewAllSteminars(User $user)
  {
    return true;
  }

  /**
   * Determine if the given event can be viewed by the user.
   *
   * @param  \App\User  $user
   * @param  \App\Steminar $event
   * @return bool
   */
  public function view(User $user, Steminar $event)
  {
    return true;
  }

  /**
   * Determine if the given use can create new steminars.
   *
   * @param  \App\User  $user
   * @return bool
   */
  public function storeSteminars(User $user)
  {
    return true;
  }

  /**
   * Determine if the given event can be updated by the user.
   *
   * @param  \App\User  $user
   * @param  \App\Steminar $event
   * @return bool
   */
  public function update(User $user, Steminar $event)
  {
    return true;
  }

  /**
   * Determine if the given event can be destroyed by the user.
   *
   * @param  \App\User  $user
   * @param  \App\Steminar $event
   * @return bool
   */
  public function destroy(User $user, Steminar $event)
  {
    return true;
  }
}
