<?php

namespace App\Http\Controllers;


use Gate;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateEventRequest;
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
    return view('cp.events.index');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function showAll()
  {
    $events = Event::latest('date')->paginate(10);
    return view('cp.events.show_all', compact('events'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('cp.events.create');
  }

  /**
   * Show the resource.
   *
   * @param  \App\Event  $event
   * @return \Illuminate\Http\Response
   */
  public function show(Event $event)
  {
    return view('cp.events.show', compact('event'));
  }
  
  /**
   * Store a newly created resource in storage.
   *
   * @param  App\Http\Requests\CreateEventRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(CreateEventRequest $request)
  {
    $title    = $request->input('title');
    $date     = new Carbon($request->input('date'));
    $location = $request->input('location');

    // TODO: Other input validation not completed by request.
    //       or put it in the request class.

    // Event::create($request->only(['title', 'date', 'location']));
    return redirect(action('EventsController@showAll'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Event  $event
   * @return \Illuminate\Http\Response
   */
  public function edit(Event $event)
  {
    return view('cp.events.edit', compact('event'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  App\Http\Requests\CreateEventRequest  $request
   * @param  \App\Event                            $event
   * @return \Illuminate\Http\Response
   */
  public function update(CreateEventRequest $request, Event $event)
  {
    $event->update($request->only(array('title', 'date', 'location')));
    return redirect(action('EventsController@showAll'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Event  $event
   * @return \Illuminate\Http\Response
   */
  public function destroy(Event $event)
  {
    $event->delete();
    return redirect(action('EventsController@showAll'));
  }
}
