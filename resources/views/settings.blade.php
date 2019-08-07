@extends('layouts.app')

@section('content')
    <div class="settings-section">
        <h1>{{$title}}</h1>
        <h2>Theme selection:</h2>
        <a class='dark-theme-button' href="settings/1">🌛 DARK MODE 🌛</a>
        <a class='light-theme-button' href="settings/0">🌞 LIGHT MODE 🌞</a>
    </div>
@endsection