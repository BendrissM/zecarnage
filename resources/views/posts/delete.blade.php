<div class="modal-header" style="background-color: #dd4b39;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color: white;">Delete a Player</h4>
      </div>
      {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'id' => 'deleteForm']) !!}
      <div class="modal-body">
          {{ csrf_field() }}
          Do you really want to delete the player : <b><i>{{$post->lastRecordedName}}</i></b> ?
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
      </div>
      {!! Form::close() !!}