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
add_image_size('img-thumb-list-widget', 87, 71, true);
add_image_size('img-thumb-big-archive', 337, 190, true);
add_image_size('img-thumb-list-archive', 238, 127, true);
add_image_size('img-thumb-list-small-widget', 75, 75, true);

genesis_register_sidebar(array(
    'id' => 'service-section',
    'name' => 'Service Section',
    'description' => 'This is a service section'
));

genesis_register_sidebar(array(
    'id' => 'body-section',
    'name' => 'Body Section',
    'description' => 'This is a body section'
));