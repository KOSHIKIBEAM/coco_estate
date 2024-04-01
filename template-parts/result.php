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