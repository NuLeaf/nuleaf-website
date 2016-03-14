<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventRequest;
use App\Http\Controllers\Controller;

use Gate;
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
    if (Gate::denies('manageEvents'))
    {
      abort(403);
    }

    return view('cp.events.index');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function showAll()
  {
    if (Gate::denies('viewAllEvents'))
    {
      abort(403);
    }

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
    if (Gate::denies('storeEvents'))
    {
      abort(403);
    }

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
    if (Gate::denies('view', $event))
    {
      abort(403);
    }

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
    if (Gate::denies('storeEvents'))
    {
      abort(403);
    }

    Event::create($request->only(['title', 'date', 'location']));
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
    if (Gate::denies('update', $event))
    {
      abort(403);
    }

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
    if (Gate::denies('update', $event))
    {
      abort(403);
    }

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
    if (Gate::denies('destroy', $event))
    {
      abort(403);
    }
    
    $event->delete();
    return redirect(action('EventsController@showAll'));
  }
}
