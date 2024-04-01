<?php get_header(); ?>
<?php get_template_part('template-parts/contactFv'); ?>

<section class="l-contactForm" id="contact">
    <div class="p-contactForm">
        <div class="p-contactForm__ttl">
            <h2>お問い合わせが完了いたしました。</h2>
        </div>
        <div class="p-contactForm__list p-complete__list">
            <p>【STEP１】<br class="u-hidden-pc u-hidden-tab"> 入力</p>
            <p>【STEP２】<br class="u-hidden-pc u-hidden-tab"> 確認</p>
            <p class="active">【STEP３】<br class="u-hidden-pc u-hidden-tab"> 完了</p>
        </div>
        <div class="p-complete">
            <div class="p-complete__txt">
                <p>この度は、お問い合わせいただき有り難うございます。</p>
                <p>確認のため、自動返信メールをお送りいたします。</p><br>
                <p>お問い合わせ内容を確認後、担当者より追ってご連絡させていただきます。</p>
            </div>
            <div class="p-complete__attention">
                <p>注意事項</p>
                <p>自動返信メールが届かない場合は迷惑メールやゴミ箱に振り分けられている場合がございますので、一度ご確認ください。</p>
            </div>
        </div>
    </div>
    <div class="c-submit__btn-wrap complete__btn">
        <a class="c-submit__btn send" href="<?php echo esc_url(home_url('/')); ?>">TOPへ戻る</a>
    </div>
</section>

<?php get_footer(); ?>