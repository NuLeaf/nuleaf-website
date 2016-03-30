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
    return [
      'title'    => 'required|string|unique:steminars,title|min:5|max:100',
      'date'     => 'required|date_format:F d, Y g a',
      'location' => 'required|string|min:5|max:100',
      'body'     => 'required|string|min:100|max:2000'
    ];
  }
}
