$(document).ready(function(){
  $(".collapsible").collapsible();
  $(".sidenav").sidenav();
  $(".tooltipped").tooltip();
  $(".modal").modal();
  $("select").formSelect();
  $(".tap-target").tapTarget();
  if (!localStorage.getItem("feature-discovery-add")) {
    setTimeout(function () {
      localStorage.setItem("feature-discovery-add", true);
      M.TapTarget.getInstance($(".tap-target")[0]).open();
    }, 2000);
  }

  var toBeDeleted = null;

  $(".delete-form button[type=\"submit\"]").on("click", function (evt) {
    evt.preventDefault();

    M.Modal.getInstance($("#confirmation")[0]).open();

    toBeDeleted = $(this).parents("form");
  });

  $("#confirmation-accept").on("click", function () {
    if (toBeDeleted) {
        console.log(toBeDeleted);
        toBeDeleted.submit();
    }
  });

  $("#confirmation-reject").on("click", function () {
    toBeDeleted = null;
  });
});