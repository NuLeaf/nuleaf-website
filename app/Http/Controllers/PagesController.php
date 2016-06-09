<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Event;
use App\Steminar;

class PagesController extends Controller
{
  public function index()
  {
    $events    = Event::latest('date')->get()->slice(0,10)->all();
    $steminars = Steminar::latest('date')->get()->slice(0,5)->all();
    return view('pages.index', compact('events', 'steminars'));
  }

  public function about()
  {
    return view('pages.about');
  }

  public function faq()
  {
    return view('pages.faq');
  }

  public function teams()
  {
    return view('pages.teams');
  }

  public function members()
  {
    return view('pages.members');
  }

  public function past_members()
  {
    return view('pages.past_members');
  }
}
