    <div class="modal-header" style="background-color: #3c8dbc;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color: white;">Modifier un article</h4>
    </div>
      {!! Form::open(['action' => ['PostsController@update', $post->id], 'id' => 'updateForm', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
      <div class="modal-body">
          <div id="success-msg" class="hide">
              <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
                  <strong>Succès!</strong> Post modifié avec succès !
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
              {{Form::textarea('desc', $post->body, ['id' => 'editor1', 'class' => 'form-control'])}}
              <span class="text-red">
                  <strong id="desc-error"></strong>
              </span>
          </div>
          <div class="form-group">
              {{Form::file('cover_image')}}
          </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          {{Form::hidden('_method', 'PUT')}}
          <button type="button" id="editButton" class="btn btn-primary"><i class="fa fa-edit"></i> Modifier</button>
      </div>
      {!! Form::close() !!}
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
