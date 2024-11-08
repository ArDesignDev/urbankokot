<section class="categories-section">
    <div class="container">
        
        <!-- Category Navigation Header -->
        <section class="categories-section-header">
            <div class="row row-center">
                <div class="col-sm-3">
                    <h2 class="categories-section-title">Work</h2>
                </div>
                <div class="col-sm-9 categories-section-header-nav">
                    <ul class="category-navigation">
                        <?php
                        $categories = get_categories(array(
                            'taxonomy' => 'category',
                            'hide_empty' => true, 
                            'orderby' => 'name',
                            'order' => 'ASC',
                        ));

                        // Generate navigation links
                        foreach ($categories as $category) :
                            $category_slug = esc_attr(str_replace(' ', '-', strtolower($category->name)));
                        ?>
                            <li><a href="#<?php echo $category_slug; ?>"><?php echo esc_html($category->name); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Category Items -->
        <?php foreach ($categories as $category) :
            // Get category details and custom image
            $category_slug = esc_attr(str_replace(' ', '-', strtolower($category->name)));
            $category_image_id = get_term_meta($category->term_id, 'category_image', true);
            $category_image_url = $category_image_id ? wp_get_attachment_image_url($category_image_id, 'large') : '';
        ?>
            <div class="category-item" id="<?php echo $category_slug; ?>">
                <div class="row">

                    <!-- Category Image -->
                    <?php if ($category_image_url): ?>
                        <div class="col-sm-8 category-image">
                            <figure>
                                <img src="<?php echo esc_url($category_image_url); ?>" alt="<?php echo esc_attr($category->name); ?>" loading="lazy">
                            </figure>
                        </div>
                    <?php endif; ?>

                    <!-- Category Content -->
                    <div class="col-sm-4 category-content">
                        <h3 class="category-title"><?php echo esc_html($category->name); ?></h3>
                        <?php if ($category->description): ?>
                            <p class="category-description"><?php echo wp_kses_post($category->description); ?></p>
                        <?php endif; ?>
                        <div class="btn">
                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="category-link">
                                View Projects
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>

    </div>
</section>
