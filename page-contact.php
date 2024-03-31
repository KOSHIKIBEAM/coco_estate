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
            <p>以下のフォームに入力いただきご確認ください。</p>
        </div>
        <div class="p-contactForm__list">
            <p class="active">【STEP１】<br class="u-hidden-pc u-hidden-tab"> 入力</p>
            <p>【STEP２】<br class="u-hidden-pc u-hidden-tab"> 確認</p>
            <p>【STEP３】<br class="u-hidden-pc u-hidden-tab"> 完了</p>
        </div>
        <form class="p-contactForm__form">
            <dl>
                <dt>
                    <p>お名前</p><span>必須</span>
                </dt>
                <dd>
                    <input type="text" name="name" autocomplete="name" placeholder="例：山田　太郎" required />
                </dd>
            </dl>
            <dl>
                <dt>
                    <p>フリガナ</p><span>必須</span>
                </dt>
                <dd>
                    <input type="text" value="" placeholder="例：ヤマダ　タロウ" required>
                </dd>
            </dl>
            <dl>
                <dt>
                    <p>メールアドレス</p><span>必須</span>
                </dt>
                <dd>
                    <input class="" type="email" placeholder="例：sample@example.com" autocomplete="email" required>
                </dd>
            </dl>
            <dl>
                <dt>
                    <p>電話番号</p><span>必須</span>
                </dt>
                <dd>
                    <input type="tel" name="tel" placeholder="例：0123-456-7890" pattern="\d{2,4}-\d{2,4}-\d{3,4}" maxlength="13" required>
                </dd>
            </dl>
            <dl class="p-contactForm__address">
                <dt>
                    <p>住所</p><span>必須</span>
                </dt>
                <dd>
                    <div class="post">
                        <div class="post-wrap">
                            <p>〒</p>
                            <input type="text" autocomplete="postal-code" required>
                        </div>
                        <p>半角数字7桁(ハイフンなし)</p>
                    </div>
                    <div class="address-level1">
                        <p>都道府県</p>
                        <select name="pref" required>
                            <option value="" selected></option>
                            <option value="1">北海道</option>
                            <option value="2">青森県</option>
                            <option value="3">岩手県</option>
                            <option value="4">宮城県</option>
                            <option value="5">秋田県</option>
                            <option value="6">山形県</option>
                            <option value="7">福島県</option>
                            <option value="8">茨城県</option>
                            <option value="9">栃木県</option>
                            <option value="10">群馬県</option>
                            <option value="11">埼玉県</option>
                            <option value="12">千葉県</option>
                            <option value="13">東京都</option>
                            <option value="14">神奈川県</option>
                            <option value="15">新潟県</option>
                            <option value="16">富山県</option>
                            <option value="17">石川県</option>
                            <option value="18">福井県</option>
                            <option value="19">山梨県</option>
                            <option value="20">長野県</option>
                            <option value="21">岐阜県</option>
                            <option value="22">静岡県</option>
                            <option value="23">愛知県</option>
                            <option value="24">三重県</option>
                            <option value="25">滋賀県</option>
                            <option value="26">京都府</option>
                            <option value="27">大阪府</option>
                            <option value="28">兵庫県</option>
                            <option value="29">奈良県</option>
                            <option value="30">和歌山県</option>
                            <option value="31">鳥取県</option>
                            <option value="32">島根県</option>
                            <option value="33">岡山県</option>
                            <option value="34">広島県</option>
                            <option value="35">山口県</option>
                            <option value="36">徳島県</option>
                            <option value="37">香川県</option>
                            <option value="38">愛媛県</option>
                            <option value="39">高知県</option>
                            <option value="40">福岡県</option>
                            <option value="41">佐賀県</option>
                            <option value="42">長崎県</option>
                            <option value="43">熊本県</option>
                            <option value="44">大分県</option>
                            <option value="45">宮崎県</option>
                            <option value="46">鹿児島県</option>
                            <option value="47">沖縄県</option>
                        </select>
                    </div>
                    <div class="address-level2">
                        <p>市区町村</p>
                        <input type="text" placeholder="例：静岡市駿河区小黒3-1-35" autocomplete="address-level2" required>
                    </div>
                    <div class="address-level3">
                        <p>建物名・部屋番号</p>
                        <input type="text" placeholder="例：○○ビル 201" required>
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <p>お問い合わせ内容</p><span>必須</span>
                </dt>
                <dd>
                    <textarea required></textarea>
                </dd>
            </dl>
            <div class="agree">
                <label><input type="checkbox" name="" required>個人情報保護方針に同意します。</label>
            </div>
            <div class="submit">
                <input class="c-submit__btn send" type="submit" value="送信内容を確認する">
            </div>
        </form>
        <div class="p-contactForm__personal-info">
            <p>個人情報のお取り扱いについて</p>
            <p>入力された個人情報は、当社からのご連絡・資料発送・各種イベント等の連絡を目的で収集するものであり、原則として、本人の承諾なく第三者に開示・提供いたしません。</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>