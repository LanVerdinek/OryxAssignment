<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB; 
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function settings()
    {
        $title = 'Settings';
        return view('settings')->with('title', $title);
    }

    public function updateTheme($theme_id)
    {
        $user = Auth::user();
        $user->theme_id=$theme_id;
        $user->save();
        return redirect('settings');
    }
}
