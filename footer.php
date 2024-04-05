<footer class="l-footer" id="footer">
    <div class="p-footer">

        <div class="p-footer__left">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-footer__left-img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/footer/footer-logo.png" alt="footer-logo"></a>
            <p>〒422-8072 静岡市駿河区小黒3-1-35<br>
                TEL：054-204-3017<br>
                FAX：054-204-3018</p>
        </div>
        <?php if (has_nav_menu('footer_menu')) : ?>
            <nav class="p-footer__right">
                <?php
                wp_nav_menu(
                    [
                        'theme_location' => 'footer_menu',
                        'menu_class'     => 'p-footer__right-list',
                    ]
                );
                ?>
                <p class="copylight">© COCO-ESTATE Co.,Ltd. All Rights Reserved.</p>
            </nav>
        <?php endif; ?>


    </div>
</footer>

<div class="p-screen__fixed">
    <a href="/contact" class="p-screen__fixed-mail">
        <p>CONTACT</p>
    </a>
    <div class="p-screen__fixed-tel">
        <div class="p-screen__fixed-txt">
            <a href="tel:054-204-3017">054-204-3017</a>
            <p>[ 受付時間 ] 9:00〜19:00</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    $(function() {
        // ハンバーガーボタンクリックで実行
        $(".js-drawer").click(function() {
            $(".p-drawer__icon").toggleClass("is-checked");
            $(".p-drawer__content-cover").toggleClass("is-checked");
        });

        $("a").click(function() {
            $(".p-drawer__icon").removeClass("is-checked");
            $(".p-drawer__content-cover").removeClass("is-checked");
        });

        // ページ内スクロール
        $('a[href^="#"]').click(function() {
            const speed = 400;
            let href = $(this).attr("href");
            let target = $(href == "#" || href == "" ? "html" : href);
            let position = target.offset().top;
            $("body,html").animate({
                scrollTop: position
            }, speed, "swing");
            return false;
        });
        // function
    });


    // タブ
    const tabList = document.querySelectorAll(".p-tab-list__item");
    // タブコンテンツ
    const tabContent = document.querySelectorAll(".p-tab-contents__items");

    //DOMが読み込み終わったら
    document.addEventListener("DOMContentLoaded", function() {
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
</script>
<?php wp_footer(); ?>
</body>

</html>