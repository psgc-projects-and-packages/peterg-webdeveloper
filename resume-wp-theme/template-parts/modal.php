<?php
/**
 * Template part for displaying modal components
 *
 * @package Resume_WP_Theme
 */

// Get modal data from args
$img_url = isset($args['imgUrl']) ? $args['imgUrl'] : '';
$desc = isset($args['desc']) ? $args['desc'] : '';
$alt = isset($args['alt']) ? $args['alt'] : '';
$title = isset($args['title']) ? $args['title'] : '';
$target = isset($args['target']) ? $args['target'] : '';

if (empty($img_url) || empty($target)) {
    return;
}
?>

<div class="row crate-image">
    <div class="col-sm">
        <img class="img-fluid tag-image_border tag-trigger_modal" src="<?php echo esc_url($img_url); ?>" data-toggle="modal" data-target="#<?php echo esc_attr($target); ?>" alt="<?php echo esc_attr($alt); ?>">
    </div>
    <div class="col-sm align-self-center">
        <p class="align-middle"><?php echo esc_html($desc); ?></p>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="<?php echo esc_attr($target); ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo esc_html($title); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <img class="img-fluid" src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($alt); ?>">
            </div>
        </div>
    </div>
</div>

