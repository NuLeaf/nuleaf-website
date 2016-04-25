<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Event extends Model
{
  /**
   * The table associated with this model.
   *
   * @var string
   */
  protected $table = 'events';

  /**
   * Indicates the primary id column of the table.
   *
   * @var string
   */
  protected $primaryKey = 'event_id';

  /**
   * The attributes that should be mutated to dates.
   *
   * @var array
   */
  protected $dates = ['date'];

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
