<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Steminar extends Model
{
  /**
   * The table associated with this model.
   *
   * @var string
   */
  protected $table = 'steminars';

  /**
   * Indicates the primary id column of the table.
   *
   * @var string
   */
  protected $primaryKey = 'steminar_id';

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
    'steminar_id',
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
