<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package starter
 */

/** 
 *
 * starter header
 */

// function starter_check_header() {

//     $starter_page_header_style = function_exists('get_field') ? get_field('page_header_style') : NULL;
//     $starter_default_header_style = get_theme_mod('choose_default_header', 'header-style-1');

//     if ($starter_page_header_style == 'header-style-1') {
//         get_template_part('template-parts/header/header-1');
//     } elseif ($starter_page_header_style == 'header-style-2') {
//         get_template_part('template-parts/header/header-2');
//     } elseif ($starter_page_header_style == 'header-style-3') {
//         get_template_part('template-parts/header/header-3');
//     } else {

//         /** default header style **/
//         if ($starter_default_header_style == 'header-style-2') {
//             get_template_part('template-parts/header/header-2');
//         } elseif ($starter_default_header_style == 'header-style-3') {
//             get_template_part('template-parts/header/header-3');
//         } else {
//             get_template_part('template-parts/header/header-1');
//         }
//     }
// }
// add_action('starter_header_style', 'starter_check_header', 10);


/**
 * [starter_header_lang description]
 * @return [type] [description]
 */
function starter_header_lang_default() {
    $starter_header_lang = get_theme_mod('header_lang', false);
    if ($starter_header_lang) : ?>

        <select>
            <option><a href="javascript:void(0)" class="lang__btn"><?php print esc_html__('English', 'starter'); ?> </a></option>
            <?php do_action('starter_language'); ?>
        </select>

    <?php endif; ?>
<?php
}

/**
 * [starter_language_list description]
 * @return [type] [description]
 */
function _starter_language($mar) {
    return $mar;
}
function starter_language_list() {

    $mar = '';
    $languages = apply_filters('wpml_active_languages', NULL, 'orderby=id&order=desc');

    if (!empty($languages)) {
        $mar = '<ul>';
        foreach ($languages as $lan) {
            $active = $lan['active'] == 1 ? 'active' : '';
            $mar .= '<li class="' . $active . '"><a href="' . $lan['url'] . '">' . $lan['translated_name'] . '</a></li>';
        }
        $mar .= '</ul>';
    } else {
        //remove this code when send themeforest reviewer team
        $mar .= '<option>' . esc_html__('Bangla', 'starter') . '</option>';
        $mar .= '<option>' . esc_html__('French', 'starter') . '</option>';
    }
    print _starter_language($mar);
}
add_action('starter_language', 'starter_language_list');


// Header logo
function starter_header_logo() { ?>
    <?php
    $starter_page_sec_logo_on = function_exists('get_field') ? get_field('is_enable_sec_logo') : NULL;

    $starter_logo = get_template_directory_uri() . '/assets/img/logo/logo-white.png';
    $starter_logo_black = get_template_directory_uri() . '/assets/img/logo/logo-black.png';

    $starter_site_logo = get_theme_mod('primary_logo', $starter_logo);
    $starter_secondary_logo = get_theme_mod('secondary_logo', $starter_logo_black);
    ?>

    <?php if (!empty($starter_page_sec_logo_on)) : ?>
        <a class="secondary-logo" href="<?php print esc_url(home_url('/')); ?>">
            <img src="<?php print esc_url($starter_secondary_logo); ?>" alt="<?php print esc_attr__('logo', 'starter'); ?>" />
        </a>
    <?php else : ?>
        <a class="standard-logo" href="<?php print esc_url(home_url('/')); ?>">
            <img src="<?php print esc_url($starter_site_logo); ?>" alt="<?php print esc_attr__('logo', 'starter'); ?>" />
        </a>
    <?php endif; ?>
<?php
}

// Header sticky logo
function starter_header_sticky_logo() { ?>
    <?php
    $starter_logo_black = get_template_directory_uri() . '/assets/img/logo/logo-black.png';
    $starter_secondary_logo = get_theme_mod('secondary_logo', $starter_logo_black);
    ?>
    <a class="sticky-logo" href="<?php print esc_url(home_url('/')); ?>">
        <img src="<?php print esc_url($starter_secondary_logo); ?>" alt="<?php print esc_attr__('logo', 'starter'); ?>" />
    </a>
    <?php
}

