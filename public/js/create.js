$("body").on("click", "#createButton", function() {
  for (instance in CKEDITOR.instances) {
    CKEDITOR.instances[instance].updateElement();
  }
  var createForm = $("#createForm");

  $("#create-title-error").html("");
  $("#create-desc-error").html("");
  $("#create-image-error").html("");

  $.ajax({
    type: "POST",
    url: createForm.attr("action"),
    //data: createForm.serialize(), this is the old way to manage data only with no files
    data: new FormData(createForm[0]), //like that we can manage file upload in ajax
    contentType: false,
    processData: false,
    success: function(data) {
      console.log(data);
      if (data.errors) {
        if (data.errors.title) {
          $("#create-title-error").html(data.errors.title[0]);
        }
        if (data.errors.desc) {
          $("#create-desc-error").html(data.errors.desc[0]);
        }
        if (data.errors.cover_image) {
          $("#create-image-error").html(data.errors.cover_image[0]);
        }
      }
      if (data.success) {
        $("#create-success-msg").removeClass("hide");
        setInterval(function() {
          $("#modal-create").modal("hide");
          $("#create-success-msg").addClass("hide");
          location.reload();
        }, 3000);
        console.log(data);
      }
    }
  });
});
