<?php
/**
 * Template part for displaying bullet list sections
 * 
 * Used for: Skills, Awards, and similar list-based content
 * 
 * @package Resume_WP_Theme
 * 
 * @param array $args {
 *     @type string $section_title Section heading
 *     @type string $section_id    Section ID for anchor links
 *     @type string $bullet_icon   Icon class (fa-check, fa-star, fa-trophy, etc.)
 *     @type array  $items         Array of list items (can be grouped by category)
 *     @type string $section_class Additional CSS classes
 *     @type bool   $grouped       Whether items are grouped by category
 * }
 */

$section_title = isset($args['section_title']) ? $args['section_title'] : '';
$section_id = isset($args['section_id']) ? $args['section_id'] : '';
$bullet_icon = isset($args['bullet_icon']) ? $args['bullet_icon'] : 'fa-check';
$items = isset($args['items']) && is_array($args['items']) ? $args['items'] : array();
$section_class = isset($args['section_class']) ? $args['section_class'] : 'resume-section';
$grouped = isset($args['grouped']) ? $args['grouped'] : false;

// Don't render if no content
if (empty($section_title) && empty($items)) {
    return;
}

// Generate section ID from title if not provided
if (empty($section_id) && !empty($section_title)) {
    $section_id = sanitize_title($section_title);
}

// Default icon class
$icon_class = 'fa-li fa ' . esc_attr($bullet_icon);
?>

<section class="<?php echo esc_attr($section_class); ?> p-3 p-lg-5 d-flex flex-column" <?php echo !empty($section_id) ? 'id="' . esc_attr($section_id) . '"' : ''; ?>>
    <div class="my-auto">
        <?php if (!empty($section_title)) : ?>
            <h2 class="mb-5"><?php echo esc_html($section_title); ?></h2>
        <?php endif; ?>
        
        <?php if ($grouped && !empty($items)) : ?>
            <?php 
            // Grouped items (like Skills with categories)
            foreach ($items as $group) : 
                $category_title = isset($group['category_title']) ? $group['category_title'] : '';
                $category_class = isset($group['category_class']) ? $group['category_class'] : '';
                $group_items = isset($group['items']) && is_array($group['items']) ? $group['items'] : array();
            ?>
                <article class="<?php echo esc_attr($category_class); ?>">
                    <?php if (!empty($category_title)) : ?>
                        <div class="subheading mb-3"><?php echo esc_html($category_title); ?></div>
                    <?php endif; ?>
                    
                    <?php if (!empty($group_items)) : ?>
                        <ul class="fa-ul mb-0">
                            <?php foreach ($group_items as $item) : 
                                $item_text = isset($item['text']) ? $item['text'] : (is_string($item) ? $item : '');
                            ?>
                                <?php if (!empty($item_text)) : ?>
                                    <li>
                                        <i class="<?php echo esc_attr($icon_class); ?>"></i>
                                        <?php echo wp_kses_post($item_text); ?>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        <?php elseif (!empty($items)) : ?>
            <?php 
            // Simple flat list (like Awards)
            $first_item = reset($items);
            // Check if items are simple strings or have 'text' key
            $is_simple = is_string($first_item);
            ?>
            <ul class="fa-ul mb-0">
                <?php foreach ($items as $item) : 
                    $item_text = $is_simple ? $item : (isset($item['text']) ? $item['text'] : '');
                ?>
                    <?php if (!empty($item_text)) : ?>
                        <li>
                            <i class="<?php echo esc_attr($icon_class); ?>"></i>
                            <?php echo wp_kses_post($item_text); ?>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>

