<?php
/**
 * Template part for displaying resume-style sections
 * 
 * Used for: Experience, Education, and similar chronological lists
 * Format: Title/Company on left, Date on right, Description below
 * 
 * @package Resume_WP_Theme
 * 
 * @param array $args {
 *     @type string $section_title Section heading
 *     @type string $section_id    Section ID for anchor links
 *     @type string $intro_text    Optional intro paragraph
 *     @type array  $items         Array of resume items
 *     @type string $section_class Additional CSS classes
 * }
 */

$section_title = isset($args['section_title']) ? $args['section_title'] : '';
$section_id = isset($args['section_id']) ? $args['section_id'] : '';
$intro_text = isset($args['intro_text']) ? $args['intro_text'] : '';
$items = isset($args['items']) && is_array($args['items']) ? $args['items'] : array();
$section_class = isset($args['section_class']) ? $args['section_class'] : 'resume-section';

// Don't render if no content
if (empty($section_title) && empty($items)) {
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
        
        <?php if (!empty($intro_text)) : ?>
            <p class="mb-4"><?php echo esc_html($intro_text); ?></p>
        <?php endif; ?>
        
        <?php if (!empty($items)) : ?>
            <?php foreach ($items as $item) : 
                $title = isset($item['title']) ? $item['title'] : '';
                $subtitle = isset($item['subtitle']) ? $item['subtitle'] : '';
                $subtitle_url = isset($item['subtitle_url']) ? $item['subtitle_url'] : '';
                $date_range = isset($item['date_range']) ? $item['date_range'] : '';
                $description = isset($item['description']) ? $item['description'] : '';
            ?>
                <div class="resume-item d-flex flex-column flex-md-row mb-5">
                    <div class="resume-content mr-auto">
                        <?php if (!empty($title)) : ?>
                            <h3 class="mb-0"><?php echo esc_html($title); ?></h3>
                        <?php endif; ?>
                        
                        <?php if (!empty($subtitle)) : ?>
                            <div class="subheading mb-3">
                                <?php if (!empty($subtitle_url)) : ?>
                                    <a href="<?php echo esc_url($subtitle_url); ?>" target="_blank" rel="noopener noreferrer">
                                        <?php echo esc_html($subtitle); ?>
                                    </a>
                                <?php else : ?>
                                    <?php echo esc_html($subtitle); ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if (!empty($description)) : ?>
                            <div class="mb-3"><?php echo wp_kses_post($description); ?></div>
                        <?php endif; ?>
                    </div>
                    
                    <?php if (!empty($date_range)) : ?>
                        <div class="resume-date text-md-right">
                            <span class="text-primary"><?php echo esc_html($date_range); ?></span>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>

