<?php get_header(); ?>

<section class="l-fv" id="fv">
    <div class="p-fv">
        <div class="p-fv__txt">
            <p>When it comes to real estate “COCO”.</p>
            <p>不動産のことなら<br class="u-hidden-pc u-hidden-tab">
                <span class="c-brackets">
                    <span class="c-brackets__inner">ココ</span>
                </span>
            </p>
            <p><span>不動産のことなら</span><span>ココ・エステート</span></p>
            <p>家を建てるなら
                <span class="c-brackets__small">
                    <span class="c-brackets__inner">ココ</span>
                </span>、
                <br class="u-hidden-pc u-hidden-tab">お店をはじめるなら
                <span class="c-brackets__small">
                    <span class="c-brackets__inner">ココ</span>
                </span>、
                <br class="u-hidden-pc u-hidden-tab">土地を売買するなら
                <span class="c-brackets__small">
                    <span class="c-brackets__inner">ココ</span>
                </span>
            </p>
            <br class="u-hidden-pc u-hidden-tab">
            <p>あなたの
                <span class="c-brackets__small">
                    <span class="c-brackets__inner">ココ</span>
                </span>を一緒に探します。
            </p>
        </div>
    </div>
</section>

<section class="l-search" id="search">
    <div class="p-search">
        <div class="c-section__ttl">
            <h2>SEARCH</h2>
            <p>物件情報</p>
        </div>
        <div class="p-search__btn">
            <div class="p-search__btn-buy">
                <p>買う</p>
                <div class="p-search__btn-buy-btn">
                    <a href="/category/land">土地</a>
                    <a href="/category/new_house">新築戸建</a>
                    <a href="/category/existing_home">中古戸建</a>
                    <a href="/category/newly_built_apartment">新築マンション</a>
                    <a href="/category/used_apartment">中古マンション</a>
                </div>
            </div>
            <div class="p-search__btn-borrow">
                <p>借りる</p>
                <div class="p-search__btn-borrow-btn">
                    <a href="/category/rental">賃貸<span>(マンション・アパート・一戸建て)</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="l-result" id="result">
    <div class="p-result">
        <?php if (have_posts()) : // 記事があれば表示 
        ?>
            <?php while (have_posts()) : // 記事数分ループ 
            ?>
                <?php the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="p-result__item">
                    <div class="p-result__item-body">
                        <div class="p-result__item-img">
                            <?php if (has_post_thumbnail()) :
                            ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else :
                            ?>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/result/item3.png" alt="">
                            <?php endif; ?>
                        </div>

                        <?php $category = get_the_category(); ?>
                        <?php if ($category[0]) : ?>
                            <div class="p-result__item-cate"><?php echo $category[0]->cat_name; ?></div>
                        <?php endif; ?>

                        <div class="p-result__item-address"><?php the_title(); ?></div>
                        <?php if (get_field('price')) : ?>
                            <div class="p-result__item-price"><?php the_field('price'); ?></div>
                        <?php endif; ?>
                        <?php if (get_field('access')) : ?>
                            <div class="p-result__item-access"><?php the_field('access'); ?></div>
                        <?php endif; ?>
                    </div>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <!-- 
    <a href="#" class="p-result__btn">
        VIEW MORE
    </a> -->
</section>

