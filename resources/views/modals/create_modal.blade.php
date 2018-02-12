<div class="modal fade" id="modal-create" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #00a65a;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" style="color: white;">Créer un article</h4>
            </div>
            {!! Form::open(['action' => 'PostsController@store', 'id' => 'createForm', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="modal-body">
                <div id="create-success-msg" class="hide">
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <strong>Succès!</strong> Post Créé avec succès !
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
                <div class="form-group">
                    {{Form::label('cover_image', 'Choose an image (optional)')}}
                    {{Form::file('cover_image')}}
                    <span class="text-red">
                        <strong id="create-image-error"></strong>
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
