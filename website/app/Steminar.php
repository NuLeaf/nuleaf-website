<?php

namespace App;

use App\Event;

class Steminar extends Event
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
}
