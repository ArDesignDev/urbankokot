<?php 

function load_more_posts() {
    $paged = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $category = isset($_POST['category']) ? sanitize_text_field($_POST['category']) : '';

    $args = array(
        'post_type' => 'post',
        'paged' => $paged,
        'post_status' => 'publish',
    );

    // Add category filter if category is provided
    if (!empty($category)) {
        $args['category_name'] = $category; // For category slug
        // Or use 'cat' => intval($category) if passing category ID
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            get_template_part('template-parts/sections/project', get_post_type());
        }
        wp_reset_postdata();

        if ($paged >= $query->max_num_pages) {
            echo '<script>jQuery("#load-more").remove();</script>';
        }
    } else {
        echo '<div>No more posts to load</div>'; // Clear indication for debugging
    }

    wp_die();
}
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
