$("#modal-default").on("hidden.bs.modal", function() {
  $(this).removeData("bs.modal");
});

//reload delete modal at every post
$("#modal-delete").on("hidden.bs.modal", function() {
  $(this).removeData("bs.modal");
});
