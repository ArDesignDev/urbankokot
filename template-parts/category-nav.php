<?php
// Get the current category ID
$current_category = get_queried_object();
$current_category_id = $current_category->term_id;

// Get all categories in the order you want (you could use custom sorting here)
$categories = get_categories(array(
    'orderby' => 'name', // Order alphabetically, or change to your preferred order
    'order' => 'ASC',
    'hide_empty' => true,
));

// Find the current category in the list
$category_ids = wp_list_pluck($categories, 'term_id');
$current_index = array_search($current_category_id, $category_ids);

// Calculate previous and next categories
$prev_index = ($current_index - 1 + count($categories)) % count($categories);
$next_index = ($current_index + 1) % count($categories);

// Get previous and next categories
$prev_category = $categories[$prev_index];
$next_category = $categories[$next_index];
?>

<!-- Display the navigation links at the bottom of the page -->
<div class="category-navigation">
    <div class="nav-left">
        <a href="<?php echo esc_url(get_category_link($prev_category->term_id)); ?>">
        <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.2929 4.29289C12.6834 3.90237 13.3166 3.90237 13.7071 4.29289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L13.7071 19.7071C13.3166 20.0976 12.6834 20.0976 12.2929 19.7071C11.9024 19.3166 11.9024 18.6834 12.2929 18.2929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L12.2929 5.70711C11.9024 5.31658 11.9024 4.68342 12.2929 4.29289Z" fill="#000000"/>
</svg><?php echo esc_html($prev_category->name); ?>
        </a>
    </div>
    <div class="nav-right">
        <a href="<?php echo esc_url(get_category_link($next_category->term_id)); ?>">
            <?php echo esc_html($next_category->name); ?> <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.2929 4.29289C12.6834 3.90237 13.3166 3.90237 13.7071 4.29289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L13.7071 19.7071C13.3166 20.0976 12.6834 20.0976 12.2929 19.7071C11.9024 19.3166 11.9024 18.6834 12.2929 18.2929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L12.2929 5.70711C11.9024 5.31658 11.9024 4.68342 12.2929 4.29289Z" fill="#000000"/>
</svg>
        </a>
    </div>
</div>
