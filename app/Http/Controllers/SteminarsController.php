<?php

/* ======================================================
 * Steminars Controller
 * ======================================================
 * Organization:   NuLeaf Technologies
 * Lead Developer: Tuan Pham (https://github.com/ttpham0111)
 * ======================================================*/

namespace App\Http\Controllers;

/** Laravel */
use App\Http\Requests\CreateSteminarRequest;

/** Vendors */
use Illuminate\Http\Request;
use Carbon\Carbon;

/** Models */
use App\Steminar;

class SteminarsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $steminars = Steminar::latest('date')->paginate(5);
    return view('cp.steminars.index', compact('steminars'));
  }

  /**
   * Show the resource.
   *
   * @param  \App\Steminar
   * @return \Illuminate\Http\Response
   */
  public function show(Steminar $steminar)
  {
    return view('cp.steminars.show', compact($steminar));
  }
  
  /**
   * Store a newly created resource in storage.
   *
   * @param  App\Http\Requests\CreateSteminarRequest
   * @return \Illuminate\Http\Response
   */
  public function store(CreateSteminarRequest $request)
  {
    if ($request->ajax())
    {
      $title    = $request->input('title');
      $location = $request->input('location');
      $date     = new Carbon($request->input('date'));
      $body     = $request->input('body');
      
      Steminar::create(compact('title', 'date', 'location', 'body'));
      return;
    }
    return redirect(action('SteminarsController@index'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  App\Http\Requests\CreateSteminarRequest
   * @param  \App\Steminar
   * @return \Illuminate\Http\Response
   */
  public function update(CreateSteminarRequest $request, Steminar $steminar)
  {
    if ($request->ajax())
    {
      $title    = $request->input('title');
      $location = $request->input('location');
      $date     = new Carbon($request->input('date'));
      $body     = $request->input('body');
      
      $steminar->update(compact('title', 'date', 'location', 'body'));
      return;
    }
    return redirect(action('SteminarsController@index'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \Illuminate\Http\Request
   * @param  \App\Steminar $steminar
   * @return \Illuminate\Http\Response
   */
  public function destroy(Request $request, Steminar $steminar)
  {
    if ($request->ajax())
    {
      $steminar->delete();
      return;
    }
    return redirect(action('SteminarsController@index'));
  }
}
