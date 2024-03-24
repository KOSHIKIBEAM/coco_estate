// タブ
const tabList = document.querySelectorAll(".tab-list__item");
// タブコンテンツ
const tabContent = document.querySelectorAll(".tab-contents__items");

//DOMが読み込み終わったら
document.addEventListener("DOMContentLoaded", function () {
  for (let i = 0; i < tabList.length; i++) {
    tabList[i].addEventListener("click", tabSwitch);
  }

  function tabSwitch() {
    // activeクラスを削除
    document.querySelectorAll(".active")[0].classList.remove("active");
    this.classList.add("active");

    //タブを配列にする
    let tabArr = Array.from(tabList);

    //クリックしたタブのインデックス番号を取得
    let index = tabArr.indexOf(this);

    // show クラスを削除
    document.querySelectorAll(".show")[0].classList.remove("show");

    //タブのインデックスから同じインデックスのコンテンツにshowクラスを付与する
    tabContent[index].classList.add("show");
  }
});
