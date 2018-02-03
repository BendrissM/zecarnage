@extends('layouts.master')

@section('content_header')
    Dashboard
    <small>Gestion des Blogs</small>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <a class="btn btn-success pull-right" data-toggle="modal" data-target="#modal-create">
                        <i class="fa fa-plus"></i> Créer
                    </a>
                    
                    @if (count($posts) > 0)
                        <h3>tout vos articles</h3>
                        <table class="table table-striped">
                            <tr>
                                <th width=30%>Title</th>
                                <th width=20%></th>
                                <th width=20%></th>
                                <th width=20%></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        <a href="/posts/{{$post->id}}" class="btn btn-warning">
                                            <i class="fa fa-eye"></i> Regarder
                                        </a>
                                    </td>
                                    <td>
                                        
                                        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                                            <i class="fa fa-edit"></i> Modifier
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger" data-toggle="modal" data-target="#modal-delete" data-id="{{$post->id}}">
                                            <i class="fa fa-trash"></i> Supprimer
                                        </a> 
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <h3>Créé Ton blog maintenant !</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-default" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
        
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@include('modals.create_modal') 
@endsection

@section('js')
    <script src="{{ asset('js/modal_hide.js') }}"></script>
    <script src="{{ asset('js/edit.js') }}"></script>
    <script src="{{ asset('js/create.js') }}"></script>
@endsection