<section class="l-flow" id="flow">
    <div class="p-flow">
        <div class="c-section__ttl">
            <h2>FLOW</h2>
            <p>取引の流れ</p>
        </div>
        <div class="p-tab">
            <!-- タブ　-->
            <ul class="p-tab-list">
                <li class="p-tab-list__item active">不動産購入の場合</li>
                <li class="p-tab-list__item">賃貸契約の場合</li>
                <li class="p-tab-list__item">不動産売却の場合</li>
            </ul>

            <!-- タブコンテンツ 　-->
            <div class="p-tab-contents">
                <div class="p-tab-contents__items show">
                    <p>購入したい不動産が見つかったら、<br class="u-hidden-pc u-hidden-tab">売買契約までの流れを確認しましょう。</p>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>01</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">購入の相談</div>
                            <div class="p-tab-contents__item-txt">お店の窓口はもちろん、メールやオンラインでのご相談も受け付けております。<br>
                                お客様のライフスタイルに合わせた物件をご紹介いたします。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>02</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">住宅ローン事前審査</div>
                            <div class="p-tab-contents__item-txt">ローンに不安があるお客様は金融機関の事前相談・事前審査をしておくと安心です。<br>
                                金融機関のご紹介ややり方など、サポートいたします。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>03</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">購入の申し込み</div>
                            <div class="p-tab-contents__item-txt">売主様に購入を希望しているということを伝えます。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>04</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">重要事項説明・売買契約締結</div>
                            <div class="p-tab-contents__item-txt">宅地建物取引士が重要事項説明を読み上げます。<br>
                                一緒に物件内容・契約内容を確認し、ご了承いただいたうえで、売買契約の締結をいたします。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>05</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">住宅ローン本申し込み</div>
                            <div class="p-tab-contents__item-txt">金融機関へローンの申し込みをします。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>06</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">金銭消費貸借契約</div>
                            <div class="p-tab-contents__item-txt">金融機関にて、住宅ローンの契約をします。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>07</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">決済・登記</div>
                            <div class="p-tab-contents__item-txt">金融機関にて、お支払いや物件の引渡しなどのお手続きをします。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__text">
                        <p>引渡し・引越し</p>
                    </div>
                </div>
                <div class="p-tab-contents__items">
                    <p>賃貸契約の流れを知って、<br class="u-hidden-pc u-hidden-tab">スムーズな部屋探しをしましょう。</p>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>01</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">賃貸の相談</div>
                            <div class="p-tab-contents__item-txt">お店の窓口はもちろん、メールやオンラインでのご相談も受け付けております。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>02</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">物件の内覧</div>
                            <div class="p-tab-contents__item-txt">お客様のライフスタイルに合わせた物件をご紹介いたします。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>03</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">申し込み・審査</div>
                            <div class="p-tab-contents__item-txt">入居者申し込みと入居審査に必要な書類を提出していただきます。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>04</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">重要事項説明・契約</div>
                            <div class="p-tab-contents__item-txt">契約前に重要事項の説明を受けて物件内容や契約内容を、一緒に確認します。<br>
                                ご納得いただいたうえで、契約書に署名押印をお願いいたします。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>05</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">入金</div>
                            <div class="p-tab-contents__item-txt">契約前に敷金や礼金など、必要な費用をあらかじめ用意しておくとスムーズです。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__text">
                        <p>引越し・ご入居</p>
                    </div>
                </div>
                <div class="p-tab-contents__items">
                    <p>不動産の売却を検討する際には、<br class="u-hidden-pc u-hidden-tab">売却の流れをしっかり理解しましょう。</p>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>01</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">売却の相談</div>
                            <div class="p-tab-contents__item-txt">お店の窓口はもちろん、メールやオンラインでのご相談も受け付けております。<br>
                                お客様のご希望など丁寧にヒアリングさせていただきます。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>02</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">査定依頼</div>
                            <div class="p-tab-contents__item-txt">どのくらいの価格になるのか査定させていただきますので、まずはご依頼ください。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>03</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">不動産の確認・現地調査</div>
                            <div class="p-tab-contents__item-txt">現地にお伺いし、周辺環境や近隣の物件価格など、あらゆる面から調査し、査定いたします。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>04</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">媒介契約のご締結</div>
                            <div class="p-tab-contents__item-txt">
                                不動産の売却を正式にご依頼いただける際には、国土交通省が定めた標準媒介契約約款に基づく媒介契約を締結していただきます。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>05</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">売却活動開始・活動報告</div>
                            <div class="p-tab-contents__item-txt">
                                自社ホームページや提携している大手ネットワークサイト、広告や営業など、お客様のご希望に合わせた販売活動を行っていきます。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>06</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">売買契約の締結</div>
                            <div class="p-tab-contents__item-txt">
                                購入希望者より【不動産買付申込書】を受領し、売買価格・引渡日・その他条件等双方が合意し、重要事項説明書を作成。宅地建物取引士が重要事項説明を読み上げ、内容を確認しながら了承したうえで、売買契約の締結をいたします。
                            </div>
                        </div>
                    </div>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>07</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">引き渡しの準備</div>
                            <div class="p-tab-contents__item-txt">引渡日までに買主様へ物件を引き渡せるように準備していきます。<br>
                                住宅ローンなど抵当権がある場合は抹消する準備も必要です。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__item">
                        <div class="p-tab-contents__item-number">
                            <p>STEP</p>
                            <p>08</p>
                        </div>
                        <div class="p-tab-contents__item-body">
                            <div class="p-tab-contents__item-ttl">残代金の決済・引き渡し</div>
                            <div class="p-tab-contents__item-txt">
                                所有権移転登記・抵当権抹消等、残代金の支払い、固定資産税額の清算、鍵・関係書類の引渡・諸費用の支払いをします。</div>
                        </div>
                    </div>
                    <div class="p-tab-contents__text">
                        <p>売買契約完了</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="l-qa" id="qa">
    <div class="p-qa">
        <div class="c-section__ttl">
            <h2>Q&A</h2>
            <p>よくある質問</p>
        </div>

        <dl class="p-qa__accordion js-accordion">
            <h3>購入について</h3>
            <div class="p-qa__accordion-item js-accordion-trigger">
                <dt class="p-qa__accordion-title"><img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-q.svg" alt="">不動産購入時の諸経費はどれくらいかかりますか？</dt>
                <dd class="p-qa__accordion-content"><img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-a.svg" alt="">
                    諸経費は不動産購入価格の7〜10％が目安です。不動産購入価格以外にかかる諸経費は、印紙税、仲介手数料、不動産の所有者変更や住宅ローンの担保権となる抵当権の設定等の登記費用、固定資産税の清算金、場合によっては不動産取得税も発生します。あくまで目安になりますので、詳しくは直接ご相談ください。
                </dd>
            </div>
            <div class="p-qa__accordion-item js-accordion-trigger">
                <dt class="p-qa__accordion-title"><img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-q.svg" alt="">現地見学は週末しかできませんか？</dt>
                <dd class="p-qa__accordion-content"><img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-a.svg" alt="">
                    できる限りお客様のご都合に合わせて見学できるように、売主様と調整させていただきます。<br>
                    弊社スタッフがご案内いたしますので、お気軽にご相談ください。
                </dd>
            </div>
            <div class="p-qa__accordion-item js-accordion-trigger">
                <dt class="p-qa__accordion-title"><img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-q.svg" alt="">頭金なしでも不動産の購入はできますか？
                </dt>
                <dd class="p-qa__accordion-content"><img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-a.svg" alt="">
                    不動産購入価格+諸経費も含めて、住宅ローンを組むことは可能です。ただし、不動産売買契約時にご用意いただく不動産購入手付金に関しましては、現金でご用意いただく必要がございます。住宅ローンについてもご相談を受け付けておりますので、お気軽にお問い合わせください。
                </dd>
            </div>
            <div class="p-qa__accordion-item js-accordion-trigger">
                <dt class="p-qa__accordion-title"><img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-q.svg" alt="">現地見学は週末しかできませんか？</dt>
                <dd class="p-qa__accordion-content"><img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-a.svg" alt="">宅地建物取引業法上、売主様・買主様に対して売買物件や取引条件に関する一定の重要事項の説明をすることが義務付けられています。
                </dd>
            </div>
        </dl>
        <dl class="p-qa__accordion js-accordion">
            <h3>売却について</h3>
            <div class="p-qa__accordion-item js-accordion-trigger">
                <dt class="p-qa__accordion-title"><img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-q.svg" alt="">家に住んだまま売却活動はできますか？
                </dt>
                <dd class="p-qa__accordion-content"><img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-a.svg" alt="">
                    可能です。実際に住みながら売却されるお客様が多くいらっしゃいます。<br>
                    購入希望者が見学に来られた際にはご協力をお願いいたします。
                </dd>
            </div>
            <div class="p-qa__accordion-item js-accordion-trigger">
                <dt class="p-qa__accordion-title"><img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-q.svg" alt="">折込チラシやインターネットの掲載で、費用の負担はあるのですか？</dt>
                <dd class="p-qa__accordion-content"><img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-a.svg" alt="">
                    売主様に広告費を負担していただくということはございません。<br>
                    基本的には買主様を探すための費用は当社にて負担いたします。
                </dd>
            </div>
            <div class="p-qa__accordion-item js-accordion-trigger">
                <dt class="p-qa__accordion-title"><img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-q.svg" alt="">購入希望者が突然訪問してくることはありますか？</dt>
                <dd class="p-qa__accordion-content p-qa__accordion-content-line"><img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-a.svg" alt="">
                    ありません。事前に売主様へ予定を連絡させていただき、訪問させていただきます。
                </dd>
            </div>
            <div class="p-qa__accordion-item js-accordion-trigger">
                <dt class="p-qa__accordion-title"><img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-q.svg" alt="">媒介契約とは、どのようなものですか？
                </dt>
                <dd class="p-qa__accordion-content"><img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-a.svg" alt="">媒介契約には「専任媒介契約」「専属専任媒介契約」「一般媒介契約」の3つがあります。<br>
                    各契約の種別と特徴については、下記をご参照ください。
                    <div class="p-qa__accordion-content-body">
                        <div class="p-qa__accordion-content-ttl">専任媒介契約</div>
                        <div class="p-qa__accordion-content-txt">１社の不動産会社に売却を依頼するものです。<br>
                            買主を自分で見つけ、売買契約を締結することもできますが、依頼した不動産会社の売却活動にかかった費用負担が発生する場合があります。<br>
                            不動産会社は指定流通機構（REINS）に物件情報を登録し、依頼主に業務状況を報告する義務があります。</div>
                        <div class="p-qa__accordion-content-img">
                            <img class="u-hidden-sp" src="<?php echo get_template_directory_uri() ?>/assets/img/qa/img1.png" alt="">
                            <img class="u-hidden-pc u-hidden-tab" src="<?php echo get_template_directory_uri() ?>/assets/img/qa/img1-sp.png" alt="">
                        </div>
                    </div>
                    <div class="p-qa__accordion-content-body">
                        <div class="p-qa__accordion-content-ttl">専属専任媒介契約</div>
                        <div class="p-qa__accordion-content-txt">
                            １社の不動産会社に売却を依頼し、媒介契約の有効期間中は他の不動産会社に仲介を依頼することはできません。<br>
                            また、依頼をした不動産会社を通さずに、自分で見つけた買主と契約することもできません。<br>
                            不動産会社は指定流通機構（REINS）に物件情報を登録し、依頼主に業務状況を報告する義務があります。</div>
                        <div class="p-qa__accordion-content-img">
                            <img class="u-hidden-sp" src="<?php echo get_template_directory_uri() ?>/assets/img/qa/img2.png" alt="">
                            <img class="u-hidden-pc u-hidden-tab" src="<?php echo get_template_directory_uri() ?>/assets/img/qa/img2-sp.png" alt="">
                        </div>
                    </div>
                    <div class="p-qa__accordion-content-body">
                        <div class="p-qa__accordion-content-ttl">一般媒介契約</div>
                        <div class="p-qa__accordion-content-txt">複数の不動産会社に売却を依頼するものです。<br>
                            買主を自分で見つけ、売買契約を締結することもできます。<br>
                            なお、依頼する他の不動産会社名を明示する「明示型」と明示しない「非明示型」があります。<br>
                            不動産会社は売却活動を行いますが、依頼主への報告義務はありません。</div>
                        <div class="p-qa__accordion-content-img">
                            <img class="u-hidden-sp" src="<?php echo get_template_directory_uri() ?>/assets/img/qa/img3.png" alt="">
                            <img class="u-hidden-pc u-hidden-tab" src="<?php echo get_template_directory_uri() ?>/assets/img/qa/img3-sp.png" alt="">
                        </div>
                    </div>
                </dd>
            </div>
            <div class="p-qa__accordion-item js-accordion-trigger">
                <dt class="p-qa__accordion-title"><img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-q.svg" alt="">売却に費用はかかりますか？</dt>
                <dd class="p-qa__accordion-content">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/qa/icon-a.svg" alt="">不動産の売却には必要な経費や税金などがかかってきます。売却後のお手取金額は、売却金額から諸費用を引いた残りの金額となります。不動産売却にかかる費用を、前もって確認しておきましょう。
                    <div class="p-qa__accordion-img">
                        <img class="u-hidden-sp" src="<?php echo get_template_directory_uri() ?>/assets/img/qa/img4.png" alt="">
                        <img class="u-hidden-pc u-hidden-tab" src="<?php echo get_template_directory_uri() ?>/assets/img/qa/img4-sp.png" alt="">
                    </div>
                </dd>
            </div>
        </dl>
    </div>
