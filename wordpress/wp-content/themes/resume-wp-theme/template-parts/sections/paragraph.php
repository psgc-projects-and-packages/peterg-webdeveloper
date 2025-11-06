<?php
/**
 * Template part for displaying paragraph-based sections
 * 
 * Used for: Interests, Call to Action, general text sections
 * 
 * @package Resume_WP_Theme
 * 
 * @param array $args {
 *     @type string $section_title Section heading
 *     @type string $section_id    Section ID for anchor links
 *     @type string $content       WYSIWYG content (HTML allowed)
 *     @type string $section_class Additional CSS classes
 * }
 */

$section_title = isset($args['section_title']) ? $args['section_title'] : '';
$section_id = isset($args['section_id']) ? $args['section_id'] : '';
$content = isset($args['content']) ? $args['content'] : '';
$section_class = isset($args['section_class']) ? $args['section_class'] : 'resume-section';

// Don't render if no content
if (empty($content) && empty($section_title)) {
    return;
}

// Generate section ID from title if not provided
if (empty($section_id) && !empty($section_title)) {
    $section_id = sanitize_title($section_title);
}
?>

<section class="<?php echo esc_attr($section_class); ?> p-3 p-lg-5 d-flex flex-column" <?php echo !empty($section_id) ? 'id="' . esc_attr($section_id) . '"' : ''; ?>>
    <div class="my-auto">
        <?php if (!empty($section_title)) : ?>
            <h2 class="mb-4"><?php echo esc_html($section_title); ?></h2>
        <?php endif; ?>
        
        <div class="entry-content">
            <?php echo wp_kses_post($content); ?>
        </div>
    </div>
</section>

