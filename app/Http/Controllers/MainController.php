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
    $events    = Event::latest('date')->get()->slice(0,10)->all();
    $steminars = Steminar::latest('date')->get()->slice(0,5)->all();
    return view('main.index_old', compact('events', 'steminars'));
  }

  public function test()
  {
    $events    = Event::latest('date')->get()->slice(0,10)->all();
    $steminars = Steminar::latest('date')->get()->slice(0,5)->all();
    return view('main.index', compact('events', 'steminars'));
  }

  public function about()
  {
    return view('main.about');
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
