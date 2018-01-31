@extends('layouts.master')

@section('content_header')
    {{$post->title}}
    <small>Voir les details de chaque article</small>
@endsection

@section('content')
<a href="/posts"><i class="fa fa-arrow-left"></i> <span class="btn btn-default">Précédent</span></a>
<br><br>
<p>{!! $post->body !!}</p>
<p><small class="pull-right">créé le : {{$post->created_at}} par {{Auth::user()->name}}</small></p>
<hr width=50%>
<hr>
<!--<a class="btn btn-primary" href="/posts/{{$post->id}}/edit"><i class="fa fa-edit"></i> Modifier</a>-->
<a class="btn btn-danger pull-right" data-toggle="modal" data-target="#modal-delete">
    <i class="fa fa-trash"></i> Supprimer
</a>
<a class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
    <i class="fa fa-edit"></i> Modifier
</a>
<!-- Modal -->
@include('modals.edit_modal')
@include('modals.delete_modal')
@endsection

@section('js')
    <script src="{{ asset('js/edit.js') }}"></script>
@endsection