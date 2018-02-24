<div class="modal fade" id="modal-create" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #00a65a;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" style="color: white;">Create a player</h4>
            </div>
            {!! Form::open(['action' => 'PostsController@store', 'id' => 'createForm', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="modal-body">
                <div id="create-success-msg" class="hide">
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <strong>Success</strong> Post created successfuly !
                    </div>
                </div>
                {{ csrf_field() }}
                <div class="form-group has-feedback">
                    {{Form::label('lrn', 'Name')}}
                    {{Form::text('lrn', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
                    <span class="text-red">
                        <strong id="create-Name-error"></strong>
                    </span>
                </div>
                <div class="form-group has-feedback">
                    {{Form::label('steamID', 'SteamID')}}
                    {{Form::text('steamID', '', ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'steamID'])}}
                    <span class="text-red">
                        <strong id="create-steamID-error"></strong>
                    </span>
                </div>
                <div class="form-group has-feedback">
                    {{Form::label('flags', 'Flag')}}
                    {{Form::text('flags', '', ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Flag'])}}
                    <span class="text-red">
                        <strong id="create-flags-error"></strong>
                    </span>
                </div>
                <div class="form-group has-feedback">
                    {{Form::label('dateEx', 'Expiration date')}}
                    {{Form::text('dateEx', '', ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Expiration Date'])}}
                    <span class="text-red">
                        <strong id="create-dateEx-error"></strong>
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
