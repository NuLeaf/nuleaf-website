<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\User;
use App\Event;

class EventPolicy
{
  use HandlesAuthorization;

  /**
   * Determine if the given user can manage events.
   *
   * @param \App\User $user
   * @return bool
   */
  public function manageEvents(User $user)
  {
    return true;
  }

  /**
   * Determine if the given user can view all events.
   *
   * @param \App\User $user
   * @return bool
   */
  public function viewAllEvents(User $user)
  {
    return true;
  }

  /**
   * Determine if the given event can be viewed by the user.
   *
   * @param  \App\User  $user
   * @param  \App\Event $event
   * @return bool
   */
  public function view(User $user, Event $event)
  {
    return true;
  }

  /**
   * Determine if the given use can create new events.
   *
   * @param  \App\User  $user
   * @return bool
   */
  public function storeEvents(User $user)
  {
    return true;
  }

  /**
   * Determine if the given event can be updated by the user.
   *
   * @param  \App\User  $user
   * @param  \App\Event $event
   * @return bool
   */
  public function update(User $user, Event $event)
  {
    return true;
  }

  /**
   * Determine if the given event can be destroyed by the user.
   *
   * @param  \App\User  $user
   * @param  \App\Event $event
   * @return bool
   */
  public function destroy(User $user, Event $event)
  {
    return true;
  }
}
