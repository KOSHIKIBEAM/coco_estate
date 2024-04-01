<?php get_header(); ?>
<?php get_template_part('template-parts/contactFv'); ?>

<section class="l-contactForm" id="contact">
    <div class="p-contactForm">
        <div class="p-contactForm__ttl">
            <h2>お問い合わせフォーム</h2>
            <p>以下のフォームに入力いただきご確認ください。</p>
        </div>
        <div class="p-contactForm__list">
            <p class="active">【STEP１】<br class="u-hidden-pc u-hidden-tab"> 入力</p>
            <p>【STEP２】<br class="u-hidden-pc u-hidden-tab"> 確認</p>
            <p>【STEP３】<br class="u-hidden-pc u-hidden-tab"> 完了</p>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="9419150" title="コンタクトフォーム 1"]'); ?>
        <div class="p-contactForm__personal-info">
            <p>個人情報のお取り扱いについて</p>
            <p>入力された個人情報は、当社からのご連絡・資料発送・各種イベント等の連絡を目的で収集するものであり、原則として、本人の承諾なく第三者に開示・提供いたしません。</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>