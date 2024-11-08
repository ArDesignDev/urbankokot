<section class="section about-section">
    <div class="container">
        <div class="row row-center">
            <!-- Image Column -->
            <div class="col-sm-6 section-image">
                <?php if ($image = get_field('about_image')): ?>
                    <figure>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy">
                    </figure>
                <?php endif; ?>
            </div>

            <!-- Text Column -->
            <div class="col-sm-6 section-content">
                <?php
                // Access fields within the about_content group
                $about_content = get_field('about_content');
                
                if ($about_content):
                    if ($title = $about_content['about_title']): ?>
                        <h2 class="section-title"><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>

                    <?php if ($description = $about_content['about_description']): ?>
                        <div class="section-desc">
                            <?php if ($preText = $about_content['about_pre_text']): ?>
                                <span class="pre-text split-text"><?php echo esc_html($preText); ?></span>
                            <?php endif; ?>
                            <?php echo wp_kses_post($description); ?>
                        </div>
                    <?php endif;
                endif; ?>
            </div>

        </div>
    </div>
</section>
