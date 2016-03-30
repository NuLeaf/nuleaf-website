<?php

namespace App\Http\Controllers;

/** Laravel */
use App\Http\Requests\CreateSteminarRequest;
use App\Http\Controllers\Controller;

/** Vendors */
use Carbon\Carbon;

/** Models */
use App\Steminar;

class SteminarsController extends Controller
{
  /**
   * Display a landing page for the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('cp.steminars.index');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function showAll()
  {
    $steminars = Steminar::latest('date')->paginate(10);
    return view('cp.steminars.show_all', compact('steminars'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('cp.steminars.create');
  }

  /**
   * Show the resource.
   *
   * @param  \App\Steminar
   * @return \Illuminate\Http\Response
   */
  public function show(Steminar $steminar)
  {
    return view('cp.steminars.show', $steminar);
  }
  
  /**
   * Store a newly created resource in storage.
   *
   * @param  App\Http\Requests\CreateSteminarRequest
   * @return \Illuminate\Http\Response
   */
  public function store(CreateSteminarRequest $request)
  {
    $title    = $request->input('title');
    $date     = new Carbon($request->input('date'));
    $location = $request->input('location');
    $body     = $request->input('body');

    Steminar::create(compact('title', 'date', 'location', 'body'));
    return redirect(action('SteminarsController@showAll'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Steminar
   * @return \Illuminate\Http\Response
   */
  public function edit(Steminar $steminar)
  {
    return view('cp.steminars.edit', compact('steminar'));
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
    $title    = $request->input('title');
    $date     = new Carbon($request->input('date'));
    $location = $request->input('location');
    $body     = $request->input('body');

    $steminar->update(compact('title', 'date', 'location', 'body'));
    return redirect(action('SteminarsController@showAll'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Steminar  $steminar
   * @return \Illuminate\Http\Response
   */
  public function destroy(Steminar $steminar)
  {
    $steminar->delete();
    return redirect(action('SteminarsController@showAll'));
  }
}
