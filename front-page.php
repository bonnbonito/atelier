<?php
/**
 * The template for displaying front page.
 *
 * This is the template that displays front page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MLA_Wordpress_Theme
 */

get_header(); ?>
<?php echo do_shortcode( '[rev_slider alias="home"]' ); ?>

<?php
get_footer();
