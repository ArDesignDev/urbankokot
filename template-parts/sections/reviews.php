<div class="reviews">
    <?php if (have_rows('reviews')): ?>
        <?php while (have_rows('reviews')): the_row(); ?>
            <div class="review-item fade-in">
                <div class="review-text">
                    <?php the_sub_field('review_text'); ?>
                </div>
                <p class="review-person"><?php the_sub_field('reviewers_name'); ?></p>
                <p class="review-company"><?php the_sub_field('reviewers_company'); ?></p>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No reviews available at the moment.</p>
    <?php endif; ?>
</div>
