<?php get_header(); ?>

<section class="l-contactFv" id="about">
    <div class="p-contactFv">
        <div class="breadcrumbs p-contactFv__breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
        <div class="p-contactFv__wrap">
            <div class="p-contactFv__ttl">
                <h1>CONTACT</h1>
                <p>お問い合わせ</p>
            </div>
            <div class="p-contactFv__img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/contact/contactFv.png" alt=""></div>
        </div>
    </div>

    <div class="p-contactFv__text-wrap">
        <div class="p-contactFv__text">
            <p>お急ぎの場合は、<br class="u-hidden-tab u-hidden-pc">直通電話をご利用ください。</p>
            <a href="tel:054-204-3017">054-204-3017</a>
            <p>【　受付時間　】　00:00 ~ 00:00</p>
        </div>
    </div>
</section>

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
        <input class="c-submit__btn send" type="submit" value="TOPへ戻る">
    </div>
</section>

<?php get_footer(); ?>