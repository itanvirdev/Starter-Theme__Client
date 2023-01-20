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
  // Header Settings
  $wp_customize->add_section('header_settings', [
    'title'       => esc_html__('Header Setting', 'starter'),
    'description' => '',
    'priority'    => 12,
    'capability'  => 'edit_theme_options',
    'panel'       => 'starter_customizer',
  ]);
  // Header Top Bars
  $wp_customize->add_section('header_top_bar', [
    'title'       => esc_html__('Top Bar', 'starter'),
    'description' => '',
    'priority'    => 13,
    'capability'  => 'edit_theme_options',
    'panel'       => 'starter_customizer',
  ]);
  // Header Side Settings
  $wp_customize->add_section('header_side_setting', [
    'title'       => esc_html__('Header Side Settings', 'starter'),
    'description' => '',
    'priority'    => 14,
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





  $wp_customize->add_section('blog_setting', [
    'title'       => esc_html__('Blog Setting', 'starter'),
    'description' => '',
    'priority'    => 16,
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

  $wp_customize->add_section('color_setting', [
    'title'       => esc_html__('Color Setting', 'starter'),
    'description' => '',
    'priority'    => 17,
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

  $wp_customize->add_section('tutor_course_settings', [
    'title'       => esc_html__('Tutor Course Settings ', 'starter'),
    'description' => '',
    'priority'    => 19,
    'capability'  => 'edit_theme_options',
    'panel'       => 'starter_customizer',
  ]);

  $wp_customize->add_section('learndash_course_settings', [
    'title'       => esc_html__('Learndash Course Settings ', 'starter'),
    'description' => '',
    'priority'    => 20,
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

  $wp_customize->add_section('slug_setting', [
    'title'       => esc_html__('Slug Settings', 'starter'),
    'description' => '',
    'priority'    => 22,
    'capability'  => 'edit_theme_options',
    'panel'       => 'starter_customizer',
  ]);
  $wp_customize->add_section('tutor_course_settings', [
    'title'       => esc_html__('Tutor Course Settings ', 'starter'),
    'description' => '',
    'priority'    => 23,
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
    'settings'    => 'primary_logo',
    'label'       => esc_html__('Primary Logo', 'starter'),
    'description' => esc_html__('Upload Your Logo.', 'starter'),
    'section'     => 'starter_theme_logos_favicon',
    'default'     => get_template_directory_uri() . '/assets/img/logo/logo-white.png',
  ];
  // secondary logo
  $fields[] = [
    'type'        => 'image',
    'settings'    => 'secondary_logo',
    'label'       => esc_html__('Secondary Logo', 'starter'),
    'description' => esc_html__('Upload secondary logo.', 'starter'),
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

// Header Settings
function _header_setting_fields($fields) {
  // header style
  $fields[] = [
    'type'        => 'radio-image',
    'settings'    => 'choose_default_header',
    'label'       => esc_html__('Select Header Style', 'starter'),
    'section'     => 'header_settings',
    'placeholder' => esc_html__('Select an option...', 'starter'),
    'priority'    => 10,
    'multiple'    => 1,
    'choices'     => [
      'header-style-1'   => get_template_directory_uri() . '/inc/img/header/header-3.png',
      'header-style-2' => get_template_directory_uri() . '/inc/img/header/header-2.png',
      'header-style-3'  => get_template_directory_uri() . '/inc/img/header/header-1.png'
    ],
    'default'     => 'header-style-1',
  ];

  // header right
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'starter_header_right',
    'label'    => esc_html__('Header Right', 'starter'),
    'description'    => esc_html__('Show header right', 'starter'),
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
    'default'  => esc_html__('Get A Quote', 'starter'),
    'priority' => 10,
    'active_callback' => [
      [
        'setting'  => 'starter_header_right',
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
        'setting'  => 'starter_header_right',
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

  // heder socials
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'header_social_switcher',
    'label'    => esc_html__('Socials', 'starter'),
    'description'    => esc_html__('Show header socials.', 'starter'),
    'section'  => 'header_settings',
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
    'settings' => 'header_fb_link',
    'label'    => esc_html__('Facebook Link', 'starter'),
    'section'  => 'header_settings',
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
  // twitter
  $fields[] = [
    'type'     => 'text',
    'settings' => 'header_twitter_link',
    'label'    => esc_html__('Twitter Link', 'starter'),
    'section'  => 'header_settings',
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
  // linkedin
  $fields[] = [
    'type'     => 'text',
    'settings' => 'header_linkedin_link',
    'label'    => esc_html__('Linkedin Link', 'starter'),
    'section'  => 'header_settings',
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
  // instagram
  $fields[] = [
    'type'     => 'text',
    'settings' => 'header_instagram_link',
    'label'    => esc_html__('Instagram Link', 'starter'),
    'section'  => 'header_settings',
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
  // youtube
  $fields[] = [
    'type'     => 'text',
    'settings' => 'header_youtube_link',
    'label'    => esc_html__('Youtube Link', 'starter'),
    'section'  => 'header_settings',
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
add_filter('kirki/fields', '_header_setting_fields');

// Header Top Bar
function _header_top_bar_fields($fields) {
  // Header Top Bar
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'starter_topbar_switch',
    'label'    => esc_html__('Topbar Swicher', 'starter'),
    'section'  => 'header_top_bar',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];
  // phone
  $fields[] = [
    'type'     => 'text',
    'settings' => 'starter_phone_num',
    'label'    => esc_html__('Phone Number', 'starter'),
    'section'  => 'header_top_bar',
    'default'  => esc_html__('+(088) 234 567 899', 'starter'),
    'priority' => 10,
  ];

  // email
  $fields[] = [
    'type'     => 'text',
    'settings' => 'starter_mail_id',
    'label'    => esc_html__('Mail ID', 'starter'),
    'section'  => 'header_top_bar',
    'default'  => esc_html__('info@starter.com', 'starter'),
    'priority' => 10,
  ];

  // email
  $fields[] = [
    'type'     => 'text',
    'settings' => 'starter_address',
    'label'    => esc_html__('Address', 'starter'),
    'section'  => 'header_top_bar',
    'default'  => esc_html__('Moon ave, New York, 2020 NY US', 'starter'),
    'priority' => 10,
  ];

  return $fields;
}
add_filter('kirki/fields', '_header_top_bar_fields');

// Header Side Settings
function _header_side_fields($fields) {
  // side info settings
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'starter_side_hide',
    'label'    => esc_html__('Side Info', 'starter'),
    'description'    => esc_html__('Show header side info', 'starter'),
    'section'  => 'header_side_setting',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];
  $fields[] = [
    'type'        => 'image',
    'settings'    => 'starter_side_logo',
    'label'       => esc_html__('Side Logo', 'starter'),
    'section'     => 'header_side_setting',
    'default'     => get_template_directory_uri() . '/assets/img/logo/logo-black.png',
  ];
  $fields[] = [
    'type'     => 'textarea',
    'settings' => 'starter_extra_about_text',
    'label'    => esc_html__('Side Description Text', 'starter'),
    'section'  => 'header_side_setting',
    'default'  => esc_html__('But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system and expound the actual teachings of the great explore', 'starter'),
    'priority' => 10,
  ];

  $fields[] = [
    'type'     => 'textarea',
    'settings' => 'starter_extra_map',
    'label'    => esc_html__('Map Address Iframe', 'starter'),
    'section'  => 'header_side_setting',
    'default'  => esc_html__('#', 'starter'),
    'priority' => 10,
  ];

  // contact
  $fields[] = [
    'type'     => 'text',
    'settings' => 'starter_contact_title',
    'label'    => esc_html__('Contact Title', 'starter'),
    'section'  => 'header_side_setting',
    'default'  => esc_html__('Contact Title', 'starter'),
    'priority' => 10,
  ];
  $fields[] = [
    'type'     => 'textarea',
    'settings' => 'starter_extra_address',
    'label'    => esc_html__('Office Address', 'starter'),
    'section'  => 'header_side_setting',
    'default'  => esc_html__('12/A, Mirnada City Tower, NYC', 'starter'),
    'priority' => 10,
  ];
  $fields[] = [
    'type'     => 'textarea',
    'settings' => 'starter_extra_phone',
    'label'    => esc_html__('Phone Number', 'starter'),
    'section'  => 'header_side_setting',
    'default'  => esc_html__('+0989 7876 9865 9', 'starter'),
    'priority' => 10,
  ];
  $fields[] = [
    'type'     => 'textarea',
    'settings' => 'starter_extra_email',
    'label'    => esc_html__('Email ID', 'starter'),
    'section'  => 'header_side_setting',
    'default'  => esc_html__('info@themepure.net', 'starter'),
    'priority' => 10,
  ];
  return $fields;
}
add_filter('kirki/fields', '_header_side_fields');

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
  // Footer Setting
  $fields[] = [
    'type'        => 'radio-image',
    'settings'    => 'choose_default_footer',
    'label'       => esc_html__('Footer Style', 'starter'),
    'description'       => esc_html__('Choose your footer style.', 'starter'),
    'section'     => 'footer_setting',
    'placeholder' => esc_html__('Select an option...', 'starter'),
    'priority'    => 10,
    'multiple'    => 1,
    'choices'     => [
      'footer-style-1'   => get_template_directory_uri() . '/inc/img/footer/footer-1.png',
      'footer-style-2' => get_template_directory_uri() . '/inc/img/footer/footer-2.png',
      'footer-style-3' => get_template_directory_uri() . '/inc/img/footer/footer-3.png',
    ],
    'default'     => 'footer-style-1',
  ];

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
      '5' => esc_html__('Column 5', 'starter'),
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
    'active_callback' => [
      [
        'setting'  => 'choose_default_footer',
        'operator' => '!==',
        'value'    => 'footer-style-1',
      ],
    ],
  ];

  $fields[] = [
    'type'        => 'color',
    'settings'    => 'footer_bg_color',
    'label'       => __('Background Color', 'starter'),
    'description' => esc_html__('This color will be show footer background.', 'starter'),
    'section'     => 'footer_setting',
    'default'     => '#24292d',
    'priority'    => 10,
    'active_callback' => [
      [
        'setting'  => 'choose_default_footer',
        'operator' => '!==',
        'value'    => 'footer-style-2',
      ],
      [
        'setting'  => 'choose_default_footer',
        'operator' => '!==',
        'value'    => 'footer-style-3',
      ],
    ],
  ];

  // $fields[] = [
  //   'type'     => 'switch',
  //   'settings' => 'footer_style_2_switch',
  //   'label'    => esc_html__('Footer Style 2 On/Off', 'starter'),
  //   'section'  => 'footer_setting',
  //   'default'  => '0',
  //   'priority' => 10,
  //   'choices'  => [
  //     'on'  => esc_html__('Enable', 'starter'),
  //     'off' => esc_html__('Disable', 'starter'),
  //   ],
  // ];

  // $fields[] = [
  //   'type'     => 'switch',
  //   'settings' => 'footer_style_3_switch',
  //   'label'    => esc_html__('Footer Style 3 On/Off', 'starter'),
  //   'section'  => 'footer_setting',
  //   'default'  => '0',
  //   'priority' => 10,
  //   'choices'  => [
  //     'on'  => esc_html__('Enable', 'starter'),
  //     'off' => esc_html__('Disable', 'starter'),
  //   ],
  // ];

  // $fields[] = [
  //   'type'     => 'switch',
  //   'settings' => 'footer_style_4_switch',
  //   'label'    => esc_html__('Footer Style 4 On/Off', 'starter'),
  //   'section'  => 'footer_setting',
  //   'default'  => '0',
  //   'priority' => 10,
  //   'choices'  => [
  //     'on'  => esc_html__('Enable', 'starter'),
  //     'off' => esc_html__('Disable', 'starter'),
  //   ],
  // ];

  $fields[] = [
    'type'     => 'text',
    'settings' => 'starter_copyright',
    'label'    => esc_html__('Copy Right', 'starter'),
    'section'  => 'footer_setting',
    'default'  => esc_html__('Copyright &copy; 2022 iTanvir. All Rights Reserved', 'starter'),
    'priority' => 10,
  ];
  // footer menu switcher
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'footer_menu_switcher',
    'label'    => esc_html__('Bottom Menu', 'starter'),
    'description'    => esc_html__('Show footer bottom menu.', 'starter'),
    'section'  => 'footer_setting',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
    'active_callback' => [
      [
        'setting'  => 'choose_default_footer',
        'operator' => '==',
        'value'    => 'footer-style-3',
      ],
    ],
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

// color
function starter_color_fields($fields) {
  // Color Settings
  $fields[] = [
    'type'        => 'color',
    'settings'    => 'starter_color_option',
    'label'       => __('Theme Color', 'starter'),
    'description' => esc_html__('This is a Theme color control.', 'starter'),
    'section'     => 'color_setting',
    'default'     => '#2b4eff',
    'priority'    => 10,
  ];
  // Color Settings
  $fields[] = [
    'type'        => 'color',
    'settings'    => 'starter_color_option_2',
    'label'       => __('Primary Color', 'starter'),
    'description' => esc_html__('This is a Primary color control.', 'starter'),
    'section'     => 'color_setting',
    'default'     => '#f2277e',
    'priority'    => 10,
  ];
  // Color Settings
  $fields[] = [
    'type'        => 'color',
    'settings'    => 'starter_color_option_3',
    'label'       => __('Secondary Color', 'starter'),
    'description' => esc_html__('This is a Secondary color control.', 'starter'),
    'section'     => 'color_setting',
    'default'     => '#30a820',
    'priority'    => 10,
  ];
  // Color Settings
  $fields[] = [
    'type'        => 'color',
    'settings'    => 'starter_color_option_3_2',
    'label'       => __('Secondary Color 2', 'starter'),
    'description' => esc_html__('This is a Secondary color 2 control.', 'starter'),
    'section'     => 'color_setting',
    'default'     => '#ffb352',
    'priority'    => 10,
  ];
  // Color Settings
  $fields[] = [
    'type'        => 'color',
    'settings'    => 'starter_color_scrollup',
    'label'       => __('ScrollUp Color', 'starter'),
    'description' => esc_html__('This is a ScrollUp colo control.', 'starter'),
    'section'     => 'color_setting',
    'default'     => '#2b4eff',
    'priority'    => 10,
  ];

  return $fields;
}
add_filter('kirki/fields', 'starter_color_fields');

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

// course_settings
function starter_learndash_fields($fields) {

  $fields[] = [
    'type'     => 'number',
    'settings' => 'starter_learndash_post_number',
    'label'    => esc_html__('Learndash Post Per page', 'starter'),
    'section'  => 'learndash_course_settings',
    'default'  => 6,
    'priority' => 10,
  ];

  $fields[] = [
    'type'        => 'select',
    'settings'    => 'starter_learndash_order',
    'label'       => esc_html__('Post Order', 'starter'),
    'section'     => 'learndash_course_settings',
    'default'     => 'DESC',
    'placeholder' => esc_html__('Select an option...', 'starter'),
    'priority'    => 10,
    'multiple'    => 1,
    'choices'     => [
      'ASC' => esc_html__('ASC', 'starter'),
      'DESC' => esc_html__('DESC', 'starter'),
    ],
  ];

  $fields[] = [
    'type'     => 'switch',
    'settings' => 'starter_learndash_related',
    'label'    => esc_html__('Show Related?', 'starter'),
    'section'  => 'learndash_course_settings',
    'default'  => 1,
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];

  return $fields;
}

if (class_exists('SFWD_LMS')) {
  add_filter('kirki/fields', 'starter_learndash_fields');
}

// tutor_course_settings
function starter_tutor_course_fields($fields) {
  $fields[] = [
    'type'     => 'switch',
    'settings' => 'starter_tutor_course_details_author_meta_switch',
    'label'    => esc_html__('Tutor Course Details Author Meta', 'starter'),
    'section'  => 'tutor_course_settings',
    'default'  => '1',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];

  $fields[] = [
    'type'     => 'switch',
    'settings' => 'starter_tutor_course_details_payment_switch',
    'label'    => esc_html__('Tutor Course Details Payment', 'starter'),
    'section'  => 'tutor_course_settings',
    'default'  => '1',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];

  $fields[] = [
    'type'     => 'switch',
    'settings' => 'starter_tutor_course_desc_tab_switch',
    'label'    => esc_html__('Tutor Course Description Tab Swicher', 'starter'),
    'section'  => 'tutor_course_settings',
    'default'  => '1',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];

  $fields[] = [
    'type'     => 'switch',
    'settings' => 'starter_tutor_course_curriculum_tab_switch',
    'label'    => esc_html__('Tutor Course Curriculum Tab Swicher', 'starter'),
    'section'  => 'tutor_course_settings',
    'default'  => '1',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];

  $fields[] = [
    'type'     => 'switch',
    'settings' => 'starter_tutor_course_reviews_tab_switch',
    'label'    => esc_html__('Tutor Course Reviews Tab Swicher', 'starter'),
    'section'  => 'tutor_course_settings',
    'default'  => '1',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];

  $fields[] = [
    'type'     => 'switch',
    'settings' => 'starter_tutor_course_instructor_tab_switch',
    'label'    => esc_html__('Tutor Course Instructor Tab Swicher', 'starter'),
    'section'  => 'tutor_course_settings',
    'default'  => '1',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
  ];
  return $fields;
}

if (function_exists('tutor')) {
  add_filter('kirki/fields', 'starter_tutor_course_fields');
}


/**
 * Added Fields
 */
function starter_typo_fields($fields) {
  // typography settings
  $fields[] = [
    'type'        => 'typography',
    'settings'    => 'typography_body_setting',
    'label'       => esc_html__('Body Font', 'starter'),
    'section'     => 'typo_setting',
    'default'     => [
      'font-family'    => '',
      'variant'        => '',
      'font-size'      => '',
      'line-height'    => '',
      'letter-spacing' => '0',
      'color'          => '',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
      [
        'element' => 'body',
      ],
    ],
  ];

  $fields[] = [
    'type'        => 'typography',
    'settings'    => 'typography_h_setting',
    'label'       => esc_html__('Heading h1 Fonts', 'starter'),
    'section'     => 'typo_setting',
    'default'     => [
      'font-family'    => '',
      'variant'        => '',
      'font-size'      => '',
      'line-height'    => '',
      'letter-spacing' => '0',
      'color'          => '',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
      [
        'element' => 'h1',
      ],
    ],
  ];

  $fields[] = [
    'type'        => 'typography',
    'settings'    => 'typography_h2_setting',
    'label'       => esc_html__('Heading h2 Fonts', 'starter'),
    'section'     => 'typo_setting',
    'default'     => [
      'font-family'    => '',
      'variant'        => '',
      'font-size'      => '',
      'line-height'    => '',
      'letter-spacing' => '0',
      'color'          => '',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
      [
        'element' => 'h2',
      ],
    ],
  ];

  $fields[] = [
    'type'        => 'typography',
    'settings'    => 'typography_h3_setting',
    'label'       => esc_html__('Heading h3 Fonts', 'starter'),
    'section'     => 'typo_setting',
    'default'     => [
      'font-family'    => '',
      'variant'        => '',
      'font-size'      => '',
      'line-height'    => '',
      'letter-spacing' => '0',
      'color'          => '',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
      [
        'element' => 'h3',
      ],
    ],
  ];

  $fields[] = [
    'type'        => 'typography',
    'settings'    => 'typography_h4_setting',
    'label'       => esc_html__('Heading h4 Fonts', 'starter'),
    'section'     => 'typo_setting',
    'default'     => [
      'font-family'    => '',
      'variant'        => '',
      'font-size'      => '',
      'line-height'    => '',
      'letter-spacing' => '0',
      'color'          => '',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
      [
        'element' => 'h4',
      ],
    ],
  ];

  $fields[] = [
    'type'        => 'typography',
    'settings'    => 'typography_h5_setting',
    'label'       => esc_html__('Heading h5 Fonts', 'starter'),
    'section'     => 'typo_setting',
    'default'     => [
      'font-family'    => '',
      'variant'        => '',
      'font-size'      => '',
      'line-height'    => '',
      'letter-spacing' => '0',
      'color'          => '',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
      [
        'element' => 'h5',
      ],
    ],
  ];

  $fields[] = [
    'type'        => 'typography',
    'settings'    => 'typography_h6_setting',
    'label'       => esc_html__('Heading h6 Fonts', 'starter'),
    'section'     => 'typo_setting',
    'default'     => [
      'font-family'    => '',
      'variant'        => '',
      'font-size'      => '',
      'line-height'    => '',
      'letter-spacing' => '0',
      'color'          => '',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
      [
        'element' => 'h6',
      ],
    ],
  ];
  return $fields;
}

add_filter('kirki/fields', 'starter_typo_fields');


// course_settings
function starter_course_fields($fields) {

  $fields[] = [
    'type'        => 'radio-image',
    'settings'    => 'course_style',
    'label'       => esc_html__('Select Course Style', 'starter'),
    'section'     => 'tutor_course_settings',
    'default'     => '5',
    'placeholder' => esc_html__('Select an option...', 'starter'),
    'priority'    => 10,
    'multiple'    => 1,
    'choices'     => [
      'standard'   => get_template_directory_uri() . '/inc/img/course/course-1.jpg',
      'course_with_sidebar' => get_template_directory_uri() . '/inc/img/course/course-2.jpg',
      'course_solid'  => get_template_directory_uri() . '/inc/img/course/course-3.jpg',
    ],
    'default'     => 'standard',
  ];

  $fields[] = [
    'type'     => 'switch',
    'settings' => 'course_search_switch',
    'label'    => esc_html__('Show search?', 'starter'),
    'section'  => 'tutor_course_settings',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
    'active_callback' => [
      [
        'setting'  => 'course_with_sidebar',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];

  $fields[] = [
    'type'     => 'switch',
    'settings' => 'course_latest_post_switch',
    'label'    => esc_html__('Show latest post?', 'starter'),
    'section'  => 'tutor_course_settings',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
    'active_callback' => [
      [
        'setting'  => 'course_with_sidebar',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];

  $fields[] = [
    'type'     => 'switch',
    'settings' => 'course_category_switch',
    'label'    => esc_html__('Show category filter?', 'starter'),
    'section'  => 'tutor_course_settings',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
    'active_callback' => [
      [
        'setting'  => 'course_with_sidebar',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];

  $fields[] = [
    'type'     => 'switch',
    'settings' => 'course_skill_switch',
    'label'    => esc_html__('Show skill filter?', 'starter'),
    'section'  => 'tutor_course_settings',
    'default'  => '0',
    'priority' => 10,
    'choices'  => [
      'on'  => esc_html__('Enable', 'starter'),
      'off' => esc_html__('Disable', 'starter'),
    ],
    'active_callback' => [
      [
        'setting'  => 'course_with_sidebar',
        'operator' => '==',
        'value'    => true,
      ],
    ],
  ];

  return $fields;
}

add_filter('kirki/fields', 'starter_course_fields');




/**
 * Added Fields
 */
function starter_slug_setting($fields) {
  // slug settings
  $fields[] = [
    'type'     => 'text',
    'settings' => 'starter_ev_slug',
    'label'    => esc_html__('Event Slug', 'starter'),
    'section'  => 'slug_setting',
    'default'  => esc_html__('ourevent', 'starter'),
    'priority' => 10,
  ];

  $fields[] = [
    'type'     => 'text',
    'settings' => 'starter_port_slug',
    'label'    => esc_html__('Portfolio Slug', 'starter'),
    'section'  => 'slug_setting',
    'default'  => esc_html__('ourportfolio', 'starter'),
    'priority' => 10,
  ];

  return $fields;
}

add_filter('kirki/fields', 'starter_slug_setting');

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
