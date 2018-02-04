
<div class="modal fade" id="modal-delete" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #dd4b39;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" style="color: white;">Suprimer Blog</h4>
        </div>
        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'id' => 'deleteForm']) !!}
        <div class="modal-body">
            {{ csrf_field() }}
            veux-tu vraiment supprimer ce blog {{$post->id}} ?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Supprimer', ['class' => 'btn btn-danger'])}}
        </div>
        {!! Form::close() !!}
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->