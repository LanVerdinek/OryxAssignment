<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

//Controller naših strani, tukaj lahko tudi podatke pošiljamo v eno stran
//Tisti view ki se vrne, se bo poslal
//pages.index bo pogledal v mapo pages in našel index.blade.php datoteko

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to laravel';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title); //z with podajaš podatke naprej
    }

    public function about(){
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }
/*
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
    */
}
