<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * The role model defines a set of roles that
 * a user can take on, allowing users to perform
 * actions appropriate to the given role.
  */
class Role extends Model
{
  // Set table name and primaryKey column name.
  protected $table      = 'roles';
  protected $primaryKey = 'role_id';

  // Don't store created_at/updated_at in database.
  public $timestamps    = false;
  
  /**
   * The attributes that are not mass assignable.
   *
   * @var array
   */
  protected $guarded = [
    'role_id',
  ];

  /**
   * Defines the M:M relationship between roles and users.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function users()
  {
    return $this->belongsToMany('App\User');
  }
}
