
<div class="modal fade" id="modal-delete" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Suprimer Blog</h4>
        </div>
        <div class="modal-body">
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'id' => 'deleteForm']) !!}
            {{ csrf_field() }}
            veux-tu vraiment supprimer ce blog ?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Supprimer', ['class' => 'btn btn-danger'])}}
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
{!! Form::close() !!}