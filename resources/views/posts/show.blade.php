@extends('layouts.master')

@section('content_header')
    {{$post->lastRecordedName}}
    <small>see player details</small>
@endsection

@section('content')
<br><br>
<h3>Player SteamID :</h3>         <i>{{ $post->steamID }}</i>
<h3>Player flag     : </h3>       <i>{{ $post->flags }}</i>
<h3>Player Expiration date:</h3>  <i>{{ $post->DateExpiration }}</i>

<br>
<hr style="border-top: 1px solid #bbb;">
@if (!Auth::guest())
        <a class="btn btn-danger pull-right" data-toggle="modal" data-target="#modal-delete">
            <i class="fa fa-trash"></i> Delete
        </a>
        <a class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
            <i class="fa fa-edit"></i> Edit
        </a>
@else
    <button title="not allowed" class="btn btn-danger disabled pull-right">Supprimer</button>
    <button title="not allowed" class="btn btn-primary disabled">Modifier</button>
@endif

<!-- Modals -->
@include('modals.edit_modal')
@include('modals.delete_modal')
@endsection

@section('js')
    <script src="{{ asset('js/edit.js') }}"></script>
@endsection