// Header Mobile Logo
function starter_mobile_logo() {
    // side info
    $starter_mobile_logo_hide = get_theme_mod('starter_mobile_logo_hide', false);

    $starter_site_logo = get_theme_mod('primary_logo', get_template_directory_uri() . '/assets/img/logo/logo-white.png');

    if (!empty($starter_mobile_logo_hide)) : ?>
        <div class="side__logo mb-25">
            <a class="sideinfo-logo" href="<?php print esc_url(home_url('/')); ?>">
                <img src="<?php print esc_url($starter_site_logo); ?>" alt="<?php print esc_attr__('logo', 'starter'); ?>" />
            </a>
        </div>
    <?php endif;
}

/**
 * [starter_header_social_profiles description]
 * @return [type] [description]
 */
function starter_header_social_profiles() {
    $starter_header_fb_link = get_theme_mod('header_fb_link', __('https://facebook.com/', 'starter'));
    $starter_header_twitter_link = get_theme_mod('header_twitter_link', __('https://twitter.com/', 'starter'));
    $starter_header_linkedin_link = get_theme_mod('header_linkedin_link', __('https://linkedin.com/', 'starter'));
    $starter_header_instagram_link = get_theme_mod('header_instagram_link', __('https://instagram.com/', 'starter'));
    $starter_header_youtube_link = get_theme_mod('header_youtube_link', __('https://youtube.com/', 'starter'));
    ?>
    <ul>
        <?php if (!empty($starter_header_fb_link)) : ?>
            <li><a href="<?php print esc_url($starter_header_fb_link); ?>"><span><i class="fab fa-facebook-f"></i></span></a></li>
        <?php endif; ?>

        <?php if (!empty($starter_header_twitter_link)) : ?>
            <li><a href="<?php print esc_url($starter_header_twitter_link); ?>"><span><i class="fab fa-twitter"></i></span></a></li>
        <?php endif; ?>

        <?php if (!empty($starter_header_instagram_link)) : ?>
            <li><a href="<?php print esc_url($starter_header_instagram_link); ?>"><span><i class="fab fa-instagram"></i></span></a></li>
        <?php endif; ?>

        <?php if (!empty($starter_header_linkedin_link)) : ?>
            <li><a href="<?php print esc_url($starter_header_linkedin_link); ?>"><span><i class="fab fa-linkedin-in"></i></span></a></li>
        <?php endif; ?>

        <?php if (!empty($starter_header_youtube_link)) : ?>
            <li><a href="<?php print esc_url($starter_header_youtube_link); ?>"><span><i class="fab fa-youtube"></i></span></a></li>
        <?php endif; ?>
    </ul>

<?php
}

function starter_footer_social_profiles() {
    $starter_footer_fb_link = get_theme_mod('footer_fb_link', __('#', 'starter'));
    $starter_footer_twitter_link = get_theme_mod('footer_twitter_link', __('#', 'starter'));
    $starter_footer_instagram_link = get_theme_mod('footer_instagram_link', __('#', 'starter'));
    $starter_footer_linkedin_link = get_theme_mod('footer_linkedin_link', __('#', 'starter'));
    $starter_footer_youtube_link = get_theme_mod('footer_youtube_link', __('#', 'starter'));
?>
    <ul>
        <?php if (!empty($starter_footer_fb_link)) : ?>
            <li>
                <a href="<?php print esc_url($starter_footer_fb_link); ?>">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($starter_footer_twitter_link)) : ?>
            <li>
                <a href="<?php print esc_url($starter_footer_twitter_link); ?>">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($starter_footer_instagram_link)) : ?>
            <li>
                <a href="<?php print esc_url($starter_footer_instagram_link); ?>">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($starter_footer_linkedin_link)) : ?>
            <li>
                <a href="<?php print esc_url($starter_footer_linkedin_link); ?>">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </li>
        <?php endif; ?>

        <?php if (!empty($starter_footer_youtube_link)) : ?>
            <li>
                <a href="<?php print esc_url($starter_footer_youtube_link); ?>">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
        <?php endif; ?>
    </ul>
