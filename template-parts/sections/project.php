<?php
/**
 * Template part for displaying category posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aquaar
 */

?>

<article id="post-<?php the_ID(); ?>" class="project">

	<?php $multi_videos = get_field('multi_videos'); ?>

	<div class="row">
		<div class="<?php if ($multi_videos): ?>col-sm-12 project-content-wide<?php else: ?>col-sm-4<?php endif; ?> project-content">
			<h3 class="project-title"> <?php the_title(); ?></h3>
			<div class="project-desc">
				<?php the_content(); ?>
			</div>

			<ul class="project-info">
				<?php if ($client = get_field('project_client')): ?>
					<li><strong><?php echo the_field('client_text', 'option'); ?></strong> <?php echo esc_html($client); ?></li>
				<?php endif; ?>
				<?php if ($date = get_field('project_date')): ?>
					<li><strong><?php echo the_field('date_text', 'option'); ?></strong> <?php echo esc_html($date); ?></li>
				<?php endif; ?>
				<?php if ($services = get_field('project_services')): ?>
					<li><strong><?php echo the_field('services_text', 'option'); ?></strong> <?php echo esc_html($services); ?></li>
				<?php endif; ?>
			</ul>
		</div>
		<div class="<?php if ($multi_videos): ?>col-sm-12<?php else: ?>col-sm-8 <?php endif; ?> project-video">
			
		<?php
		if ($multi_videos) : ?>

		    <div class="video-slider">

			<?php if (have_rows('project_videos')): // Check if there are rows in the 'project_videos' repeater ?>
				<?php while (have_rows('project_videos')): the_row(); // Loop through each row in 'project_videos' ?>
					
					<?php 
					// Get the 'project_video_content' group
					$video_content = get_sub_field('project_video_content');
					
					if ($video_content): 
						$video_file_multi = $video_content['video_file'];
						$video_cover_multi = $video_content['video_cover'];
					?>
						<?php if ($video_file_multi): ?>
							<div class="video-slider-item">
								<div class="custom-video-wrapper">
									<!-- Overlay with Custom Play Button and Background -->
									<div class="video-overlay" style="background-image:url('<?php echo esc_url($video_cover_multi); ?>')">

										<button id="custom-play-button" class="play-button">
											<svg fill="#66FA7B" height="60px" width="60px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
												viewBox="0 0 60 60" xml:space="preserve">
												<g>
													<path d="M45.563,29.174l-22-15c-0.307-0.208-0.703-0.231-1.031-0.058C22.205,14.289,22,14.629,22,15v30
														c0,0.371,0.205,0.711,0.533,0.884C22.679,45.962,22.84,46,23,46c0.197,0,0.394-0.059,0.563-0.174l22-15
														C45.836,30.64,46,30.331,46,30S45.836,29.36,45.563,29.174z M24,43.107V16.893L43.225,30L24,43.107z"/>
													<path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
														S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
												</g>
											</svg>
										</button>
									</div>
									<!-- Video Element with Controls Hidden Initially -->
									<video class="custom-video" preload="metadata" controls>
										<source src="<?php echo esc_url($video_file_multi['url']); ?>" type="video/mp4">
									</video>

								</div>
							</div>
						<?php endif; ?>
					<?php endif; ?>
					
				<?php endwhile; ?>
			<?php endif; ?>
			</div>

		 <?php else: ?>

			<?php $video_file = get_field('project_video');

			if ($video_file): ?>
				<div class="custom-video-wrapper">
					<!-- Overlay with Custom Play Button and Background -->
					<div class="video-overlay" style="background-image:url('<?php echo esc_url(the_field('project_video_cover')); ?>')">

						<button id="custom-play-button" class="play-button">
						<svg fill="#66FA7B" height="60px" width="60px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
								viewBox="0 0 60 60" xml:space="preserve">
							<g>
								<path d="M45.563,29.174l-22-15c-0.307-0.208-0.703-0.231-1.031-0.058C22.205,14.289,22,14.629,22,15v30
									c0,0.371,0.205,0.711,0.533,0.884C22.679,45.962,22.84,46,23,46c0.197,0,0.394-0.059,0.563-0.174l22-15
									C45.836,30.64,46,30.331,46,30S45.836,29.36,45.563,29.174z M24,43.107V16.893L43.225,30L24,43.107z"/>
								<path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
									S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"/>
							</g>
							</svg>
						</button>
					</div>
					<!-- Video Element with Controls Hidden Initially -->
					<video class="custom-video" preload="metadata" controls>
						<source src="<?php echo esc_url($video_file['url']); ?>" type="video/mp4">
					</video>

				</div>
			<?php endif; ?>
		 <?php endif; ?>


		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
