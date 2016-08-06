<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Event;
use App\Steminar;

class MainController extends Controller
{
  public function index()
  {
    $steminars = Steminar::whereIn('steminar_id', [12, 13, 14])->get();
    return view('main.index', compact('steminars'));
  }

  public function about()
  {
    return view('main.about');
  }

  public function events()
  {
    $events    = Event::latest('date')->get();
    $steminars = Steminar::latest('date')->get();
    return view('main.events', compact('events', 'steminars'));
  }

  public function faq()
  {
    return view('main.faq');
  }

  public function teams()
  {
    return view('main.teams');
  }

  public function members()
  {
    return view('main.members');
  }

  public function past_members()
  {
    return view('main.past_members');
  }
}
