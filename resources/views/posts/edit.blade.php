@extends('layouts.master')

@section('content_header')
    Modifier un Blog
@endsection

@section('content')
    @include('inc.messages')
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Titre')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Titre'])}}
        </div>
        <div class="form-group">
            {{Form::label('desc', 'Text')}}
            {{Form::textarea('desc', $post->body, ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Modifier', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
