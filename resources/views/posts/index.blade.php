@extends('layouts.master')

@section('content_header')
    Blogs
    <small>voir tout les blogs</small>
@endsection

@section('content')
    @include('inc.messages')
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <p><small>créé le : {{$post->created_at}} , par {{$post->user->name}}</small></p>
            </div>    
        @endforeach
        {{$posts->links()}}
    @else
    <div class="callout callout-info">
        <h4>Aucun blog trouvé</h4>

        <p>Essay de créer ton premier Blog !</p>
    </div>
    @endif
        
    
@endsection