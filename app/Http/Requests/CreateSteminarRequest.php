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
      'title'    => 'required|string|min:5|max:100|
                     unique:steminars,title'.$steminar_id,
      'date'     => 'required|date',
      'location' => 'required|string|min:5|max:100',
      'body'     => 'required|string|min:100'
    ];
  }
}
