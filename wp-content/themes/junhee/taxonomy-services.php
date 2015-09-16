<?php
/**
 * Created by PhpStorm.
 * User: hoaint
 * Date: 9/16/2015
 * Time: 9:00 AM
 */
remove_action('genesis_loop', 'genesis_do_loop');

add_action('genesis_loop', 'pods_do_loop');
/**
 * Custom loop for listing archive page
 */

function pods_do_loop()
{

    // Title and description
    echo '<div class="entry-category">';
    echo '<h1>' . get_queried_object()->name . '</h1>';
    echo term_description(get_queried_object()->term_id, 'services');
    echo '</div>';

    // Loop
    $paged = get_query_var('page') ? get_query_var('page') : 1;
    $args = (array(
        'post_type' => 'service',
        'posts_per_page' => 10,
        'paged' => $paged,
    ));

    if (get_queried_object()->slug != null || get_queried_object()->slug != '') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'services',
                'field' => 'slug',
                'terms' => get_queried_object()->slug,
            ),
        );
    }

    $services = new WP_Query($args);
    $count = 0;
    while ($services->have_posts()) : $services->the_post();

        global $post;
        $count++;
        $image = genesis_get_image(array(
            'format' => 'html',
            'size' => 'img-thumb-list-archive',
        ));

        if ($image == null) {
            $image = '<img src="' . $image . '" title = "' . get_the_title() . '" alt = "' . get_the_title() . '" class="entry-image img-thumb-list-archive alignleft" />';
        }

        echo '<article class="content-archive-entry">';
        printf('<a href="%s" title="%s" class="alignleft">%s</a>', get_permalink(), the_title_attribute('echo=0'), $image);
        printf('<h2 class="entry-title"><a href = "%s" title = "%s">%s</a></h2>', get_permalink(), get_the_title(), get_the_title());

        if (empty($post->post_excerpt)) {
            the_content_limit(250, '');
        } else {
            the_excerpt();
        }
        echo '</article>';

    endwhile;

    if ($services->max_num_pages > 1) {
        if ($paged > 1) { ?>
            <a href="<?php echo '?page=' . ($paged - 1); //prev link ?>"><</a>
            <?php
        }
        for ($i = 1; $i <= $services->max_num_pages; $i++) {
            ?>
            <a href="<?php echo '?page=' . $i; ?>" <?php echo ($paged == $i) ? 'class="selected"' : ''; ?>><?php echo $i; ?></a>
            <?php
        }
        if ($paged < $services->max_num_pages) {
            ?>
            <a href="<?php echo '?page=' . ($paged + 1); //next link
            ?>">></a>
            <?php
        }
    }
    wp_reset_postdata();

}

genesis();