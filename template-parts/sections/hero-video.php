<div class="hero-video">

	<?php
	// desktop video
	$video_file = get_field('hero_video');
	if ($video_file) {
		echo '<video class="hero-video-desktop" autoplay loop muted playsinline><source src="' . esc_url($video_file['url']) . '" type="video/mp4"></video>';
	}

	// mobile video
	$video_file_mobile = get_field('hero_video_mobile');
	if ($video_file_mobile) {
		echo '<video class="hero-video-moobile" autoplay loop muted playsinline><source src="' . esc_url($video_file_mobile['url']) . '" type="video/mp4"></video>';
	}
	?>

</div>