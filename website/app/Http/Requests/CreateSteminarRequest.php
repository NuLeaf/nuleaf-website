<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateSteminarRequest extends Request
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
    $steminar    = $this->route('steminar');
    $steminar_id = isset($steminar) ? $steminar->steminar_id : NULL;
    $steminar_id = isset($steminar_id) ? ','.$steminar_id.',steminar_id' : '';
    return [
      'title'    => 'required|string|unique:steminars,title'.$steminar_id.'|min:1|max:128',
      'date'     => 'date',
      'location' => 'string|max:128',
      'body'     => 'string',
      'image'    => 'url|max:256',
      'host'     => 'string|max:128'
    ];
  }
}
