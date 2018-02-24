    <div class="modal-header" style="background-color: #3c8dbc;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color: white;">Update Player</h4>
    </div>
      {!! Form::open(['action' => ['PostsController@update', $post->id], 'id' => 'updateForm', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
      <div class="modal-body">
          <div id="success-msg" class="hide">
              <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
                  <strong>Succès!</strong> Player has been updated !
              </div>
          </div>
          {{ csrf_field() }} 
          <div class="form-group has-feedback">
            {{Form::label('lrn', 'Name')}}
            {{Form::text('lrn', $post->lastRecordedName, ['class' => 'form-control'])}}
            <span class="text-red">
                <strong id="Name-error"></strong>
            </span>
        </div>
        <div class="form-group has-feedback">
            {{Form::label('steamID', 'SteamID')}}
            {{Form::text('steamID', $post->steamID, ['class' => 'form-control'])}}
            <span class="text-red">
                <strong id="steamID-error"></strong>
            </span>
        </div>
        <div class="form-group has-feedback">
            {{Form::label('flags', 'Flag')}}
            {{Form::text('flags', $post->flags, ['class' => 'form-control'])}}
            <span class="text-red">
                <strong id="flags-error"></strong>
            </span>
        </div>
        <div class="form-group has-feedback">
            {{Form::label('dateEx', 'Expiration Date')}}
            {{Form::text('dateEx', $post->DateExpiration, ['class' => 'form-control'])}}
            <span class="text-red">
                <strong id="dateEx-error"></strong>
            </span>
        </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          {{Form::hidden('_method', 'PUT')}}
          <button type="button" id="editButton" class="btn btn-primary"><i class="fa fa-edit"></i> Modifier</button>
      </div>
      {!! Form::close() !!}
