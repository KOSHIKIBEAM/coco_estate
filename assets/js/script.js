$('a[href*="#"]').click(function () {
  var elmHash = $(this).attr("href"); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
  var pos = $(elmHash).offset().top; //idの上部の距離からHeaderの高さを引いた値を取得
  $("body,html").animate({ scrollTop: pos }, 500); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
  return false;
});

var ua = navigator.userAgent.toLowerCase();
var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);

if (!isMobile) {
  $('a[href^="tel:"]').on("click", function (e) {
    e.preventDefault();
  });
}
