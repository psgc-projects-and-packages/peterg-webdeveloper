<?php
/**
 * The template for displaying 404 pages
 *
 * @package Resume_WP_Theme
 */

get_header(); ?>

<section class="resume-section p-3 p-lg-5 d-flex flex-column" id="404-error">
    <div class="my-auto">
        <h1 class="mb-0">404</h1>
        <h2 class="mb-4">Page Not Found</h2>
        <p class="mb-4">Sorry, the page you are looking for could not be found.</p>
        <p class="mb-5">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Go to Homepage</a>
        </p>
        <div class="mt-5">
            <h3 class="mb-3">Try searching instead:</h3>
            <?php get_search_form(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

