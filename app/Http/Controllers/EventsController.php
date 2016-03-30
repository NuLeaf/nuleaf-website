<?php

namespace App\Http\Controllers;

/** Laravel */
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEventRequest;

/** Vendors */
use Carbon\Carbon;

/** Models */
use App\Event;

class EventsController extends Controller
{
  /**
   * Display a landing page for the resource.
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
   * @param  \App\Event
   * @return \Illuminate\Http\Response
   */
  public function show(Event $event)
  {
    return view('cp.events.show', compact('event'));
  }
  
  /**
   * Store a newly created resource in storage.
   *
   * @param  App\Http\Requests\CreateEventRequest
   * @return \Illuminate\Http\Response
   */
  public function store(CreateEventRequest $request)
  {
    $title    = $request->input('title');
    $date     = new Carbon($request->input('date'));
    $location = $request->input('location');

    Event::create(compact('title', 'date', 'location'));
    return redirect(action('EventsController@showAll'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Event
   * @return \Illuminate\Http\Response
   */
  public function edit(Event $event)
  {
    return view('cp.events.edit', compact('event'));
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
    $title    = $request->input('title');
    $date     = new Carbon($request->input('date'));
    $location = $request->input('location');

    $event->update(compact('title', 'date', 'location'));
    return redirect(action('EventsController@showAll'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Event
   * @return \Illuminate\Http\Response
   */
  public function destroy(Event $event)
  {
    $event->delete();
    return redirect(action('EventsController@showAll'));
  }
}
