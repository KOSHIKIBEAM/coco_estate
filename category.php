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
                    <a href="/category/rental#searchSection">賃貸<span>(マンション・アパート・一戸建て)</span></a>
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
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/result/item3.png" alt="no-img">
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

    <a href="#result" class="p-result__btn">
        VIEW MORE
    </a>
</section>
<?php get_template_part('template-parts/flow'); ?>
<?php get_template_part('template-parts/qa'); ?>
<?php get_template_part('template-parts/top-about'); ?>
<?php get_template_part('template-parts/access'); ?>

<?php get_footer(); ?>