var elements = $(".modal-overlay, .modal");

$("btnmodal").click(function () {
  elements.addClass("active");
});

$(".close-modal").click(function () {
  elements.removeClass("active");
});
