<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Steminar extends Model
{
  protected $tabble     = 'steminars';
  protected $primaryKey = 'steminar_id';

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
