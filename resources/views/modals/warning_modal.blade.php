<div class="modal fade" id="modal-warning" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header" style="background-color: #eea236;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" style="color: white;">Non permis</h4>
            </div>
            <div class="modal-body">
                    <div class="alert alert-warning alert-dismissible fade in" role="alert">
                        <h4><i class="icon fa fa-warning"></i> Attention!</h4>
                        Tu n'as pas le droit de modifier ni de supprimer cet article parcequ'il ne t'apartien pas.<br>
                        Vas vers le dashboard pour créer un article, si tu as déjà créé un article tu peux l'accéder et le gerer.
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal"> Ok</button>
            </div>
            {!! Form::close() !!}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->