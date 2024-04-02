<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        (function(d) {
            var config = {
                    kitId: 'svz0ahl',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <title>ココ・エステート株式会社</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php wp_head() ?>
</head>

<body <?php body_class(['drawer', 'drawer--left']); ?>>
    <header class="l-header">
        <div class="p-header">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/header/header_logo.png" alt="logo"></a>
            <?php if (has_nav_menu('header_menu')) : //メニューがあるかどうか 
            ?>
                <nav class="p-header__nav u-hidden-tab u-hidden-sp">
                    <?php
                    wp_nav_menu( //メニューを表示
                        [
                            'theme_location' => 'header_menu',
                            'menu_class'     => 'p-header__nav-items',
                        ]
                    );
                    ?>
                </nav>
            <?php endif; ?>
            <button class="p-drawer__icon js-drawer for-drawer" type="button" data-target="for-drawer">
                <span class="p-drawer__bars">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button><!-- /drawer-icon -->

            <?php if (has_nav_menu('drawer_menu')) : ?>
                <div class="p-drawer__content-cover for-drawer">

                    <a href="<?php echo esc_url(home_url('/')); ?>" class="p-drawer__logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/header/header_logo.png" alt="logo"></a>

                    <?php
                    wp_nav_menu(
                        [
                            'theme_location' => 'drawer_menu',
                            'menu_class'     => 'p-drawer__content-list',
                        ]
                    );
                    ?>
                </div><!-- /drawer-content -->
            <?php endif; ?>
        </div>
    </header>