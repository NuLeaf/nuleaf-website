<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request
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
    // TODO: Add more extensive validation rules.
    // TODO: Set upper limits based on columns in database.
    $user    = $this->route('user');
    $user_id = isset($user) ? $user->user_id : NULL;
    $user_id = isset($user_id) ? ','.$user_id.',user_id' : '';

    $team_id = $this->input('team_id');
    $team_id = isset($team_id) ? '|exists:teams,team_id,team_id,'.$team_id : '';

    $required = ($this->method() === 'POST' ? 'required|' : '');

    return [
      'username'    => 'required|string|unique:users,username'.$user_id,
      'email'       => 'required|email|unique:users,email'.$user_id,
      'password'    => $required.'string|confirmed',
      'firstname'   => 'required|string|max:75',
      'lastname'    => 'required|string|max:75',
      'image1'      => 'image|max:100',
      'image2'      => 'image|max:100',
      'description' => 'string',
      'team_id'     => 'required'.$team_id
    ];
  }
}
