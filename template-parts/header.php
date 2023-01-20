<?php

/**
 * Template part for displaying header layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starter
 */

// info
$starter_topbar_switch = get_theme_mod('starter_topbar_switch', false);
$starter_phone_num = get_theme_mod('starter_phone_num', __('786 686 350 36', 'starter'));
$starter_mail_id = get_theme_mod('starter_mail_id', __('info@starter.com', 'starter'));
$starter_address = get_theme_mod('starter_address', __('Moon ave, New York, 2020 NY US', 'starter'));
$starter_address_url = get_theme_mod('starter_address_url', __('https://goo.gl/maps/qzqY2PAcQwUz1BYN9', 'starter'));

// contact button
$starter_button_text = get_theme_mod('header_right_button_text', __('Contact Us', 'starter'));
$starter_button_link = get_theme_mod('header_right_button_link', __('#', 'starter'));

// acc button
$starter_acc_button_text = get_theme_mod('starter_acc_button_text', __('Login', 'starter'));
$starter_acc_button_link = get_theme_mod('starter_acc_button_link', __('#', 'starter'));

// header right
$starter_header_right = get_theme_mod('starter_header_right', false);
$starter_menu_col = $starter_header_right ? 'col-xl-7 col-lg-6 col-md-6 col-6' : 'col-xl-10 col-lg-10 col-md-6 col-6 text-end';

?>
<!-- header-area-start -->
<header id="header-sticky" class="header-area">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-2 col-lg-2 col-md-6 col-6">
        <div class="logo-area">
          <div class="logo">
            <?php starter_header_logo(); ?>
          </div>
        </div>
      </div>
      <div class="<?php echo esc_attr($starter_menu_col); ?>">
        <div class="menu-area menu-padding">
          <div class="main-menu">
            <nav id="mobile-menu">
              <?php starter_header_menu(); ?>
            </nav>
          </div>
        </div>
        <div class="side-menu-icon d-lg-none text-end">
          <a href="javascript:void(0)" class="info-toggle-btn f-right sidebar-toggle-btn"><i class="fal fa-bars"></i></a>
        </div>
      </div>

      <?php if (!empty($starter_header_right)) : ?>
        <div class="col-xl-3 col-lg-4 d-none d-lg-block">
          <div class="header-info f-right">
            <?php
            if (!empty($starter_phone_num)) :
            ?>
              <div class="info-item info-item-right">
                <span><?php echo esc_html__('Phone Number', 'starter'); ?></span>
                <h5><a href="tel:<?php echo esc_attr($starter_phone_num); ?>"><?php echo esc_html($starter_phone_num); ?></a></h5>
              </div>
            <?php
            endif;
            ?>

            <?php
            if (!empty($starter_mail_id)) :
            ?>
              <div class="info-item">
                <span><?php echo esc_html__('Free Consultancy', 'starter'); ?></span>
                <h5><a href="mailto:<?php echo esc_attr($starter_mail_id); ?>"><?php echo esc_html($starter_mail_id); ?></a></h5>
              </div>
            <?php
            endif;
            ?>
          </div>
        </div>
      <?php endif; ?>

    </div>
  </div>
</header>
<!-- header-area-end -->

<?php get_template_part('template-parts/header/header-side-info'); ?>