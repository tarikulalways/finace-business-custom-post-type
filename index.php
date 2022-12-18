<?php 
    // custom post type

    if(!function_exists('finace_custom_post_type')){
        function finace_custom_post_type(){
            // slider

            register_post_type('slider', array(
                'labels' => array(
                    'name' => __('Slider', 'finace'),
                    'singular_name' => __('slider', 'finace'),
                    'add_new' => __('add new slider', 'finace'),
                    'add_new_item' => __('add new slider item', 'finace'),
                    'featured_image' => __('add slider image', 'finace'),
                    'set_featured_image' => __('set slider image', 'finace'),
                    'edit_item' => __('Edit slider', 'finace')
                ),
                'public' => true,
                'supports' => array('title', 'editor', 'custom-fiels', 'page-attributes', 'thumbnail'),
                'menu_icon' => 'dashicons-slides'
            ));

            // Services
            register_post_type('services', array(
                'labels' => array(
                    'name' => __('Financial Services', 'finace'),
                    'singular_name' => __('services', 'finace'),
                    'add_new' => __('add new service', 'finace'),
                    'edit_item' => __('edit service item', 'finace'),
                    'featured_image' => __('add service image', 'finace'),
                    'set_featured_image' => __('set service image','finace')
                ),
                'public' => true,
                'supports' => array('title', 'editor', 'custom-fields', 'page-attributes', 'thumbnail'),
                'menu_icon' => 'dashicons-editor-insertmore'
            ));
            // testimonial 
            register_post_type('testimonial', array(
                'labels' => array(
                    'name' => __('Testimonial', 'finace'),
                    'singular_name' => __('testimonial', 'finace'),
                    'add_new' => __('add new testimonial', 'finace'),
                    'edit_item' => __('edit testimonial item', 'finace'),
                    'add_new_item' => __('add new testimonial items', 'finace'),
                    'featured_image' => __('add new client image','fiance'),
                    'set_featured_image' => __('set client image', 'finace')
                ),
                'public' => true,
                'supports' => array('custom-fields', 'page-attributes', 'thumbnail'),
                'menu_icon' => 'dashicons-testimonial'
            ));

            // team member
            register_post_type('team_members', array(
                'labels' => array(
                    'name' => __('Team members', 'finace'),
                    'singular_name' => __('members', 'finace'),
                    'add_new' => __('add new Team members', 'finace'),
                    'edit_item' => __('edit Team members item', 'finace'),
                    'featured_image' => __('add Team members image', 'finace'),
                    'set_featured_image' => __('set Team members image','finace')
                ),
                'public' => true,
                'supports' => array('custom-fields', 'page-attributes'),
                'menu_icon' => 'dashicons-groups'
            ));

            // contact page info

            register_post_type('contactinfo', array(
                'labels' => array(
                    'name' => __('Contact Info', 'finace'),
                    'singular_name' => __('info', 'finace'),
                    'add_new' => __('add new Contact Info', 'finace'),
                    'edit_item' => __('edit Contact Info item', 'finace')
                ),
                'public' => true,
                'supports' => array('custom-fields', 'page-attributes'),
                'menu_icon' => 'dashicons-location'
            ));

            // our services

            register_post_type('our_service', array(
                'labels' => array(
                    'name' => __('Our services', 'fiance'),
                    'singular_name' => __('our services', 'finace'),
                    'add_new' => __('add new service', 'finace'),
                    'add_new_item' => __('add new service item', 'finace'),
                    'featured_image' => __('services image', 'finace'),
                    'set_featured_image' => __('set service image', 'finace'),
                    'edit_item' => __('edit service item', 'finace')
                ),
                'public' => true,
                'supports' => array('title', 'editor', 'page-attributes', 'thumbnail'),
                'menu_icon' => 'dashicons-editor-insertmore'
            ));

            // register taxonomy

            register_taxonomy('servic_cat', 'our_service', array(
                'labels' => array(
                    'name' => __('Category', 'finace'),
                    'singular_name' => __('category', 'finace')
                ),
                'hierarchical' => true,
                'show_ui' => true,
                'show_admin_column' => true
            ));
        }
    }
    add_action('init', 'finace_custom_post_type');
?>