<section class="section section-services" id="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 section-content">
                <?php
                // Access fields within the about_content group
                $about_content = get_field('services_content');
                
                if ($about_content):
                    if ($title = $about_content['services_title']): ?>
                        <h2 class="section-title"><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>

                    <?php if ($description = $about_content['services_description']): ?>
                        <div class="section-desc">
                            <?php if ($preText = $about_content['services_pre_text']): ?>
                                <span class="pre-text split-text"><?php echo esc_html($preText); ?></span>
                            <?php endif; ?>
                            <?php echo wp_kses_post($description); ?>
                        </div>
                    <?php endif;
                     if ($cta = $about_content['services_cta']): ?>    
                     <div class="section-services-cta">
                        <a href="<?php echo esc_url($cta['url']); ?>" class="link">
                            <span class="mask">
                                <div class="link-container">
                                <span class="link-title1 title"> <?php echo esc_html($cta['title']); ?></span>
                                <span class="link-title2 title"> <?php echo esc_html($cta['title']); ?></span>
                                </div>
                            </span>
                        </a>
                    </div>
                    <?php endif;
                endif; ?>
            </div>
            <div class="col-sm-6">
                 <div class="accordion">
                    <?php if (have_rows('accordion_items')): ?>
                        <?php while (have_rows('accordion_items')): the_row(); ?>
                            <div class="accordion-row">
                                <div class="accordion-q">
                                    <h4><?php echo esc_html(get_sub_field('accordion_question')); ?></h4>
                                </div>
                                <div class="accordion-a">
                                    <?php echo wp_kses_post(get_sub_field('accordion_answer')); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


