<section class="section section-contact" id="contact">
    <div class="container">
        <div class="row">
            <!-- Left Section: Contact Content from ACF Fields -->
            <div class="col-sm-6 section-content">
                <?php
                // Access fields within the contact_content group
                $contact_content = get_field('contact_content');
                
                if ($contact_content):
                    if ($title = $contact_content['contact_title']): ?>
                        <h2 class="section-title"><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>

                    <?php if ($description = $contact_content['contact_description']): ?>
                        <div class="section-desc">
                            <?php if ($highlight_text = $contact_content['contact_highlight_text']): ?>
                                <span class="pre-text split-text"><?php echo esc_html($highlight_text); ?></span>
                            <?php endif; ?>
                            <?php echo wp_kses_post($description); ?>
                        </div>
                    <?php endif; ?>

                    <div class="section-content-info">
                        <?php if ($email = $contact_content['contact_email']): ?>
                            <p><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></p>
                        <?php endif; ?>

                        <?php if ($phone = $contact_content['contact_phone']): ?>
                            <p><a href="tel:<?php echo esc_attr($phone); ?>"><?php echo esc_html($phone); ?></a></p>
                        <?php endif; ?>
                    </div>

                <?php endif; ?>
            </div>

            <div class="col-sm-6">
                <?php echo do_shortcode('[contact-form-7 id="733af6a" title="Contact us"]'); ?>
            </div>
        </div>
    </div>
</section>
