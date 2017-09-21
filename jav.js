$(".section").css("height", $(window).height());

$(".portfolio-item").each(function() {
  $(this).mouseenter(function() {
  $(this).find(".portfolio-image i").css("display", "block");
  }).mouseleave(function() {
    $(this).find(".portfolio-image i").css("display", "none");
  });
});
