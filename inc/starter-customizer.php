<?php

/**
 * starter customizer
 *
 * @package starter
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
  exit;
}

/**
 * Added Panels & Sections
 */
function starter_customizer_panels_sections($wp_customize) {

  //Add panel
  $wp_customize->add_panel('starter_customizer', [
    'priority' => 10,
    'title'    => esc_html__('Starter Customizer', 'starter'),
  ]);

  /**
   * Customizer Section
   * 
   * General
   */
  $wp_customize->add_section('starter_theme_general_settings', [
    'title'       => esc_html__('General', 'starter'),
    'description' => '',
    'priority'    => 10,
    'capability'  => 'edit_theme_options',
    'panel'       => 'starter_customizer',
  ]);
  // Logos & Favicon
  $wp_customize->add_section('starter_theme_logos_favicon', [
    'title'       => esc_html__('Logos & Favicon', 'starter'),
    'description' => '',
    'priority'    => 11,
    'capability'  => 'edit_theme_options',
    'panel'       => 'starter_customizer',
  ]);
  // Header Top Bars
  $wp_customize->add_section('header_top_bar', [
    'title'       => esc_html__('Header Top Bar', 'starter'),
    'description' => '',
    'priority'    => 12,
    'capability'  => 'edit_theme_options',
    'panel'       => 'starter_customizer',
  ]);
  // Header Settings
  $wp_customize->add_section('header_settings', [
    'title'       => esc_html__('Header Setting', 'starter'),
    'description' => '',
    'priority'    => 12,
    'capability'  => 'edit_theme_options',
    'panel'       => 'starter_customizer',
  ]);
  // Breadcrumb Settings
  $wp_customize->add_section('breadcrumb_setting', [
    'title'       => esc_html__('Breadcrumb Setting', 'starter'),
    'priority'    => 15,
    'capability'  => 'edit_theme_options',
    'panel'       => 'starter_customizer',
  ]);
  $wp_customize->add_section('blog_setting', [
    'title'       => esc_html__('Blog Setting', 'starter'),
    'description' => '',
    'priority'    => 15,
    'capability'  => 'edit_theme_options',
    'panel'       => 'starter_customizer',
  ]);
  $wp_customize->add_section('footer_setting', [
    'title'       => esc_html__('Footer Settings', 'starter'),
    'description' => '',
    'priority'    => 16,
    'capability'  => 'edit_theme_options',
    'panel'       => 'starter_customizer',
  ]);
  $wp_customize->add_section('404_page', [
    'title'       => esc_html__('404 Page', 'starter'),
    'description' => '',
    'priority'    => 18,
    'capability'  => 'edit_theme_options',
    'panel'       => 'starter_customizer',
  ]);
  $wp_customize->add_section('typo_setting', [
    'title'       => esc_html__('Typography Setting', 'starter'),
    'description' => '',
    'priority'    => 21,
    'capability'  => 'edit_theme_options',
    'panel'       => 'starter_customizer',
  ]);
}
add_action('customize_register', 'starter_customizer_panels_sections');


/************************************ Customizer Fields *********************************
 * 
 * General Settings
 */
function _theme_general_settings_fields($fields) {
  // preloader
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'starter_preloader',
    'label'    => esc_html__('Preloader?', 'starter'),
    'description' => esc_html__('Show preloader.', 'starter'),
    'section'  => 'starter_theme_general_settings',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];

  // backToTop
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'starter_backtotop',
    'label'    => esc_html__('Back to Top', 'starter'),
    'description'    => esc_html__('Show back to top button', 'starter'),
    'section'  => 'starter_theme_general_settings',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];

  return $fields;
}
add_filter('kirki/fields', '_theme_general_settings_fields');

// logos & favicon fields
function _theme_logos_favicon_fields($fields) {
  // primary logo
  $fields[] = [
    'type'        => 'image',
    'settings'    => 'site_logo',
    'label'       => esc_html__('Site Logo', 'starter'),
    'description' => esc_html__('Upload Your Logo.', 'starter'),
    'section'     => 'starter_theme_logos_favicon',
    'default'     => get_template_directory_uri() . '/assets/img/logo/logo-black.png',
  ];
  // preloader logo
  $fields[] = [
    'type'        => 'image',
    'settings'    => 'preloader_logo',
    'label'       => esc_html__('Preloader Logo', 'starter'),
    'description' => esc_html__('Upload Preloader Logo.', 'starter'),
    'section'     => 'starter_theme_logos_favicon',
    'default'     => get_template_directory_uri() . '/assets/img/preloader.svg',
  ];

  return $fields;
}
add_filter('kirki/fields', '_theme_logos_favicon_fields');


