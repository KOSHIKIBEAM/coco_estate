$(function () {
  // ハンバーガーボタンクリックで実行
  $("#menu-icon").click(function () {
    $(this).toggleClass("active");
    $("#menu-panel").toggleClass("active");
    $("body").toggleClass("active");
    $("p-drawer__bg").toggleClass("active");
  });

  $(".p-drawer__panel-list li a").click(function () {
    $("#menu-icon").removeClass("active");
    $("#menu-panel").removeClass("active");
    $("body").removeClass("active");
    $("p-drawer__bg").removeClass("active");
  });
  // function
});
