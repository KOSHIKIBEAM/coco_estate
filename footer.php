<footer class="l-footer" id="footer">
    <div class="p-footer">
        <div class="p-footer__top">
            <div class="p-footer__top-mail">
                <p>CONTACT</p>
            </div>
            <div class="p-footer__top-tel">
                <div class="p-footer__top-tel-txt">
                    <p>054-204-3017</p>
                    <p>[ 受付時間 ] 0:00 ~ 00:00</p>
                </div>
            </div>
        </div>
        <div class="p-footer__bottom">
            <div class="p-footer__bottom-left">
                <a href="#" class="p-footer__bottom-left-img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/footer/footer-logo.png" alt=""></a>
                <p>〒422-8072 静岡市駿河区小黒3-1-35<br>
                    TEL：054-204-3017<br>
                    FAX：054-204-3018</p>
            </div>
            <?php if (has_nav_menu('footer_menu')) : ?>
                <nav class="p-footer__bottom-right">
                    <?php
                    wp_nav_menu(
                        [
                            'theme_location' => 'footer_menu',
                            'menu_class'     => 'p-footer__bottom-right-list',
                        ]
                    );
                    ?>
                </nav>
            <?php endif; ?>
        </div>

    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    // ドロワー
    jQuery(".js-drawer").on("click", function(e) {
        e.preventDefault();
        let targetClass = jQuery(this).attr("data-target");
        jQuery("." + targetClass).toggleClass("is-checked");
        return false;
    });
</script>
<?php wp_footer(); ?>
</body>

</html>