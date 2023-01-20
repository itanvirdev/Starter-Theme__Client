<?php

/**
 * starter_scripts description
 * @return [type] [description]
 */
function starter_scripts() {

    /**
     * all css files
     */

    wp_enqueue_style('starter-fonts', starter_fonts_url(), [], '1.0.0');

    if (is_rtl()) {
        wp_enqueue_style('bootstrap-rtl', STARTER_THEME_CSS_DIR . 'bootstrap.rtl.min.css', []);
    } else {
        wp_enqueue_style('bootstrap', STARTER_THEME_CSS_DIR . 'bootstrap.min.css', []);
    }
    wp_enqueue_style('font-awesome-pro', STARTER_THEME_CSS_DIR . 'font-awesome-pro.css', []);
    wp_enqueue_style('meanmenu', STARTER_THEME_CSS_DIR . 'meanmenu.css', []);
    wp_enqueue_style('animate', STARTER_THEME_CSS_DIR . 'animate.css', []);
    wp_enqueue_style('owl-carousel', STARTER_THEME_CSS_DIR . 'owl.carousel.min.css', []);
    wp_enqueue_style('swiper-bundle', STARTER_THEME_CSS_DIR . 'swiper-bundle.css', []);
    wp_enqueue_style('backtotop', STARTER_THEME_CSS_DIR . 'backtotop.css', []);
    wp_enqueue_style('magnific-popup', STARTER_THEME_CSS_DIR . 'magnific-popup.min.css', []);
    wp_enqueue_style('nice-select', STARTER_THEME_CSS_DIR . 'nice-select.css', []);
    // wp_enqueue_style('spacing', STARTER_THEME_CSS_DIR . 'spacing.css', []);
    wp_enqueue_style('starter-core', STARTER_THEME_CSS_DIR . 'starter-core.css', []);
    wp_enqueue_style('starter-unit', STARTER_THEME_CSS_DIR . 'starter-unit.css', []);
    wp_enqueue_style('starter-custom', STARTER_THEME_CSS_DIR . 'starter-custom.css', []);
    wp_enqueue_style('starter-style', get_stylesheet_uri());

    // all js
    wp_enqueue_script('bootstrap-bundle', STARTER_THEME_JS_DIR . 'bootstrap.bundle.min.js', ['jquery'], '', true);
    wp_enqueue_script('waypoints', STARTER_THEME_JS_DIR . 'waypoints.js', ['jquery'], false, true);
    wp_enqueue_script('meanmenu', STARTER_THEME_JS_DIR . 'meanmenu.js', ['jquery'], false, true);
    wp_enqueue_script('counterup', STARTER_THEME_JS_DIR . 'counterup.js', ['jquery'], false, true);
    wp_enqueue_script('swiper-bundle', STARTER_THEME_JS_DIR . 'swiper-bundle.js', ['jquery'], false, true);
    wp_enqueue_script('owl-carousel', STARTER_THEME_JS_DIR . 'owl.carousel.min.js', ['jquery'], false, true);
    wp_enqueue_script('magnific-popup', STARTER_THEME_JS_DIR . 'magnific-popup.min.js', ['jquery'], '', true);
    wp_enqueue_script('backtotop', STARTER_THEME_JS_DIR . 'backtotop.js', ['jquery'], '', true);
    wp_enqueue_script('nice-select', STARTER_THEME_JS_DIR . 'nice-select.js', ['jquery'], '', true);
    wp_enqueue_script('wow', STARTER_THEME_JS_DIR . 'wow.js', ['jquery'], false, true);
    wp_enqueue_script('isotope-pkgd', STARTER_THEME_JS_DIR . 'isotope-pkgd.js', ['imagesloaded'], false, true);
    wp_enqueue_script('starter-main', STARTER_THEME_JS_DIR . 'main.js', ['jquery'], false, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'starter_scripts');

/*
Register Fonts
 */
function starter_fonts_url() {
    $font_url = '';
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ('off' !== _x('on', 'Google font: on or off', 'starter')) {
        $font_url = 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap';
    }
    return $font_url;
}
