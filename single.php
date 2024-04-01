<?php get_header(); ?>

<section class="l-single" id="single">
    <div class="p-single">
        <div class="breadcrumbs p-single__breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
        <div class="p-single__info">
            <?php $category = get_the_category(); ?>
            <?php if ($category[0]) : ?>
                <div class="p-single__label"><?php echo $category[0]->cat_name; ?></div>
            <?php endif; ?>
            <div class="p-single__address"><?php the_title(); ?></div>
            <?php if (get_field('price')) : ?>
                <div class="p-single__price"><?php the_field('price'); ?></div>
            <?php endif; ?>
            <?php if (get_field('access')) : ?>
                <div class="p-single__access"><?php the_field('access'); ?></div>
            <?php endif; ?>
            <div class="p-swiper">
                <div class="swiper-wrap">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            <?php if (get_field('img_1')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_1'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_2')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_2'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_3')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_3'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_4')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_4'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_5')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_5'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_6')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_6'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_7')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_7'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_8')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_8'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_9')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_9'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_10')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_10'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_11')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_11'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_12')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_12'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_13')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_13'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_14')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_14'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_15')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_15'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_16')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_16'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_17')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_17'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_18')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_18'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_19')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_19'); ?>">
                                </div>
                            <?php endif; ?>
                            <?php if (get_field('img_20')) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php the_field('img_20'); ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php if (get_field('img_1')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_1'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_2')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_2'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_3')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_3'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_4')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_4'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_5')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_5'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_6')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_6'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_7')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_7'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_8')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_8'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_9')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_9'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_10')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_10'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_11')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_11'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_12')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_12'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_13')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_13'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_14')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_14'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_15')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_15'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_16')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_16'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_17')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_17'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_18')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_18'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_19')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_19'); ?>">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('img_20')) : ?>
                            <div class="swiper-slide">
                                <img src="<?php the_field('img_20'); ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="p-single__text">
                    <p><?php the_content(); ?></p>
                </div>
                <div class="p-single__table">
                    <table>
                        <tbody>
                            <?php if (get_field('table_location')) : ?>
                                <tr>
                                    <th>所在地</th>
                                    <td><?php the_field('table_location'); ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if (get_field('table_price')) : ?>
                                <tr>
                                    <th>価格</th>
                                    <td><span><?php the_field('table_price'); ?></span>万円</td>
                                </tr>
                            <?php endif; ?>
                            <?php if (get_field('table_features')) : ?>
                                <tr>
                                    <th>特徴</th>
                                    <td><?php the_field('table_features'); ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if (get_field('table_land')) : ?>
                                <tr>
                                    <th>土地</th>
                                    <td><?php the_field('table_land'); ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if (get_field('table_purpose')) : ?>
                                <tr>
                                    <th>用途</th>
                                    <td><?php the_field('table_purpose'); ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if (get_field('table_building')) : ?>
                                <tr>
                                    <th>建物</th>
                                    <td><?php the_field('table_building'); ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if (get_field('table_connecting-road')) : ?>
                                <tr>
                                    <th>接道</th>
                                    <td><?php the_field('table_connecting-road'); ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if (get_field('table_facility')) : ?>
                                <tr>
                                    <th>設備</th>
                                    <td><?php the_field('table_facility'); ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if (get_field('table_remarks')) : ?>
                                <tr>
                                    <th>備考</th>
                                    <td><?php the_field('table_remarks'); ?></td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="p-single__btn">
        <div class="p-single__btn-inner">
            <?php if (get_previous_post()) : ?>
                <div class="p-single__btn-prev"><?php previous_post_link('%link', '前へ'); ?></div>
            <?php endif; ?>
            <a href="<?php echo esc_url(home_url('/#search')); ?>" class="p-single__btn-back">一覧へ戻る</a>
            <?php if (get_next_post()) : ?>
                <div class="p-single__btn-next"><?php next_post_link('%link', '次へ'); ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>