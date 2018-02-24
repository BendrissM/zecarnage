$("body").on("click", "#createButton", function() {
  var createForm = $("#createForm");

  $("#create-Name-error").html("");
  $("#create-steamID-error").html("");
  $("#create-flags-error").html("");
  $("#create-dateEx-error").html("");

  $.ajax({
    dataType: 'json',
    type: "POST",
    url: createForm.attr("action"),
    data: createForm.serialize(),
    success: function(data) {
      console.log(data);
      if (data.errors) {
        if (data.errors.lrn) {
          $("#create-Name-error").html(data.errors.lrn[0]);
        }
        if (data.errors.steamID) {
          $("#create-steamID-error").html(data.errors.steamID[0]);
        }
        if (data.errors.flags) {
          $("#create-flags-error").html(data.errors.flags[0]);
        }
        if (data.errors.dateEx) {
          $("#create-dateEx-error").html(data.errors.dateEx[0]);
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
