<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aquaar
 */

get_header();
?>

	<main id="primary" class="site-main category">
		
		<header class="category-header">
			<span aria-hidden="true" 
				class="category-header-background"
				style="background-image:url('<?php echo esc_url(get_field('category_background_image', 'option')); ?>');">
			</span>
			<div class="category-header-content">
				<?php
				$archive_title = get_the_archive_title();
				$category_name = single_cat_title('', false);
				?>
				<h1 class="page-title"><?php echo esc_html($category_name); ?></h1>
			</div>
		</header>

		<div class="container">
			<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/sections/project', get_post_type() );

			endwhile;

			the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

			<div class="category-footer">
				<?php get_template_part('template-parts/category-nav'); ?>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