</section>

<section class="l-TopAbout" id="about">
    <div class="p-TopAbout">
        <div class="p-TopAbout__wrap">
            <div class="c-section__ttl">
                <h2>ABOUT US</h2>
                <p>私たちについて</p>
            </div>
            <p class="p-TopAbout__wrap-text">お客様の<span class="c-brackets__small">
                    <span class="c-brackets__inner">ココ</span>
                </span>を見つけ、<br>喜んでいただくことが最大の誇り</p>
            <p class="p-TopAbout__wrap-text">当社では、土地の査定から売買、建物の建設、そしてアフターメンテナンスまで一貫して行っております。
                長年建設業に携わってきたノウハウを活かし、物件の真の価値を見極め、ご提案いたします。</p>
        </div>
        <div class="p-TopAbout__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/TopAbout/about-img.png" alt="">
        </div>
    </div>

    <div class="p-TopAbout__bottom">
        <div>
            <div class="p-TopAbout__bottom-img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/TopAbout/service-img.png" alt="">
            </div>
            <a href="#" class="p-TopAbout__bottom-text">
                <p>SERVICE</p>
                <p>事業内容</p>
            </a>
        </div>
        <div>
            <div class="p-TopAbout__bottom-img"><img src="<?php echo get_template_directory_uri() ?>/assets/img/TopAbout/company-img.png" alt=""></div>
            <a href="#" class="p-TopAbout__bottom-text">
                <p>COMPANY</p>
                <p>会社概要</p>
            </a>
        </div>
    </div>
</section>

<section class="l-access" id="access">
    <div class="p-access">
        <div class="c-section__ttl">
            <h2>ACCESS</h2>
            <p>アクセス</p>
        </div>
        <p>〒422-8072　静岡市駿河区小黒3-1-35</p>

        <div class="p-access__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3269.4804713188514!2d138.4010586760127!3d34.9696279728253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601a361c0b1a4279%3A0x44fd2e49f0fe518b!2z44CSNDIyLTgwNzIg6Z2Z5bKh55yM6Z2Z5bKh5biC6ae_5rKz5Yy65bCP6buS77yT5LiB55uu77yR4oiS77yT77yV!5e0!3m2!1sja!2sjp!4v1711333264919!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<?php get_footer(); ?>