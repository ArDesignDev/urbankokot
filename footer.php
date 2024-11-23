<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aquaar
 */

?>

	<footer class="footer">
		<div class="row row-center">
			<div class="col-sm-3 mobile-last">
				<p class="footer-copy">&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?></p>	
			</div>
			<div class="col-sm-6">
				
			<?php
			$in_link = get_field('linkedin', 'option');
			$yt_link = get_field('youtube', 'option');
			$ig_link = get_field('instagram', 'option');
			$fb_link = get_field('facebook', 'option');

			if ($in_link):
				$in_link_url = esc_url($in_link['url']);
				$in_link_text = esc_html($in_link['title']);
			endif; 

			if ($yt_link):
				$yt_link_url = esc_url($yt_link['url']);
				$yt_link_text = esc_html($yt_link['title']);
			endif;

			if ($ig_link):
				$ig_link_url = esc_url($ig_link['url']);
				$ig_link_text = esc_html($ig_link['title']);
			endif;

			if ($fb_link):
				$fb_link_url = esc_url($fb_link['url']);
				$fb_link_text = esc_html($fb_link['title']);
			endif;
			?>
			<ul class="footer-social">
				<?php if ($ig_link): ?><li>
					<a href="<?php echo $ig_link_url; ?>" target="_blank" class="link footer-link">
						<span class="mask">
							<div class="link-container">
								<span class="link-title1 title"> <?php echo $ig_link_text; ?></span>
								<span class="link-title2 title"> <?php echo $ig_link_text; ?></span>
							</div>
						</span>
					</a>
				</li> <?php endif; ?>
				<?php if ($in_link): ?><li>
					<a href="<?php echo $in_link_url; ?>" target="_blank" class="link footer-link">
						<span class="mask">
							<div class="link-container">
								<span class="link-title1 title">  <?php echo $in_link_text; ?></span>
								<span class="link-title2 title">  <?php echo $in_link_text; ?></span>
							</div>
						</span>
					</a>
				</li> <?php endif; ?>
				<?php if ($yt_link): ?><li>
					<a href="<?php echo $yt_link_url; ?>" target="_blank" class="link footer-link">
						<span class="mask">
							<div class="link-container">
								<span class="link-title1 title">  <?php echo $yt_link_text; ?></span>
								<span class="link-title2 title">  <?php echo $yt_link_text; ?></span>
							</div>
						</span>
					</a>
				</li> <?php endif; ?>

				<?php if ($fb_link): ?><li>
					<a href="<?php echo $fb_link_url; ?>" target="_blank" class="link footer-link">
						<span class="mask">
							<div class="link-container">
								<span class="link-title1 title">  <?php echo $fb_link_text; ?></span>
								<span class="link-title2 title">  <?php echo $fb_link_text; ?></span>
							</div>
						</span>
					</a>
				</li> <?php endif; ?>
			
			</ul>

			</div>
			<div class="col-sm-3 footer-top">
				<?php $backToTop = get_field('back_to_top', 'option'); ?>
				<a href="javascript:;" class="back-to-top">
					<?php if ($backToTop): ?>
						<span><?php echo wp_kses_post($backToTop); ?></span>
						<span class="footer-top-icon">
							<svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12 20L12 4M12 4L18 10M12 4L6 10" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</span>
						<?php else: ?>
						<span> Back to Top</span>
					<?php endif; ?>
				</a>
			</div>
		</div>
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
