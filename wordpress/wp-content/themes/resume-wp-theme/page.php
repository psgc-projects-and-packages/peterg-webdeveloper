<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package Resume_WP_Theme
 */

get_header(); ?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="page-content">
    <div class="my-auto">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('resume-item'); ?>>
                <div class="resume-content mr-auto">
                    <h1 class="mb-4"><?php the_title(); ?></h1>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail mb-4">
                            <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php 
                        the_content();
                        
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'resume-wp-theme'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>

