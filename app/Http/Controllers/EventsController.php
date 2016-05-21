<?php

/* ======================================================
 * Events Controller
 * ======================================================
 * Organization:   NuLeaf Technologies
 * Lead Developer: Tuan Pham (https://github.com/ttpham0111)
 * ======================================================*/

namespace App\Http\Controllers;

/** Laravel */
use App\Http\Requests\CreateEventRequest;

/** Vendors */
use Illuminate\Http\Request;
use Carbon\Carbon;

/** Models */
use App\Event;

class EventsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $events = Event::latest('date')->paginate(10);
    return view('cp.events.index', compact('events'));
  }
  
  /**
   * Store a newly created resource.
   *
   * @param  App\Http\Requests\CreateEventRequest
   * @return \Illuminate\Http\Response
   */
  public function store(CreateEventRequest $request)
  {
    if ($request->ajax())
    {
      $title    = $request->input('title');
      $location = $request->input('location');
      $date     = new Carbon($request->input('date'));
      
      Event::create(compact('title', 'date', 'location'));
      return;
    }
    return redirect(action('EventsController@index'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  App\Http\Requests\CreateEventRequest
   * @param  \App\Event
   * @return \Illuminate\Http\Response
   */
  public function update(CreateEventRequest $request, Event $event)
  { 
    if ($request->ajax())
    {
      $title    = $request->input('title');
      $location = $request->input('location');
      $date     = new Carbon($request->input('date'));

      $event->update(compact('title', 'date', 'location'));
      return;
    }
    return redirect(action('EventsController@index'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \Illuminate\Http\Request
   * @param  \App\Event $event
   * @return \Illuminate\Http\Response
   */
  public function destroy(Request $request, Event $event)
  {
    if ($request->ajax())
    {
      $event->delete();
      return;
    }
    return redirect(action('EventsController@index'));
  }
}
