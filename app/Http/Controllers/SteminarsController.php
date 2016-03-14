<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSteminarRequest;
use App\Http\Controllers\Controller;

use Gate;
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
    if (Gate::denies('manageSteminars'))
    {
      abort(403);
    }

    return view('cp.steminars.index');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function showAll()
  {
    if (Gate::denies('viewAllSteminars'))
    {
      abort(403);
    }

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
    if (Gate::denies('storeSteminars'))
    {
      abort(403);
    }

    return view('cp.steminars.create');
  }

  /**
   * Show the resource.
   *
   * @param  \App\Steminar  $steminar
   * @return \Illuminate\Http\Response
   */
  public function show(Steminar $steminar)
  {
    if (Gate::denies('view', $steminar))
    {
      abort(403);
    }

    return view('cp.steminars.show', $steminar);
  }
  
  /**
   * Store a newly created resource in storage.
   *
   * @param  App\Http\Requests\CreateSteminarRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(CreateSteminarRequest $request)
  {
    if (Gate::denies('storeSteminars'))
    {
      abort(403);
    }

    Steminar::create($request->only(array('title', 'date', 'location', 'body')));
    return redirect(action('SteminarsController@showAll'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Steminar  $steminar
   * @return \Illuminate\Http\Response
   */
  public function edit(Steminar $steminar)
  {
    if (Gate::denies('update', $steminar))
    {
      abort(403);
    }

    return view('cp.steminars.edit', compact('steminar'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  App\Http\Requests\CreateSteminarRequest  $request
   * @param  \App\Steminar                $steminar
   * @return \Illuminate\Http\Response
   */
  public function update(CreateSteminarRequest $request, Steminar $steminar)
  {
    if (Gate::denies('update', $steminar))
    {
      abort(403);
    }

    $steminar->update($request->only(array('title', 'date', 'location', 'body')));
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
    if (Gate::denies('destroy', $steminar))
    {
      abort(403);
    }
    
    $steminar->delete();
    return redirect(action('SteminarsController@showAll'));
  }
}