// Header Top Bar
function _header_top_bar_fields($fields) {
  // Header Top Bar
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'header_topbar_switch',
    'label'    => esc_html__('Topbar Swicher', 'starter'),
    'section'  => 'header_top_bar',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];
  // header top info
  $fields[] = [
    'type'     => 'text',
    'settings' => 'header_top_info',
    'label'    => esc_html__('Top Info', 'starter'),
    'section'  => 'header_top_bar',
    'default'  => esc_html__('Free Home Delivery', 'starter'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'header_topbar_switch',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // heder socials
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'header_social_switcher',
    'label'    => esc_html__('Header Socials', 'starter'),
    'description'    => esc_html__('Show header socials.', 'starter'),
    'section'  => 'header_top_bar',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
    'active_callback' => [
      [
        'setting'  => 'header_topbar_switch',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // facebook
  $fields[] = [
    'type'     => 'text',
    'settings' => 'header_fb_link',
    'label'    => esc_html__('Facebook Link', 'starter'),
    'section'  => 'header_top_bar',
    'default'  => esc_html__('https://facebook.com/', 'starter'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'header_social_switcher',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // instagram
  $fields[] = [
    'type'     => 'text',
    'settings' => 'header_ig_link',
    'label'    => esc_html__('Instagram Link', 'starter'),
    'section'  => 'header_top_bar',
    'default'  => esc_html__('https://instagram.com/', 'starter'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'header_social_switcher',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // linkedin
  $fields[] = [
    'type'     => 'text',
    'settings' => 'header_linkedin_link',
    'label'    => esc_html__('Linkedin Link', 'starter'),
    'section'  => 'header_top_bar',
    'default'  => esc_html__('https://linkedin.com/', 'starter'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'header_social_switcher',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // twitter
  $fields[] = [
    'type'     => 'text',
    'settings' => 'header_twitter_link',
    'label'    => esc_html__('Twitter Link', 'starter'),
    'section'  => 'header_top_bar',
    'default'  => esc_html__('https://twitter.com/', 'starter'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'header_social_switcher',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // pnterest
  $fields[] = [
    'type'     => 'text',
    'settings' => 'header_pinterest_link',
    'label'    => esc_html__('Pinterest Link', 'starter'),
    'section'  => 'header_top_bar',
    'default'  => esc_html__('https://pinterest.com/', 'starter'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'header_social_switcher',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // youtube
  $fields[] = [
    'type'     => 'text',
    'settings' => 'header_youtube_link',
    'label'    => esc_html__('Youtube Link', 'starter'),
    'section'  => 'header_top_bar',
    'default'  => esc_html__('https://youtube.com/', 'starter'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'header_social_switcher',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  return $fields;
}
add_filter('kirki/fields', '_header_top_bar_fields');

// Header Settings
function _header_setting_fields($fields) {
  // Address
  $fields[] = [
    'type'     => 'text',
    'settings' => 'header_address',
    'label'    => esc_html__('Address', 'starter'),
    'section'  => 'header_settings',
    'default'  => esc_html__('Moon ave, New York, 2020 NY US', 'starter'),
    'priority' => 10,
  ];
  // phone
  $fields[] = [
    'type'     => 'text',
    'settings' => 'header_phone_number',
    'label'    => esc_html__('Phone Number', 'starter'),
    'section'  => 'header_settings',
    'default'  => esc_html__('+(088) 234 567 899', 'starter'),
    'priority' => 10,
  ];
  // header right
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'header_right_button',
    'label'    => esc_html__('Header Right Button', 'starter'),
    'description'    => esc_html__('Show header right button.', 'starter'),
    'section'  => 'header_settings',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];
  // right button text
  $fields[] = [
    'type'     => 'text',
    'settings' => 'header_right_button_text',
    'label'    => esc_html__('Button Text', 'starter'),
    'section'  => 'header_settings',
    'default'  => esc_html__('Make Request', 'starter'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'header_right_button',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // right button link
  $fields[] = [
    'type'     => 'link',
    'settings' => 'header_right_button_link',
    'label'    => esc_html__('Button Link', 'starter'),
    'section'  => 'header_settings',
    'default'  => esc_html__('#', 'starter'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'header_right_button',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // Header Search
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'header_search',
    'label'    => esc_html__('Header Search', 'starter'),
    'description'    => esc_html__('Show header search.', 'starter'),
    'section'  => 'header_settings',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];
  // header language
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'header_lang',
    'label'    => esc_html__('Header language', 'starter'),
    'description'    => esc_html__('Show header language list.', 'starter'),
    'section'  => 'header_settings',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];

  return $fields;
}
add_filter('kirki/fields', '_header_setting_fields');

// Breadcrumb Settings
function _breadcrumb_setting_fields($fields) {
  // Breadcrumb Setting
  $fields[] = [
    'type'        => 'image',
    'settings'    => 'breadcrumb_bg_img',
    'label'       => esc_html__('Background Image', 'starter'),
    'description' => esc_html__('', 'starter'),
    'section'     => 'breadcrumb_setting',
    // 'default'     => get_template_directory_uri() . '/assets/img/bg/page-bg.jpg',
  ];
  $fields[] = [
    'type'        => 'color',
    'settings'    => 'breadcrumb_bg_color',
    'label'       => __('Background Color', 'starter'),
    'description' => esc_html__('', 'starter'),
    'section'     => 'breadcrumb_setting',
    'default'     => '#343a40',
    'priority'    => 10,
  ];

  $fields[] = [
    'type'     => 'switch',
    'settings' => 'breadcrumb_info_switch',
    'label'    => esc_html__('Breadcrumb Info switch', 'starter'),
    'section'  => 'breadcrumb_setting',
    'default'  => '1',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];

  return $fields;
}
add_filter('kirki/fields', '_breadcrumb_setting_fields');

/*
Header Social
*/
function _header_blog_fields($fields) {
  // Blog Setting
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'starter_blog_btn_switch',
    'label'    => esc_html__('Blog BTN On/Off', 'starter'),
    'section'  => 'blog_setting',
    'default'  => '1',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];

  $fields[] = [
    'type'     => 'switch',
    'settings' => 'starter_blog_cat',
    'label'    => esc_html__('Blog Category Meta On/Off', 'starter'),
    'section'  => 'blog_setting',
    'default'  => '1',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];

  $fields[] = [
    'type'     => 'switch',
    'settings' => 'starter_blog_author',
    'label'    => esc_html__('Blog Author Meta On/Off', 'starter'),
    'section'  => 'blog_setting',
    'default'  => '1',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'starter_blog_date',
    'label'    => esc_html__('Blog Date Meta On/Off', 'starter'),
    'section'  => 'blog_setting',
    'default'  => '1',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'starter_blog_comments',
    'label'    => esc_html__('Blog Comments Meta On/Off', 'starter'),
    'section'  => 'blog_setting',
    'default'  => '1',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];

  $fields[] = [
    'type'     => 'text',
    'settings' => 'breadcrumb_blog_title',
    'label'    => esc_html__('Blog Page Title', 'starter'),
    'section'  => 'blog_setting',
    'default'  => esc_html__('Blog', 'starter'),
    'priority' => 10,
  ];

  $fields[] = [
    'type'     => 'text',
    'settings' => 'starter_blog_btn',
    'label'    => esc_html__('Blog Button text', 'starter'),
    'section'  => 'blog_setting',
    'default'  => esc_html__('Read More', 'starter'),
    'priority' => 10,
  ];


  $fields[] = [
    'type'     => 'text',
    'settings' => 'breadcrumb_blog_title_details',
    'label'    => esc_html__('Blog Details Title', 'starter'),
    'section'  => 'blog_setting',
    'default'  => esc_html__('Blog Details', 'starter'),
    'priority' => 10,
  ];
  return $fields;
}
add_filter('kirki/fields', '_header_blog_fields');

/*
Footer
*/
function _footer_setting_fields($fields) {

  $fields[] = [
    'type'        => 'select',
    'settings'    => 'footer_widget_column',
    'label'       => esc_html__('Widget Column', 'starter'),
    'description'       => esc_html__('Set widget column.', 'starter'),
    'section'     => 'footer_setting',
    'default'     => '4',
    'placeholder' => esc_html__('Select an option...', 'starter'),
    'priority'    => 10,
    'multiple'    => 1,
    'choices'     => [
      '4' => esc_html__('Column 4', 'starter'),
      '3' => esc_html__('Column 3', 'starter'),
      '2' => esc_html__('Column 2', 'starter'),
    ],
  ];

  $fields[] = [
    'type'        => 'image',
    'settings'    => 'footer_bg_img',
    'label'       => esc_html__('Background Image', 'starter'),
    'description' => esc_html__('This image will be show footer background.', 'starter'),
    'section'     => 'footer_setting',
  ];

  $fields[] = [
    'type'        => 'color',
    'settings'    => 'footer_bg_color',
    'label'       => __('Background Color', 'starter'),
    'description' => esc_html__('This color will be show footer background.', 'starter'),
    'section'     => 'footer_setting',
    'default'     => '#24292d',
    'priority'    => 10,
  ];

  $fields[] = [
    'type'     => 'text',
    'settings' => 'starter_copyright',
    'label'    => esc_html__('Copy Right', 'starter'),
    'section'  => 'footer_setting',
    'default'  => esc_html__('Copyright &copy; 2022 iTanvir. All Rights Reserved', 'starter'),
    'priority' => 10,
  ];

  // footer socials
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'footer_social_switcher',
    'label'    => esc_html__('Socials', 'starter'),
    'description'    => esc_html__('Show footer socials.', 'starter'),
    'section'  => 'footer_setting',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];

  // facebook
  $fields[] = [
    'type'     => 'text',
    'settings' => 'footer_fb_link',
    'label'    => esc_html__('Facebook Link', 'starter'),
    'section'  => 'footer_setting',
    'default'  => esc_html__('https://facebook.com/', 'starter'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'footer_social_switcher',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // twitter
  $fields[] = [
    'type'     => 'text',
    'settings' => 'footer_twitter_link',
    'label'    => esc_html__('Twitter Link', 'starter'),
    'section'  => 'footer_setting',
    'default'  => esc_html__('https://twitter.com/', 'starter'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'footer_social_switcher',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // linkedin
  $fields[] = [
    'type'     => 'text',
    'settings' => 'footer_linkedin_link',
    'label'    => esc_html__('Linkedin Link', 'starter'),
    'section'  => 'footer_setting',
    'default'  => esc_html__('https://linkedin.com/', 'starter'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'footer_social_switcher',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // instagram
  $fields[] = [
    'type'     => 'text',
    'settings' => 'footer_linkedin_link',
    'label'    => esc_html__('Instagram Link', 'starter'),
    'section'  => 'footer_setting',
    'default'  => esc_html__('https://instagram.com/', 'starter'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'footer_social_switcher',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];
  // youtube
  $fields[] = [
    'type'     => 'text',
    'settings' => 'footer_youtube_link',
    'label'    => esc_html__('Youtube Link', 'starter'),
    'section'  => 'footer_setting',
    'default'  => esc_html__('https://youtube.com/', 'starter'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'footer_social_switcher',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];


  return $fields;
}
add_filter('kirki/fields', '_footer_setting_fields');


// 404
function starter_404_fields($fields) {
  // 404 settings
  $fields[] = [
    'type'        => 'image',
    'settings'    => 'starter_404_bg',
    'label'       => esc_html__('404 Image.', 'starter'),
    'description' => esc_html__('404 Image.', 'starter'),
    'section'     => '404_page',
  ];
  $fields[] = [
    'type'     => 'text',
    'settings' => 'starter_error_title',
    'label'    => esc_html__('Not Found Title', 'starter'),
    'section'  => '404_page',
    'default'  => esc_html__('Page not found', 'starter'),
    'priority' => 10,
  ];
  $fields[] = [
    'type'     => 'textarea',
    'settings' => 'starter_error_desc',
    'label'    => esc_html__('404 Description Text', 'starter'),
    'section'  => '404_page',
    'default'  => esc_html__('Oops! The page you are looking for does not exist. It might have been moved or deleted', 'starter'),
    'priority' => 10,
  ];
  $fields[] = [
    'type'     => 'text',
    'settings' => 'starter_error_link_text',
    'label'    => esc_html__('404 Link Text', 'starter'),
    'section'  => '404_page',
    'default'  => esc_html__('Back To Home', 'starter'),
    'priority' => 10,
  ];
  return $fields;
}
add_filter('kirki/fields', 'starter_404_fields');


/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function Starter_Theme_option($name) {
  $value = '';
  if (class_exists('starter')) {
    $value = Kirki::get_option(starter_get_theme(), $name);
  }

  return apply_filters('Starter_Theme_option', $value, $name);
}

/**
 * Get config ID
 *
 * @return string
 */
function starter_get_theme() {
  return 'starter';
}
