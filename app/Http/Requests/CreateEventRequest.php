<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateEventRequest extends Request
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    $event    = $this->route('event');
    $event_id = isset($event) ? $event->event_id : NULL;
    $event_id = isset($event_id) ? ','.$event_id.',event_id' : '';
    return [
      'title'    => 'required|string|unique:events,title'.$event_id.'|min:5|max:100',
      'date'     => 'required|date',
      'location' => 'required|string|min:5|max:100'
    ];
  }
}
