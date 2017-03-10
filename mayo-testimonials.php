<?php

/*
Plugin Name: Mayo Testimonials
Description: Testimonial Custom Post Type
Version: 1.0
Author: randmanrjr
Author URI: https://github.com/randmanrjr
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // disable direct access
}

// Testimonials custom post type
add_action('init','mayo_testimonials_post_type');

if (! function_exists('mayo_testimonials_post_type')) {

    function mayo_testimonials_post_type() {
        $labels = array(
            'name'              => 'Testimonials',
            'singular_name'     => 'Testimonial',
            'menu_name'         => 'Testimonial',
            'name_admin_bar'    => 'Testimonial',
            'add_new'           => 'New Testimonial',
            'add_new_item'      => 'Add New Testimonial'
        );
        $options = array(
            'labels'            => $labels,
            'public'            => true,
            'show_ui'           => true,
            'menu_position'     => 20,
            'menu_icon'         => 'dashicons-format-status',
            'capability_type'   => 'post',
            'has_archive'       => true,
            'hierarchical'      => true,
            'show_in_menu'      => true,
            'rewrite'           => array('slug' => 'testimonials'),
            'supports'          => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'page-attributes', 'custom-fields')
        );

        register_post_type('mayo_testimonials',$options);
    }

}

