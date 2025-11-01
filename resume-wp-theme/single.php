<?php
/**
 * The template for displaying single posts
 *
 * @package Resume_WP_Theme
 */

get_header(); ?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="blog-post">
    <div class="my-auto">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('resume-item'); ?>>
                <div class="resume-content mr-auto">
                    <h1 class="mb-0"><?php the_title(); ?></h1>
                    <div class="subheading mb-3">
                        <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                        <?php if (get_the_category()) : ?>
                            <span class="mx-2">|</span>
                            <?php the_category(', '); ?>
                        <?php endif; ?>
                    </div>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail mb-4">
                            <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php the_content(); ?>
                        
                        <?php
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'resume-wp-theme'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>

                    <?php if (has_tag()) : ?>
                        <div class="mt-4">
                            <strong><?php _e('Tags:', 'resume-wp-theme'); ?></strong>
                            <?php the_tags('<span class="badge badge-secondary mr-1">', '</span><span class="badge badge-secondary mr-1">', '</span>'); ?>
                        </div>
                    <?php endif; ?>

                    <nav class="post-navigation mt-5 mb-5" aria-label="Post navigation">
                        <div class="row">
                            <div class="col-md-6">
                                <?php previous_post_link('%link', '<span class="nav-subtitle">« Previous Post</span><br><span class="nav-title">%title</span>'); ?>
                            </div>
                            <div class="col-md-6 text-right">
                                <?php next_post_link('%link', '<span class="nav-subtitle">Next Post »</span><br><span class="nav-title">%title</span>'); ?>
                            </div>
                        </div>
                    </nav>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>

