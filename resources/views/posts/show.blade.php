@extends('layouts.master')

@section('content_header')
    {{$post->title}}
    <small>Voir les details de chaque article</small>
@endsection

@section('content')
<a href="/posts"><i class="fa fa-arrow-left"></i> <span class="btn btn-default">Précédent</span></a>
<br><br>
<p>{!! $post->body !!}</p>
<p><small class="pull-right">créé le : {{$post->created_at}} par {{$post->user->name}}</small></p>
<br>
<hr style="border-top: 1px solid #bbb;">
@if (!Auth::guest())
    @if (Auth::user()->id == $post->user->id)
        <a class="btn btn-danger pull-right" data-toggle="modal" data-target="#modal-delete">
            <i class="fa fa-trash"></i> Supprimer
        </a>
        <a class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
            <i class="fa fa-edit"></i> Modifier
        </a>
    @else
        <a class="btn btn-danger pull-right" data-toggle="modal" data-target="#modal-warning">
            <i class="fa fa-trash"></i> Supprimer
        </a>
        <a class="btn btn-primary" data-toggle="modal" data-target="#modal-warning">
            <i class="fa fa-edit"></i> Modifier
        </a>
    @endif
@else
    <button title="not allowed" class="btn btn-danger disabled pull-right">Supprimer</button>
    <button title="not allowed" class="btn btn-primary disabled">Modifier</button>
@endif

<!-- Modals -->
@include('modals.edit_modal')
@include('modals.delete_modal')
@include('modals.warning_modal')
@endsection

@section('js')
    <script src="{{ asset('js/edit.js') }}"></script>
@endsection