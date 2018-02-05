@extends('layouts.master')

@section('content')
<br>
  <div class="jumbotron text-center">
    <h1>Bienvenue {{Auth::user()->name}}</h1>
    <p>Crée Ton Blog Maintenant !</p>
    <p><a href="/dashboard" class="btn btn-success btn-flat">Dashboard</a> <a href="{{ route('logout') }}"
      class="btn btn-danger btn-flat" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
      Logout
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
  </form></p>
  </div>
@endsection