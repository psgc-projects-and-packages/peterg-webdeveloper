<?php
/**
 * The main template file for blog archive
 *
 * @package Resume_WP_Theme
 */

get_header(); ?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="blog">
    <div class="my-auto">
        <h2 class="mb-5"><?php echo is_home() ? 'Blog' : get_the_archive_title(); ?></h2>

        <?php if (have_posts()) : ?>
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
                                <?php 
                                if (is_archive() || is_home()) {
                                    the_excerpt();
                                    echo '<p><a href="' . esc_url(get_permalink()) . '" class="btn btn-primary">Read More</a></p>';
                                } else {
                                    the_content();
                                }
                                ?>
                            </div>
                            <?php if (has_tag()) : ?>
                                <div class="mt-3">
                                    <?php the_tags('<span class="badge badge-secondary mr-1">', '</span><span class="badge badge-secondary mr-1">', '</span>'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endwhile; ?>

                <nav aria-label="Blog navigation" class="mt-5">
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
                <p><?php _e('No posts found.', 'resume-wp-theme'); ?></p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
