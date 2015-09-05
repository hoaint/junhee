<?php

/**
 * Custom queries, hooks, etc go here
 */

add_action('genesis_after_header', 'stickyAlias', 4);
function stickyAlias()
{
    echo '<div id="stickyalias"></div>';
}

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

add_action('genesis_before_footer', 'partnersCarousel');
function partnersCarousel()
{
    if (is_active_sidebar('partners-carousel-section')) {
        echo '<div class="site-partners">';
            echo '<div class="wrap">';
                echo '<div class="partners-carousel-section">';
                dynamic_sidebar('partners-carousel-section');
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}

add_action('genesis_before_footer', 'footerNavigation');
function footerNavigation()
{
    if (is_active_sidebar('footer-navigation-section')) {
        echo '<div class="site-footer-navigation">';
            echo '<div class="wrap">';
                echo '<div class="footer-navigation-section">';
                dynamic_sidebar('footer-navigation-section');
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
}

//
//remove_action('genesis_footer', 'genesis_do_footer');
//add_action('genesis_footer', 'genesis_address');
//function genesis_address()
//{
//    if (is_active_sidebar('address-section')) {
//        dynamic_sidebar('address-section');
//    }
//}

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
    'name' => 'About Us Section',
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

genesis_register_sidebar(array(
    'id' => 'partners-carousel-section',
    'name' => 'Partners Carousel Section',
    'description' => 'This is a partners carousel section'
));

genesis_register_sidebar(array(
    'id' => 'footer-navigation-section',
    'name' => 'Footer Navigation Section',
    'description' => 'This is a footer navigation section'
));

genesis_register_sidebar(array(
    'id' => 'address-section',
    'name' => 'Address Section',
    'description' => 'This is a address section'
));


