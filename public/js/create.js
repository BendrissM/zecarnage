$('body').on('click','#createButton',function() {
    for ( instance in CKEDITOR.instances ) {
      CKEDITOR.instances[instance].updateElement();
    }
    var createForm = $("#createForm");
    var data = createForm.serialize();
    $( '#create-title-error' ).html( "" );
    $( '#create-desc-error' ).html( "" );

    $.ajax({
        type: "POST",
        url: createForm.attr("action"),
        data: createForm.serialize(),
        success:function(data){
          console.log(data);
          if(data.errors) {
              if(data.errors.title){
                  $( '#create-title-error' ).html( data.errors.title[0] );
              }
              if(data.errors.desc){
                  $( '#create-desc-error' ).html( data.errors.desc[0] );
              } 
          }
          if(data.success) {
            $('#create-success-msg').removeClass('hide');
            setInterval(function(){ 
                $('#modal-create').modal('hide');
                $('#create-success-msg').addClass('hide');location.reload();
            }, 3000);
            

        }
        },
    });
});