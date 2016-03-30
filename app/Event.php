<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $table      = 'events';
  protected $primaryKey = 'event_id';
  

  /**
   * The attributes that are not mass assignable.
   *
   * @var array
   */
  protected $guarded = [
    'event_id',
  ];

  /**
   * Defines the M:1 relations between events and users.
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
