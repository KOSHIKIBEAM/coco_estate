<?php get_header(); ?>

<section class="l-AboutFv" id="about">
    <div class="p-AboutFv">
        <div class="breadcrumbs p-AboutFv__breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
        <div class="p-AboutFv__wrap">
            <div class="p-AboutFv__ttl">
                <h1>ABOUT US</h1>
                <p>私たちについて</p>
            </div>
            <div class="p-AboutFv__img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/about/AboutFV.png" alt="AboutFv__img"></div>
        </div>
    </div>

    <div class="p-AboutFv__text">
        <p>お客様の<span class="c-brackets">
                <span class="c-brackets__inner">ココ</span>
            </span>を見つけ、<br class="u-hidden-pc">喜んでいただくことが最大の誇り。</p>
        <p>当社では、土地の査定から売買、建物の建設、そしてアフターメンテナンスまで一貫して行っております。<br>
            長年建設業に携わってきたノウハウを活かし、物件の真の価値を見極め、ご提案いたします。<br>
            静岡のみならず、東京などの都会と地方を結ぶ架け橋になれるよう尽力いたします。<br>
            私たちの頑張る場所は【ココ】です。<br>
            皆様の【ココ】を見つけるお手伝いをさせてください。</p>
    </div>
</section>

<section class="l-AboutService" id="AboutService">
    <div class="p-AboutService">
        <div class="c-section__ttl">
            <h2>SERVICE</h2>
            <p>事業案内</p>
        </div>
        <div class="p-AboutService__lists">
            <a href="#buy" class="p-AboutService__list">
                <div class="p-AboutService__list-img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/about/service/service-img1.png" alt="service-img">
                    <p>買いたい</p>
                </div>
            </a>
            <a href="#borrow" class="p-AboutService__list">
                <div class="p-AboutService__list-img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/about/service/service-img2.png" alt="service-img">
                    <p>借りたい</p>
                </div>
            </a>
            <a href="#sell" class="p-AboutService__list">
                <div class="p-AboutService__list-img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/about/service/service-img3.png" alt="service-img">
                    <p>売りたい</p>
                </div>
            </a>
            <a href="#consult" class="p-AboutService__list">
                <div class="p-AboutService__list-img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/about/service/service-img4.png" alt="service-img">
                    <p>相談したい</p>
                </div>
            </a>
        </div>
        <div class="p-AboutService__items">
            <div id="buy" class="p-AboutService__item">
                <div class="p-AboutService__item-text">
                    <h3>買いたい</h3>
                    <p><span>土地</span><span>新築</span><span>中古</span><span>事業用</span><span>投資用</span><span>など</span>
                    </p>
                    <p>お客様がどういう目的で、どのような不動産を探しているかの詳細をお伺いし、豊富なネットワークの中からお客様が求める不動産を探し、ご提案させていただきます。</p>
                </div>
                <div class="p-AboutService__item-img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/about/service/service-img1.png" alt="service-img">
                </div>
            </div>
            <div id="borrow" class="p-AboutService__item">
                <div class="p-AboutService__item-text">
                    <h3>借りたい</h3>
                    <p><span>居住用</span><span>事業用</span><span>駐車場</span><span>など</span></p>
                    <p>単身やファミリーの居住用から、事務所や店舗<span>など</span>の事業用、駐車場<span>など</span>の賃貸物件を幅広く取り揃えております。エリアや間取り、設備<span>など</span>様々なご要望に合わせて、ご提案させていただきます。
                    </p>
                </div>
                <div class="p-AboutService__item-img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/about/service/service-img2.png" alt="service-img">
                </div>
            </div>
            <div id="sell" class="p-AboutService__item">
                <div class="p-AboutService__item-text">
                    <h3>売りたい</h3>
                    <p><span>不動産査定</span><span>など</span></p>
                    <p>お客様が売却したい不動産に関して、適正な不動産査定を行い、適正な評価をご提示いたします。</p>
                </div>
                <div class="p-AboutService__item-img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/about/service/service-img3.png" alt="service-img">
                </div>
            </div>
            <div id="consult" class="p-AboutService__item">
                <div class="p-AboutService__item-text">
                    <h3>相談したい</h3>
                    <p><span>相続</span><span>空室対策</span><span>住み替え</span><span>資産運用</span><span>所有物件の賃貸or売却</span><span>住宅ローンの返済シミュレーション</span><span>不動産管理</span><span>など</span>
                    </p>
                    <p>所有地を活用したいがどうしていいかわからない、急な転勤で自宅を手放すことになった、土地の相続に関して<span>など</span>、不動産に関する様々な悩みや疑問<span>など</span>、お気軽にご相談ください。
                    </p>
                </div>
                <div class="p-AboutService__item-img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/about/service/service-img4.png" alt="service-img">
                </div>
            </div>
        </div>
    </div>

</section>

<section class="l-AboutProfile" id="AboutProfile">
    <div class="p-AboutProfile">
        <div class="c-section__ttl">
            <h2>COMPANY PROFILE</h2>
            <p>会社情報</p>
        </div>
        <div class="p-AboutProfile__table">
            <table>
                <tbody>
                    <tr>
                        <th>会社名</th>
                        <td>ココ・エステート株式会社</td>
                    </tr>
                    <tr>
                        <th>所在地</th>
                        <td>〒422-8072　静岡市駿河区小黒3-1-35</td>
                    </tr>
                    <tr>
                        <th>連絡先</th>
                        <td>TEL：054-204-3017 ／ FAX：054-204-3018</td>
                    </tr>
                    <tr>
                        <th>営業時間</th>
                        <td>9:00〜19:00</td>
                    </tr>
                    <tr>
                        <th>定休日</th>
                        <td>不定休</td>
                    </tr>
                    <tr>
                        <th>代表取締役</th>
                        <td>石井 孝</td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td>500万円</td>
                    </tr>
                    <tr>
                        <th>免許証番号</th>
                        <td>静岡県知事(1)第14812号</td>
                    </tr>
                    <tr>
                        <th>事業内容</th>
                        <td>不動産業</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/access'); ?>

<?php get_footer(); ?>