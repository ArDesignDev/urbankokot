<?php
/*
Template Name: Reviews page
*/

get_header();
?>

	<main id="primary" class="site-main reviews">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			
			<header class="reviews-header">
				<span aria-hidden="true" 
					class="reviews-header-background"
					style="background-image:url('<?php echo esc_url(get_field('reviews_background_image')); ?>');">
				</span>
				<div class="reviews-header-content">
					<h1 class="page-title">
						<?php the_title(); ?>
					</h1>
				</div>
			</header>

			<div class="container-padding">
				<?php get_template_part('template-parts/sections/reviews'); ?>
			</div>


		<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
