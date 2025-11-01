<?php
/**
 * The template for displaying search results
 *
 * @package Resume_WP_Theme
 */

get_header(); ?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="search-results">
    <div class="my-auto">
        <h2 class="mb-5">Search Results</h2>

        <?php if (have_posts()) : ?>
            <p class="mb-4"><?php printf(__('Search results for: %s', 'resume-wp-theme'), '<strong>' . get_search_query() . '</strong>'); ?></p>

            <div class="blog-posts">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('resume-item d-flex flex-column flex-md-row mb-5'); ?>>
                        <div class="resume-content mr-auto">
                            <h3 class="mb-0">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="subheading mb-3">
                                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                                <?php if (get_the_category()) : ?>
                                    <span class="mx-2">|</span>
                                    <?php the_category(', '); ?>
                                <?php endif; ?>
                            </div>
                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                                <p><a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-primary mt-2">Read More</a></p>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>

                <nav aria-label="Search navigation" class="mt-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <?php previous_posts_link('<span class="page-link">« Previous</span>'); ?>
                        </li>
                        <li class="page-item">
                            <?php next_posts_link('<span class="page-link">Next »</span>'); ?>
                        </li>
                    </ul>
                </nav>
            </div>
        <?php else : ?>
            <div class="resume-item">
                <p><?php _e('Sorry, but nothing matched your search terms. Please try again with different keywords.', 'resume-wp-theme'); ?></p>
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>

