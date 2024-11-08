<div class="references">
    <div class="container">

        <div class="references-header">
            <h2 class="references-title a-center"><?php the_field('references_title'); ?></h2>
            <p class="references-subtitle a-center"><?php the_field('references_subtitle'); ?></p>
        </div>

        <div class="references-inner">

            <!-- First Gallery Slider -->
            <?php if ($gallery_images_1 = get_field('logos_1')): ?>
                <div class="references-slider references-slider-1">
                    <?php foreach ($gallery_images_1 as $image): ?>
                        <figure class="gallery-image">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy">
                        </figure>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Second Gallery Slider -->
            <?php if ($gallery_images_2 = get_field('logos_2')): ?>
                <div class="references-slider references-slider-2">
                    <?php foreach ($gallery_images_2 as $image): ?>
                        <figure class="gallery-image">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy">
                        </figure>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>

    </div>
</div>
