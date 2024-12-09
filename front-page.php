<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aquaar
 */

get_header();
?>
<div class="loader-screen">
	<div class="loader"></div>
</div>

	<main id="primary" class="site-main">
		
		<?php get_template_part('template-parts/sections/hero-video'); ?>
		<?php get_template_part('template-parts/sections/about'); ?>

		<?php get_template_part('template-parts/sections/scrolling-banner'); ?>	

		<?php get_template_part('template-parts/sections/services'); ?>
		<?php get_template_part('template-parts/sections/references'); ?>
		<?php get_template_part('template-parts/sections/categories'); ?>

		<?php get_template_part('template-parts/sections/scrolling-banner-2'); ?>

		<?php get_template_part('template-parts/sections/contact'); ?>

	</main><!-- #main -->

<?php
get_footer();
