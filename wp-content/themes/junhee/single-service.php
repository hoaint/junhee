<?php
/**
 * Created by PhpStorm.
 * User: hoaint
 * Date: 9/16/2015
 * Time: 10:59 AM
 */

remove_action('genesis_before_post_content', 'genesis_post_info');
remove_action('genesis_after_post_content', 'genesis_post_meta');
remove_action('genesis_after_post', 'genesis_do_author_box_single');

remove_action('genesis_entry_header', 'genesis_post_info', 12);
remove_action('genesis_entry_footer', 'genesis_post_meta');
remove_action('genesis_entry_content', 'genesis_do_post_content');

add_action('genesis_entry_content', 'service_do_post_content');
function service_do_post_content() {
    echo get_post_meta(get_the_ID(), 'gioi_thieu', true);
    echo get_post_meta(get_the_ID(), 'quy_trinh', true);
    echo get_post_meta(get_the_ID(), 'chi_phi', true);
    echo get_post_meta(get_the_ID(), 'ket_qua', true);
    echo get_post_meta(get_the_ID(), 'khach_hang', true);
    echo get_post_meta(get_the_ID(), 'bac_si', true);
}

genesis();