<?php
}

/**
 * [starter_header_menu description]
 * @return [type] [description]
 */
function starter_header_menu() {

    wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'fallback_cb'    => 'Starter_Navwalker_Class::fallback',
        'walker'         => new Starter_Navwalker_Class,
    ]);
}

/**
 * [starter_header_menu description]
 * @return [type] [description]
 */
function starter_mobile_menu() {

    $starter_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'menu_id'        => 'mobile-menu-active',
        'echo'           => false,
    ]);

    $starter_menu = str_replace("menu-item-has-children", "menu-item-has-children has-children", $starter_menu);
    echo wp_kses_post($starter_menu);
?>
<?php
}

/**
 * [starter_footer_menu description]
 * @return [type] [description]
 */
function starter_footer_menu() {
    wp_nav_menu([
        'theme_location' => 'footer-menu',
        'menu_class'     => 'm-0',
        'container'      => '',
        'fallback_cb'    => 'Starter_Navwalker_Class::fallback',
        'walker'         => new Starter_Navwalker_Class,
    ]);
}

// /**
//  *
//  * starter footer
//  */
// add_action('starter_footer_style', 'starter_check_footer', 10);

// function starter_check_footer() {
//     $starter_page_footer_style = function_exists('get_field') ? get_field('page_footer_style') : NULL;

//     $starter_default_footer_style = get_theme_mod('choose_default_footer', 'footer-style-1');

//     if ($starter_page_footer_style == 'footer-style-1') {
//         get_template_part('template-parts/footer/footer-1');
//     } elseif ($starter_page_footer_style == 'footer-style-2') {
//         get_template_part('template-parts/footer/footer-2');
//     } elseif ($starter_page_footer_style == 'footer-style-3') {
//         get_template_part('template-parts/footer/footer-3');
//     } elseif ($starter_page_footer_style == 'footer-style-4') {
//         get_template_part('template-parts/footer/footer-4');
//     } else {

//         /** default footer style **/
//         if ($starter_default_footer_style == 'footer-style-2') {
//             get_template_part('template-parts/footer/footer-2');
//         } elseif ($starter_default_footer_style == 'footer-style-3') {
//             get_template_part('template-parts/footer/footer-3');
//         } elseif ($starter_default_footer_style == 'footer-style-4') {
//             get_template_part('template-parts/footer/footer-4');
//         } else {
//             get_template_part('template-parts/footer/footer-1');
//         }
//     }
// }

// starter_copyright_text
function starter_copyright_text() {
    print get_theme_mod('starter_copyright', starter_kses('© 2022 Starter, All Rights Reserved. Design By <a href="#">iTanvir</a>'));
}


/**
 *
 * pagination
 */
