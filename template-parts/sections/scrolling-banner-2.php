<section class="scrolling-banner">
    <div class="scrolling-banner-inner">
        <div class="scrolling-banner-slick">
            <?php 
            // Retrieve the text for the banner item
            $banner_text = get_field('banner_text');
            
            // Check if banner_text exists before rendering
            if ($banner_text):
                // Set the number of items
                $num_items = 9;

                // Loop to create the specified number of banner items
                for ($i = 0; $i < $num_items; $i++): ?>
                    <div class="scrolling-banner-item">
                        <p><?php echo esc_html($banner_text); ?></p>
                    </div>
                <?php endfor;
            endif;
            ?>
        </div>
    </div>
</section>
