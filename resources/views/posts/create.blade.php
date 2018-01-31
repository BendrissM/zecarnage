@extends('layouts.master')

@section('content_header')
    Créer un Blog
@endsection

@section('content')
    @include('inc.ermessages')
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Titre')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Titre'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Text')}}
            {{Form::textarea('body', '', ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::submit('Créer', ['class' => 'btn btn-success'])}}
    {!! Form::close() !!}
@endsection