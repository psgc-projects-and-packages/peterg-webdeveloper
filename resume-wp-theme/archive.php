<?php
/**
 * The template for displaying archive pages
 *
 * @package Resume_WP_Theme
 */

get_header(); ?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="archive">
    <div class="my-auto">
        <h2 class="mb-5"><?php the_archive_title(); ?></h2>

        <?php if (have_posts()) : ?>
            <?php $archive_description = get_the_archive_description(); ?>
            <?php if ($archive_description) : ?>
                <div class="archive-description mb-4">
                    <?php echo $archive_description; ?>
                </div>
            <?php endif; ?>

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

                <nav aria-label="Archive navigation" class="mt-5">
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
                <p><?php _e('No posts found in this archive.', 'resume-wp-theme'); ?></p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>

