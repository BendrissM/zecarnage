$("body").on("click", "#editButton", function() {
  var updateForm = $("#updateForm");
  // var updateForm = new FormData();
  //updateForm.append('_methode', 'PUT'); thats another solution

  $("#Name-error").html("");
  $("#steamID-error").html("");
  $("#flags-error").html("");
  $("#dateEx-error").html("");

  $.ajax({
    type:"PUT" /* we can only submit data with POST methode if we're using FormData object,
                   even tho we can only update through PUT or PATCH methods
                   we can submit via POST method as long as we have "input type hidden"
                   in our updateForm to change the methode type */,
    url: updateForm.attr("action"),
    data: updateForm.serialize(),
    success: function(data) {
      console.log(data);
      if (data.errors) {
        if (data.errors.lrn) {
          $("#Name-error").html(data.errors.lrn[0]);
        }
        if (data.errors.steamID) {
          $("#steamID-error").html(data.errors.steamID[0]);
        }
        if (data.errors.flags) {
          $("#flags-error").html(data.errors.flags[0]);
        }
        if (data.errors.dateEx) {
          $("#dateEx-error").html(data.errors.dateEx[0]);
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
