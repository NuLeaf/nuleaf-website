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
   * Returns a JSON response with paginated events.
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function index()
  {
    $events = Event::latest('date')->paginate(10);
    return response()->json($events);
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
      $date     = $request->input('date');
      $date     = $date === null ? null : new Carbon($date);
      
      Event::create(compact('title', 'date', 'location'));
      return response()->json(array("success" => true));
    }
    return response()->json(array("success" => false));
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
      $date     = $request->input('date');
      $date     = $date === null ? null : new Carbon($date);

      $event->update(compact('title', 'date', 'location'));
      return response()->json(array("success" => true));
    }
    return response()->json(array("success" => false));
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
      return response()->json(array("success" => true));
    }
    return response()->json(array("success" => false));
  }
}
