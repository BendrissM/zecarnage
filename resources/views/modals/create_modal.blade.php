<div class="modal fade" id="modal-create" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Créer Blog</h4>
            </div>
            {!! Form::open(['action' => 'PostsController@store', 'id' => 'createForm', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="modal-body">
                <div id="create-success-msg" class="hide">
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <strong>Success!</strong> Post Créé avec succé !
                    </div>
                </div>
                {{ csrf_field() }}
                <div class="form-group has-feedback">
                    {{Form::label('title', 'Titre')}}
                    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Titre'])}}
                    <span class="text-red">
                        <strong id="create-title-error"></strong>
                    </span>
                </div>
                <div class="form-group has-feedback">
                    {{Form::label('desc', 'Text')}}
                    {{Form::textarea('desc', '', ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                    <span class="text-red">
                        <strong id="create-desc-error"></strong>
                    </span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" id="createButton" class="btn btn-success"><i class="fa fa-plus"></i> Créer</button>
            </div>
            {!! Form::close() !!}
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
