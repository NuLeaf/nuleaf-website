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
      'title'    => 'required|string',
      'date'     => 'required|date',
      'location' => 'required|string',
      'body'     => 'required|string',
    ];
  }
}
