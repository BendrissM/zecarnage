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
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:70%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <p><small>créé le : {{$post->created_at}} , par {{$post->user->name}}</small></p>
                    </div>
                </div>
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