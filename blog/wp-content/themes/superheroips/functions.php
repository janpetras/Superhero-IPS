<?php
// Add scripts and stylesheets
function startwordpress_scripts() {
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
  wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/vendor/fontawesome/css/font-awesome.min.css');
  wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/vendor/flaticons/flaticon.css');
  wp_enqueue_style( 'hover', get_template_directory_uri() . '/assets/vendor/hover/css/hover-min.css');
  wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/vendor/wow/animate.css');
  wp_enqueue_style( 'magnific', get_template_directory_uri() . '/assets/vendor/mfp/css/magnific-popup.css');
  wp_enqueue_style( 'blog', get_template_directory_uri() . '/assets/custom/css/blog.css');
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/vendor/jquery/js/jquery-2.2.0.min.js');
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js');
  wp_enqueue_script( 'imgloaded', get_template_directory_uri() . '/assets/vendor/imagesloaded/js/imagesloaded.pkgd.min.js');
  wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/vendor/isotope/js/isotope.pkgd.min.js');
  wp_enqueue_script( 'magnific', get_template_directory_uri() . '/assets/vendor/mfp/js/jquery.magnific-popup.min.js');
  wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/vendor/waypoints/waypoints.min.js');
  wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/vendor/anicounter/jquery.counterup.min.js');
  wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/vendor/wow/wow.min.js');
  wp_enqueue_script( 'pjax', get_template_directory_uri() . '/assets/vendor/pjax/jquery.pjax.js');
  wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/custom/js/custom.js');
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// WordPress Titles
add_theme_support( 'title-tag' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

/**
 * Link all post thumbnails to the post permalink.
 *
 * @param string $html          Post thumbnail HTML.
 * @param int    $post_id       Post ID.
 * @param int    $post_image_id Post image ID.
 * @return string Filtered post image HTML.
 */
function wpdocs_post_image_html( $html, $post_id, $post_image_id ) {
    $html = '<a href="' . get_permalink( $post_id ) . '" alt="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
    return $html;
}
add_filter( 'post_thumbnail_html', 'wpdocs_post_image_html', 10, 3 );