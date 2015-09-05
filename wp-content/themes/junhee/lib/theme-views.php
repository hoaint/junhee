<?php

/**
 * Custom queries, hooks, etc go here
 */

// remove primary & secondary nav from default position
remove_action('genesis_after_header', 'genesis_do_nav');
remove_action('genesis_after_header', 'genesis_do_subnav');
// add primary & secondary nav to top of the page
add_action('genesis_header_right', 'genesis_do_nav');

add_action('genesis_after_header', 'revSliderSection', 5);
function revSliderSection()
{
    if (is_home()) {
        putRevSlider("banner");
    }
}

/**
 * Add images size
 */
add_image_size('img-thumb-big-widget', 225, 150, true);
add_image_size('img-thumb-introduce-widget', 180, 180, true);
add_image_size('img-thumb-list-widget', 87, 71, true);
add_image_size('img-thumb-media-widget', 310, 158, true);
add_image_size('img-thumb-big-archive', 337, 190, true);
add_image_size('img-thumb-list-archive', 238, 127, true);
add_image_size('img-thumb-list-small-widget', 75, 75, true);

genesis_register_sidebar(array(
    'id' => 'service-section',
    'name' => 'Service Section',
    'description' => 'This is a service section'
));

genesis_register_sidebar(array(
    'id' => 'about-us-section',
    'name' => 'About us Section',
    'description' => 'This is a about us section'
));

genesis_register_sidebar(array(
    'id' => 'media-section',
    'name' => 'Media Section',
    'description' => 'This is a media section'
));

genesis_register_sidebar(array(
    'id' => 'news-section',
    'name' => 'News Section',
    'description' => 'This is a news section'
));

genesis_register_sidebar(array(
    'id' => 'introduce-section',
    'name' => 'Introduce Section',
    'description' => 'This is a introduce section'
));


