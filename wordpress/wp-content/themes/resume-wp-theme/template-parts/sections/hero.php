<?php
/**
 * Template part for displaying hero/about section
 * 
 * Used for: About/Hero section at top of page
 * 
 * @package Resume_WP_Theme
 * 
 * @param array $args {
 *     @type string $hero_label      Optional label above name
 *     @type string $hero_first_name First name
 *     @type string $hero_last_name  Last name
 *     @type string $hero_title      Job title/subtitle
 *     @type string $hero_locations  Location string
 *     @type string $hero_email      Email address
 *     @type string $hero_summary    Summary paragraph
 *     @type array  $social_links    Array of social links
 *     @type string $section_id      Section ID for anchor links
 *     @type string $section_class   Additional CSS classes
 * }
 */

$hero_label = isset($args['hero_label']) ? $args['hero_label'] : '';
$hero_first_name = isset($args['hero_first_name']) ? $args['hero_first_name'] : 'Peter';
$hero_last_name = isset($args['hero_last_name']) ? $args['hero_last_name'] : 'Gorgone';
$hero_title = isset($args['hero_title']) ? $args['hero_title'] : 'Freelance Web Developer';
$hero_locations = isset($args['hero_locations']) ? $args['hero_locations'] : 'Las Vegas · Los Angeles · Chicago';
$hero_email = isset($args['hero_email']) ? $args['hero_email'] : 'peter@peltronic.com';
$hero_summary = isset($args['hero_summary']) ? $args['hero_summary'] : '';
$social_links = isset($args['social_links']) && is_array($args['social_links']) ? $args['social_links'] : array();
$section_id = isset($args['section_id']) ? $args['section_id'] : 'home';
$section_class = isset($args['section_class']) ? $args['section_class'] : 'resume-section';
?>

<section class="<?php echo esc_attr($section_class); ?> p-3 p-lg-5 d-flex d-column" id="<?php echo esc_attr($section_id); ?>">
    <div class="my-auto">
        <?php if (!empty($hero_label)) : ?>
            <div class="mb-2"><?php echo esc_html($hero_label); ?></div>
        <?php endif; ?>
        
        <h1 class="mb-0">
            <?php echo esc_html($hero_first_name); ?>
            <span class="text-primary"><?php echo esc_html($hero_last_name); ?></span>
        </h1>
        
        <h3 class="mb-5"><?php echo esc_html($hero_title); ?></h3>
        
        <div class="subheading mb-5">
            <?php echo esc_html($hero_locations); ?> · 
            <a href="mailto:<?php echo esc_attr($hero_email); ?>" class="tag-clickme_to_email">
                <script type="text/javascript"> 
                    var name="<?php echo esc_js(explode('@', $hero_email)[0]); ?>"; 
                    var domain="@<?php echo esc_js(explode('@', $hero_email)[1] ?? ''); ?>"; 
                    var txtstr=name + domain; 
                    document.write(''+txtstr+''); 
                </script>
            </a>
        </div>

        <?php if (!empty($hero_summary)) : ?>
            <div class="mb-5">
                <?php echo wp_kses_post($hero_summary); ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($social_links)) : ?>
            <ul class="list-inline list-social-icons mb-0">
                <?php foreach ($social_links as $link) : 
                    $social_url = isset($link['url']) ? $link['url'] : '';
                    $social_icon = isset($link['icon']) ? $link['icon'] : 'fa-link';
                ?>
                    <?php if (!empty($social_url)) : ?>
                        <li class="list-inline-item">
                            <a href="<?php echo esc_url($social_url); ?>" target="_blank" rel="noopener noreferrer">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa <?php echo esc_attr($social_icon); ?> fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>

