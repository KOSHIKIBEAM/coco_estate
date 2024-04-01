<?php get_header(); ?>
<?php get_template_part('template-parts/contactFv'); ?>

<section class="l-contactForm" id="contact">
    <div class="p-contactForm">
        <div class="p-contactForm__ttl">
            <h2>お問い合わせフォーム</h2>
            <p>内容を確認の上、送信してください。</p>
        </div>
        <div class="p-contactForm__list">
            <p>【STEP１】<br class="u-hidden-pc u-hidden-tab"> 入力</p>
            <p class="active">【STEP２】<br class="u-hidden-pc u-hidden-tab"> 確認</p>
            <p>【STEP３】<br class="u-hidden-pc u-hidden-tab"> 完了</p>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="e773748" title="確認画面用フォーム"]'); ?>
    </div>
</section>



<?php get_footer(); ?>