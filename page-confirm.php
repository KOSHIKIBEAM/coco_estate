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
            <h2>お問い合わせフォーム</h2>
            <p>内容を確認の上、送信してください。</p>
        </div>
        <div class="p-contactForm__list">
            <p>【STEP１】<br class="u-hidden-pc u-hidden-tab"> 入力</p>
            <p class="active">【STEP２】<br class="u-hidden-pc u-hidden-tab"> 確認</p>
            <p>【STEP３】<br class="u-hidden-pc u-hidden-tab"> 完了</p>
        </div>
        <div class="p-confirm">
            <dl>
                <dt>
                    <p>お名前</p>
                </dt>
                <dd>
                    <p>山田　太郎</p>
                </dd>
            </dl>
            <dl>
                <dt>
                    <p>フリガナ</p>
                </dt>
                <dd>
                    <p>ヤマダ　タロウ</p>
                </dd>
            </dl>
            <dl>
                <dt>
                    <p>メールアドレス</p>
                </dt>
                <dd>
                    <p>sample@example.com</p>
                </dd>
            </dl>
            <dl>
                <dt>
                    <p>電話番号</p>
                </dt>
                <dd>
                    <p>0123-456-7890</p>
                </dd>
            </dl>
            <dl class="p-confirm__address">
                <dt>
                    <p>住所</p>
                </dt>
                <dd>
                    <div class="post">
                        <p>〒000-0000</p>
                    </div>
                    <div class="address-level1">
                        <p>静岡県</p>
                    </div>
                    <div class="address-level2">
                        <p>静岡市駿河区小黒3-1-35</p>
                    </div>
                    <div class="address-level3">
                        <p>○○ビル 201</p>
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <p>お問い合わせ内容</p>
                </dt>
                <dd>
                    <p>テキストテキストテキストテキストテキストテキスト。
                        <br><br>
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。<br>
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。<br>
                        テキストテキストテキストテキストテキストテキストテキストテキスト。
                    </p>
                </dd>
            </dl>
        </div>
    </div>
    <div class="c-submit__btn-wrap">
        <input class="c-submit__btn back" type="submit" value="入力画面に戻る">
        <input class="c-submit__btn send" type="submit" value="送信する">
    </div>
</section>

<?php get_footer(); ?>