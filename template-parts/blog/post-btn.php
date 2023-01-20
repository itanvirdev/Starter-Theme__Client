<?php

/**
 * Template part for displaying post btn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starter
 */

$starter_blog_btn = get_theme_mod('starter_blog_btn', 'Read More');
$starter_blog_btn_switch = get_theme_mod('starter_blog_btn_switch', true);

?>

<?php if (!empty($starter_blog_btn_switch)) : ?>
    <div class="ss-post__btn">
        <a href="<?php the_permalink(); ?>" class="ss-btn"><?php print esc_html($starter_blog_btn); ?></a>
    </div>
<?php endif; ?>