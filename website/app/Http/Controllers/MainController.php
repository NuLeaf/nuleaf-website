<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Event;
use App\Steminar;
use App\User;

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

  public function research()
  {
    return view('main.research');
  }

  public function members()
  {
    $users = User::orderBy('team_id')->orderBy('user_id')->get();
    return view('main.members', compact('users'));
  }

  public function past_members()
  {
    return view('main.past_members');
  }
}
