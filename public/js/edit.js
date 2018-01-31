$('body').on('click','#editButton',function() {
    for ( instance in CKEDITOR.instances ) {
      CKEDITOR.instances[instance].updateElement();
    }
    var updateForm = $("#updateForm");
    var data = updateForm.serialize();
    $( '#title-error' ).html( "" );
    $( '#desc-error' ).html( "" );

    $.ajax({
        type: "PUT",
        url: updateForm.attr("action"),
        data: updateForm.serialize(),
        success:function(data){
          console.log(data);
          if(data.errors) {
              if(data.errors.title){
                  $( '#title-error' ).html( data.errors.title[0] );
              }
              if(data.errors.desc){
                  $( '#desc-error' ).html( data.errors.desc[0] );
              } 
          }
          if(data.success) {
            $('#success-msg').removeClass('hide');
            setInterval(function(){ 
                $('#modal-default').modal('hide');
                $('#success-msg').addClass('hide');location.reload();
            }, 3000);
            

        }
        },
    });
});