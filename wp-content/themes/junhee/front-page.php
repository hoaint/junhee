<?php
/**
 * This is the homepage template file.
 *
 * @package  Genesis-Starter-Child-Theme
 * @since    1.0.0
 */

/** Force full width layout */
add_filter('genesis_pre_get_option_site_layout', '__genesis_return_full_width_content');

add_action('genesis_meta', 'home_genesis_meta');
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function home_genesis_meta()
{
    remove_action('genesis_loop', 'genesis_do_loop');
    add_action('genesis_loop', 'home_loop_helper');
    add_action('genesis_before_footer', 'home_loop_footer', 5);
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
}

function home_loop_footer()
{
    if (is_active_sidebar('news-section') || is_active_sidebar('media-section')) {
        echo '<div class="site-news">';
            echo '<div class="wrap">';
                echo '<div class="media-section">';
                dynamic_sidebar('media-section');
                echo '</div>';
                echo '<div class="news-section">';
                dynamic_sidebar('news-section');
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }

    if (is_active_sidebar('introduce-section')) {
        echo '<div class="site-introduce">';
            echo '<div class="wrap">';
                echo '<div class="introduce-section">';
                dynamic_sidebar('introduce-section');
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }

    if (is_active_sidebar('about-us-section')) {
        echo '<div class="site-about-us">';
            echo '<div class="wrap">';
                echo '<div class="about-us-section">';
                dynamic_sidebar('about-us-section');
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}

genesis();
