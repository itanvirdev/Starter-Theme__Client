<?php

/**
 * Template part for displaying footer layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starter
 */

$starter_footer_social_switcher = get_theme_mod('footer_social_switcher', false);
$starter_footer_copyright_column = $starter_footer_social_switcher ? 'col-xl-6 col-lg-6 col-md-6 col-sm-6' : 'col-12 text-center';

// $starter_footer_bg_img = get_theme_mod('footer_bg_img');
$starter_footer_bg_color = get_theme_mod('footer_bg_color', '#24292d');

// from page
// $starter_page_footer_bg_img = function_exists('get_field') ? get_field('page_footer_bg_img') : '';
$starter_page_footer_bg_color = function_exists('get_field') ? get_field('page_footer_bg_color') : '';

// bg image
// $bg_img = !empty($starter_page_footer_bg_img['url']) ? $starter_page_footer_bg_img['url'] : $starter_footer_bg_img;

// bg color
$bg_color = !empty($starter_page_footer_bg_color) ? $starter_page_footer_bg_color : $starter_footer_bg_color;


// footer_columns
$footer_column = 0;
$footer_column = get_theme_mod('footer_widget_column', 4);


for ($num = 1; $num <= $footer_column; $num++) {

  switch ($num) {
    case '1':
      $footer_class[1] = 'col-12';
      break;
    case '2':
      $footer_class[1] = 'col-md-6';
      $footer_class[2] = 'col-md-6';
      break;
    case '3':
      $footer_class[1] = 'col-xl-4 col-lg-12 col-md-12';
      $footer_class[2] = 'col-xl-4 col-lg-6 col-md-6 ';
      $footer_class[3] = 'col-xl-4 col-lg-6 col-md-6';
      break;
    case '4':
      $footer_class[1] = 'col-xl-4 col-lg-6 col-md-12 col-sm-12';
      $footer_class[2] = 'col-xl-3 col-lg-6 col-md-6 col-sm-6';
      $footer_class[3] = 'col-xl-2 col-lg-6 col-md-6 col-sm-6';
      $footer_class[4] = 'col-xl-3 col-lg-6 col-md-8 col-sm-12';
      break;
    case '5':
      $footer_class[1] = 'col-xl-2 col-lg-2 col-md-3 col-sm-4';
      $footer_class[2] = 'col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6';
      $footer_class[3] = 'col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6';
      $footer_class[4] = 'col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6';
      $footer_class[5] = 'col-xl-4 col-lg-4 col-md-8 col-sm-8';
      break;
    default:
      $footer_class = 'col-lg-3 col-md-6';
      break;
  }
}
?>


<!-- footer start -->
<footer id="footer">
  <div class="ss-footer__area default__footer">
    <?php if (is_active_sidebar('footer-1') or is_active_sidebar('footer-2') or is_active_sidebar('footer-3') or is_active_sidebar('footer-4')) : ?>
      <div class="ss-footer__wrapper" data-bg-color="<?php print esc_attr($bg_color); ?>">
        <div class="container">
          <div class="row">
            <?php
            for ($num = 1; $num <= $footer_column; $num++) {

              print '<div class="' . esc_attr($footer_class[$num]) . '">';
              dynamic_sidebar('footer-' . $num);
              print '</div>';
            }
            ?>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <div class="ss-footer__copyright footer-default__copyright">
      <div class="container">
        <div class="row">
          <div class="<?php echo esc_attr($starter_footer_copyright_column); ?>">
            <div class="footer-copyright__text">
              <p><?php print starter_copyright_text(); ?></p>
            </div>
          </div>
          <?php if (!empty($starter_footer_social_switcher)) : ?>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
              <div class="footer-copyright__links text-sm-end">
                <?php starter_footer_social_profiles(); ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer end -->