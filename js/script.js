$('a[href*="#"]').click(function () {
  var elmHash = $(this).attr("href"); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
  var pos = $(elmHash).offset().top; //idの上部の距離からHeaderの高さを引いた値を取得
  $("body,html").animate({ scrollTop: pos }, 500); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
  return false;
});

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

const intersectionObserver = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add("is-in-view");
    } else {
      // entry.target.classList.remove("is-in-view");
    }
  });
});

const inViewItems = document.querySelectorAll(".js-in-view");
inViewItems.forEach(function (inViewItem) {
  intersectionObserver.observe(inViewItem);
});
