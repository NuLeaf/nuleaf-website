<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Gate;


class User extends Authenticatable
{
  protected $table      = 'users';
  protected $primaryKey = 'user_id';

  /**
   * The attributes that should be casted to native types.
   *
   * @var array
   */
  protected $casts = [
  ];

  /**
   * The attributes that are not mass assignable.
   *
   * @var array
   */
  protected $guarded = [
    'user_id',
    'remember_token'
  ];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * Gets the full name of the user.
   *
   * @return string
   */
  public function getFullNameAttribute()
  {
    return $this->firstname.' '.$this->lastname;
  } 

  /**
   * Determines if the user has a role.
   *
   * @param  array|string $roles
   * @param  string       $boolean
   * @return boolean
   */
  public function hasRoles($roles, $boolean = 'and')
  {
    $hasRole = false;
    $userRoles = $this->roles->pluck('role_name')->toArray();

    if (gettype($roles) === 'array')
    {
      foreach ($roles as $role)
      {
        $hasRole = (in_array($role, $userRoles, true))
                   ? true
                   : (($boolean === 'or') ? $hasRole : false);
                   
        if (($boolean === 'or' && $hasRole) ||
            ($boolean === 'and' && !$hasRole)
        )
        {
          break;
        }
      }
    }
    else
    {
      $hasRole = in_array($roles, $userRoles, true);
    }

    return $hasRole;
  }

  /**
   * Defines the M:1 relationship between users and teams.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function team()
  {
    return $this->belongsTo('App\Team', 'team_id', 'team_id');
  }

  /**
   * Defines the M:M relationship between users and roles.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function roles()
  {
    return $this->belongsToMany('App\Role');
  }

  /**
   * Defines the 1:M relationship between users and events.
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function events()
  {
    return $this->hasMany('App\Event');
  }

  /**
   * Defines the 1:M relationship between users and steminars.
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function steminars()
  {
    return $this->hasMany('App\Steminar');
  }
}
