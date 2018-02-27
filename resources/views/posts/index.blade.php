@extends('layouts.master')

@section('content_header')
    All players
    <small>See all players</small>
@endsection

@section('content')
    @include('inc.messages')
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <a href="/posts/{{$post->id}}">{{$post->lastRecordedName}}</a>
                    </div>
                </div>
            </div>    
        @endforeach
        {{$posts->links()}}
    @else
    <div class="callout callout-info">
        <h4>No player found</h4>
    </div>
    @endif
        
    
@endsection

@extends('templates.sidebar')

@section('search')
    @include('inc.search', ['url' => 'PostsController@index'])
@endsection