if (!function_exists('starter_pagination')) {

    function _starter_pagi_callback($pagination) {
        return $pagination;
    }

    //page navigation
    function starter_pagination($prev, $next, $pages, $args) {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ($pages == '') {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if (!$pages) {
                $pages = 1;
            }
        }

        $pagination = [
            'base'      => add_query_arg('paged', '%#%'),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ($wp_rewrite->using_permalinks()) {
            $pagination['base'] = user_trailingslashit(trailingslashit(remove_query_arg('s', get_pagenum_link(1))) . 'page/%#%/', 'paged');
        }

        if (!empty($wp_query->query_vars['s'])) {
            $pagination['add_args'] = ['s' => get_query_var('s')];
        }

        $pagi = '';
        if (paginate_links($pagination) != '') {
            $paginations = paginate_links($pagination);
            $pagi .= '<ul>';
            foreach ($paginations as $key => $pg) {
                $pagi .= '<li>' . $pg . '</li>';
            }
            $pagi .= '</ul>';
        }

        print _starter_pagi_callback($pagi);
    }
}


// header top bg color
function starter_breadcrumb_bg_color() {
    $color_code = get_theme_mod('starter_breadcrumb_bg_color', '#222');
    wp_enqueue_style('starter-custom', STARTER_THEME_CSS_DIR . 'starter-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".breadcrumb-bg.gray-bg{ background: " . $color_code . "}";

        wp_add_inline_style('starter-breadcrumb-bg', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'starter_breadcrumb_bg_color');

// breadcrumb-spacing top
function starter_breadcrumb_spacing() {
    $padding_px = get_theme_mod('starter_breadcrumb_spacing', '160px');
    wp_enqueue_style('starter-custom', STARTER_THEME_CSS_DIR . 'starter-custom.css', []);
    if ($padding_px != '') {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-top: " . $padding_px . "}";

        wp_add_inline_style('starter-breadcrumb-top-spacing', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'starter_breadcrumb_spacing');

// breadcrumb-spacing bottom
function starter_breadcrumb_bottom_spacing() {
    $padding_px = get_theme_mod('starter_breadcrumb_bottom_spacing', '160px');
    wp_enqueue_style('starter-custom', STARTER_THEME_CSS_DIR . 'starter-custom.css', []);
    if ($padding_px != '') {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-bottom: " . $padding_px . "}";

        wp_add_inline_style('starter-breadcrumb-bottom-spacing', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'starter_breadcrumb_bottom_spacing');

// scrollUp
function starter_scrollup_switch() {
    $scrollup_switch = get_theme_mod('starter_scrollup_switch', false);
    wp_enqueue_style('starter-custom', STARTER_THEME_CSS_DIR . 'starter-custom.css', []);
    if ($scrollup_switch) {
        $custom_css = '';
        $custom_css .= "#scrollUp{ display: none !important;}";

        wp_add_inline_style('starter-scrollup-switch', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'starter_scrollup_switch');

// theme custom color
function starter_custom_color() {
    $color_code = get_theme_mod('starter_color_option', '#2b4eff');
    wp_enqueue_style('starter-custom', STARTER_THEME_CSS_DIR . 'starter-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".demo-class { background-color: " . $color_code . "}";

        $custom_css .= ".demo-class { color: " . $color_code . "}";

        $custom_css .= ".demo-class { border-color: " . $color_code . "}";
        $custom_css .= ".demo-class { border-left-color: " . $color_code . "}";
        $custom_css .= ".demo-class { stroke: " . $color_code . "}";
        $custom_css .= ".demo-class { border-color: " . $color_code . "}";
        wp_add_inline_style('starter-custom', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'starter_custom_color');


// theme primary color
function starter_custom_color_primary() {
    $color_code = get_theme_mod('starter_color_option_2', '#f2277e');
    wp_enqueue_style('starter-custom', STARTER_THEME_CSS_DIR . 'starter-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".demo-class { background-color: " . $color_code . "}";

        $custom_css .= ".demo-class { color: " . $color_code . "}";

        $custom_css .= ".demo-class { border-left-color: " . $color_code . "}";
        wp_add_inline_style('starter-custom', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'starter_custom_color_primary');

// theme scrollUp color
function starter_custom_color_scrollup() {
    $color_code = get_theme_mod('starter_color_scrollup', '#2b4eff');
    wp_enqueue_style('starter-custom', STARTER_THEME_CSS_DIR . 'starter-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".demo-class { color: " . $color_code . "}";
        $custom_css .= ".demo-class { stroke: " . $color_code . "}";
        wp_add_inline_style('starter-custom', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'starter_custom_color_scrollup');

// theme secondary color
function starter_custom_color_secondary() {
    $color_code = get_theme_mod('starter_color_option_3', '#30a820');
    wp_enqueue_style('starter-custom', STARTER_THEME_CSS_DIR . 'starter-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".demo-class { background-color: " . $color_code . "}";

        $custom_css .= ".demo-class { color: " . $color_code . "}";

        $custom_css .= ".asdf { border-color: " . $color_code . "}";
        wp_add_inline_style('starter-custom', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'starter_custom_color_secondary');

// theme secondary 2 color
function starter_custom_color_secondary_2() {
    $color_code = get_theme_mod('starter_color_option_3_2', '#ffb352');
    wp_enqueue_style('starter-custom', STARTER_THEME_CSS_DIR . 'starter-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".demo-class { background-color: " . $color_code . "}";

        $custom_css .= ".demo-class { color: " . $color_code . "}";

        $custom_css .= ".demo-class { border-color: " . $color_code . "}";
        wp_add_inline_style('starter-custom', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'starter_custom_color_secondary_2');


// starter_kses_intermediate
function starter_kses_intermediate($string = '') {
    return wp_kses($string, starter_get_allowed_html_tags('intermediate'));
}

function starter_get_allowed_html_tags($level = 'basic') {
    $allowed_html = [
        'b'      => [],
        'i'      => [],
        'u'      => [],
        'em'     => [],
        'br'     => [],
        'abbr'   => [
            'title' => [],
        ],
        'span'   => [
            'class' => [],
        ],
        'strong' => [],
        'a'      => [
            'href'  => [],
            'title' => [],
            'class' => [],
            'id'    => [],
        ],
    ];

    if ($level === 'intermediate') {
        $allowed_html['a'] = [
            'href' => [],
            'title' => [],
            'class' => [],
            'id' => [],
        ];
        $allowed_html['div'] = [
            'class' => [],
            'id' => [],
        ];
        $allowed_html['img'] = [
            'src' => [],
            'class' => [],
            'alt' => [],
        ];
        $allowed_html['del'] = [
            'class' => [],
        ];
        $allowed_html['ins'] = [
            'class' => [],
        ];
        $allowed_html['bdi'] = [
            'class' => [],
        ];
        $allowed_html['i'] = [
            'class' => [],
            'data-rating-value' => [],
        ];
    }

    return $allowed_html;
}

// WP kses allowed tags
// ----------------------------------------------------------------------------------------
function starter_kses($raw) {

    $allowed_tags = array(
        'a'                         => array(
            'class'   => array(),
            'href'    => array(),
            'rel'  => array(),
            'title'   => array(),
            'target' => array(),
        ),
        'abbr'                      => array(
            'title' => array(),
        ),
        'b'                         => array(),
        'blockquote'                => array(
            'cite' => array(),
        ),
        'cite'                      => array(
            'title' => array(),
        ),
        'code'                      => array(),
        'del'                    => array(
            'datetime'   => array(),
            'title'      => array(),
        ),
        'dd'                     => array(),
        'div'                    => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
        ),
        'dl'                     => array(),
        'dt'                     => array(),
        'em'                     => array(),
        'h1'                     => array(),
        'h2'                     => array(),
        'h3'                     => array(),
        'h4'                     => array(),
        'h5'                     => array(),
        'h6'                     => array(),
        'i'                         => array(
            'class' => array(),
        ),
        'img'                    => array(
            'alt'  => array(),
            'class'   => array(),
            'height' => array(),
            'src'  => array(),
            'width'   => array(),
        ),
        'li'                     => array(
            'class' => array(),
        ),
        'ol'                     => array(
            'class' => array(),
        ),
        'p'                         => array(
            'class' => array(),
        ),
        'q'                         => array(
            'cite'    => array(),
            'title'   => array(),
        ),
        'span'                      => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
        ),
        'iframe'                 => array(
            'width'         => array(),
            'height'     => array(),
            'scrolling'     => array(),
            'frameborder'   => array(),
            'allow'         => array(),
            'src'        => array(),
        ),
        'strike'                 => array(),
        'br'                     => array(),
        'strong'                 => array(),
        'data-wow-duration'            => array(),
        'data-wow-delay'            => array(),
        'data-wallpaper-options'       => array(),
        'data-stellar-background-ratio'   => array(),
        'ul'                     => array(
            'class' => array(),
        ),
        'svg' => array(
            'class' => true,
            'aria-hidden' => true,
            'aria-labelledby' => true,
            'role' => true,
            'xmlns' => true,
            'width' => true,
            'height' => true,
            'viewbox' => true, // <= Must be lower case!
        ),
        'g'     => array('fill' => true),
        'title' => array('title' => true),
        'path'  => array('d' => true, 'fill' => true,),
    );

    if (function_exists('wp_kses')) { // WP is here
        $allowed = wp_kses($raw, $allowed_tags);
    } else {
        $allowed = $raw;
    }

    return $allowed;
}
