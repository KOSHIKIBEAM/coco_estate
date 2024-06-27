<?php get_header(); ?>
<?php get_template_part('template-parts/fv'); ?>

<section class="l-search" id="searchSection">
    <div class="p-search">
        <div class="c-section__ttl">
            <h2>SEARCH</h2>
            <p>物件情報</p>
        </div>
        <div class="p-search__btn">
            <div class="p-search__btn-buy">
                <p>買う</p>
                <div class="p-search__btn-buy-btn">
                    <a href="/category/land#searchSection">土地</a>
                    <a href="/category/new_house#searchSection">新築戸建</a>
                    <a href="/category/existing_home#searchSection">中古戸建</a>
                    <a href="/category/newly_built_apartment#searchSection">新築マンション</a>
                    <a href="/category/used_apartment#searchSection">中古マンション</a>
                </div>
            </div>
            <div class="p-search__btn-borrow">
                <p>借りる</p>
                <div class="p-search__btn-borrow-btn">
                    <a class="active" href="/category/rental#searchSection">賃貸<span>(マンション・アパート・一戸建て)</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('template-parts/result'); ?>
<?php get_template_part('template-parts/flow'); ?>
<?php get_template_part('template-parts/qa'); ?>
<?php get_template_part('template-parts/top-about'); ?>
<?php get_template_part('template-parts/access'); ?>

<?php get_footer(); ?>