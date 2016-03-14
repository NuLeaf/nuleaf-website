<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
  /**
   * Displays the ACP
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('cp.acp.index');
  }
}
