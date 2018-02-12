$("body").on("click", "#editButton", function() {
  for (instance in CKEDITOR.instances) {
    CKEDITOR.instances[instance].updateElement();
  }
  var updateForm = $("#updateForm");
  // var updateForm = new FormData();
  //updateForm.append('_methode', 'PUT'); thats another solution

  $("#title-error").html("");
  $("#desc-error").html("");
  $("#image-error").html("");

  $.ajax({
    type:
      "POST" /* we can only submit data with POST methode if we're using FormData object,
                   even tho we can only update through PUT or PATCH methods
                   we can submit via POST method as long as we have "input type hidden"
                   in our updateForm to change the methode type */,
    url: updateForm.attr("action"),
    //data: updateForm.serialize(),
    data: new FormData(updateForm[0]), //like that we can manage file upload in ajax
    contentType: false,
    processData: false,
    success: function(data) {
      console.log(data);
      if (data.errors) {
        if (data.errors.title) {
          $("#title-error").html(data.errors.title[0]);
        }
        if (data.errors.desc) {
          $("#desc-error").html(data.errors.desc[0]);
        }
        if (data.errors.cover_image) {
          $("#image-error").html(data.errors.cover_image[0]);
        }
      }
      if (data.success) {
        $("#success-msg").removeClass("hide");
        setInterval(function() {
          $("#modal-default").modal("hide");
          $("#success-msg").addClass("hide");
          location.reload();
        }, 3000);
      }
    }
  });
});
