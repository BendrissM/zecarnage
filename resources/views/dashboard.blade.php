@extends('layouts.master')

@section('content_header')
    Dashboard
    <small>Players managment</small>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <a class="btn btn-success pull-right" data-toggle="modal" data-target="#modal-create">
                        <i class="fa fa-plus"></i> Create
                    </a>
                    
                    @if (count($posts) > 0)
                        <h3>All players</h3>
                        <table class="table table-striped">
                            <tr>
                                <th width=30%>lastRecordedName</th>
                                <th width=20%></th>
                                <th width=20%></th>
                                <th width=20%></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->lastRecordedName}}</td>
                                    <td>
                                        <a href="/posts/{{$post->id}}" class="btn btn-warning">
                                            <i class="fa fa-eye"></i> Show
                                        </a>
                                    </td>
                                    <td>
                                        
                                        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/posts/{{$post->id}}/delete" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete">
                                            <i class="fa fa-trash"></i> Delete
                                        </a> 
                                        @include('modals.delete_modal')
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{$posts->links()}}
                    @else
                        <h3>Create a player !</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@include('modals.create_modal')
@include('templates.edit')
@include('templates.delete')
@endsection

@section('js')
    <script src="{{ asset('js/create.js') }}"></script>
    <script src="{{ asset('js/modal_hide.js') }}"></script>
    <script src="{{ asset('js/edit.js') }}"></script>
@endsection
