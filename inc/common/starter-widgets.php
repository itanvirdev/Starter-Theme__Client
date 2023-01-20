<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starter_widgets_init() {

    $footer_style_2_switch = get_theme_mod('footer_style_2_switch', false);
    $footer_style_3_switch = get_theme_mod('footer_style_3_switch', false);

    /**
     * blog sidebar
     */
    register_sidebar([
        'name'          => esc_html__('Blog Sidebar', 'starter'),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div id="%1$s" class="ss-sidebar__widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="ss-sidebar-widget__head"><h3 class="ss-sidebar-widget__title">',
        'after_title'   => '</h3></div>',
    ]);


    $footer_columns = get_theme_mod('footer_widget_column', 4);
    // footer default
    for ($num = 1; $num <= $footer_columns; $num++) {
        register_sidebar([
            'name'          => sprintf(esc_html__('Footer Column %1$s', 'starter'), $num),
            'id'            => 'footer-' . $num,
            'description'   => sprintf(esc_html__('This widget content will be show widget %1$s', 'starter'), $num),
            'before_widget' => '<div id="%1$s" class="ss-footer__widget footer-column__' . $num . ' %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="ss-footer-widget_title">',
            'after_title'   => '</h5>',
        ]);
    }

    // footer 2
    // if ($footer_style_2_switch) {
    //     for ($num = 1; $num <= $footer_columns; $num++) {

    //         register_sidebar([
    //             'name'          => sprintf(esc_html__('Footer Style 2 : Column %1$s', 'starter'), $num),
    //             'id'            => 'footer-2-' . $num,
    //             'description'   => sprintf(esc_html__('Footer Style 2 : Column %1$s Widgets', 'starter'), $num),
    //             'before_widget' => '<div id="%1$s" class="footer__widget footer-default-widget footer__col-' . $num . ' mb-40 %2$s">',
    //             'after_widget'  => '</div>',
    //             'before_title'  => '<h5 class="footer__widget-title">',
    //             'after_title'   => '</h5>',
    //         ]);
    //     }
    // }

    // footer 3
    // if ($footer_style_3_switch) {
    //     for ($num = 1; $num <= $footer_columns + 1; $num++) {
    //         register_sidebar([
    //             'name'          => sprintf(esc_html__('Footer Style 3 : Column %1$s', 'starter'), $num),
    //             'id'            => 'footer-3-' . $num,
    //             'description'   => sprintf(esc_html__('Footer Style 3 : Column %1$s Widgets', 'starter'), $num),
    //             'before_widget' => '<div id="%1$s" class="footer__widget footer-3-widget footer-col-3-' . $num . ' mb-40 %2$s">',
    //             'after_widget'  => '</div>',
    //             'before_title'  => '<h5 class="footer__widget-title">',
    //             'after_title'   => '</h5>',
    //         ]);
    //     }
    // }
}
add_action('widgets_init', 'starter_widgets_init');
