<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
  protected $table      = 'teams';
  protected $primaryKey = 'team_id';

  // Don't store created_at/updated_at in database.
  public $timestamps    = false;

  /**
   * The attributes that are not mass assignable.
   *
   * @var array
   */
  protected $guarded = [
    'team_id',
  ];

  /**
   * Defines the 1:M relationship between teams and users.
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function users()
  {
    return $this->hasMany('App\User');
  }
}
