@extends('layouts.app')

@section('content')
    <div class='about-section'>
        <h1>{{$title}}</h1>
        <h3>What you can do in this app:</h3>
        <ul>
            <li>View Frequently Asked Questions whether logged in or not.</li>
            <li>Ability to create an account and log in with it.</li>
            <li>When logged in, besides viewing the FAQ, the user can also edit questions and add new ones.</li>
            <li>When logged in, a user can set the preferred theme for the site (dark/light) in settings.</li>
        </ul>
    </div>
@endsection
