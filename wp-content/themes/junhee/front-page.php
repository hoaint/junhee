<?php
/**
 * This is the homepage template file.
 *
 * @package  Genesis-Starter-Child-Theme
 * @since    1.0.0
 */

/** Force full width layout */
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

add_action('genesis_meta', 'home_genesis_meta');
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function home_genesis_meta()
{
    remove_action('genesis_loop', 'genesis_do_loop');
    add_action('genesis_loop', 'home_loop_helper');
}

/**
 * Display widget content for homepage sections.
 *
 */
function home_loop_helper()
{
    if (is_active_sidebar('service-section')) {
        echo '<div class="service-section">';
        dynamic_sidebar('service-section');
        echo '</div>';
    }

    if (is_active_sidebar('body-section')) {
        echo '<div class="body-section">';
        dynamic_sidebar('body-section');
        echo '</div>';
    }
}

genesis();
