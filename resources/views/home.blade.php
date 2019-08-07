@extends('layouts.app')

@section('content')
<div class="welcome-holder">
    <h1>Dashboard</h1>
    <p>You successfully logged in, {{ Auth::user()->name }}! Continue to FAQ to view and edit questions!</p>
</div>
@endsection
