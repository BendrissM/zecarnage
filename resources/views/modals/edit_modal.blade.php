<div class="modal fade" id="modal-default" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Modifier Post</h4>
            </div>
            {!! Form::open(['action' => ['PostsController@update', $post->id], 'id' => 'updateForm', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="modal-body">
                <div id="success-msg" class="hide">
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <strong>Success!</strong> Post modifié avec succé !
                    </div>
                </div>
                {{ csrf_field() }}
                <div class="form-group has-feedback">
                    {{Form::label('title', 'Titre')}}
                    {{Form::text('title', $post->title, ['class' => 'form-control'])}}
                    <span class="text-red">
                        <strong id="title-error"></strong>
                    </span>
                </div>
                <div class="form-group has-feedback">
                    {{Form::label('desc', 'Text')}}
                    <textarea name="desc" id="editor1" class="form-control">{{$post->body}}</textarea>
                    <span class="text-red">
                        <strong id="desc-error"></strong>
                    </span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                {{Form::hidden('_method', 'PUT')}}
                <button type="button" id="editButton" class="btn btn-primary"><i class="fa fa-edit"></i> Modifier</button>
            </div>
            {!! Form::close() !!}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->