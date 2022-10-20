<?php
if (function_exists('acf_add_local_field_group')):

    // Check function exists.
    if (function_exists('acf_add_options_page'))
    {
        // Add parent.
        $option_page = acf_add_options_page(array(
            'page_title' => __('Theme General Settings') ,
            'menu_title' => __('Theme Settings') ,
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false
        ));
    }

    acf_add_local_field_group(array(
        'key' => 'group_62a6ef8cb1bec',
        'title' => 'Insert Headers and Footers',
        'fields' => array(
            array(
                'key' => 'field_62a6f0317cd8d',
                'label' => 'Insert Headers',
                'name' => 'insert_headers',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ) ,
            array(
                'key' => 'field_62a6f0567cd8e',
                'label' => 'Insert Footers',
                'name' => 'insert_footers',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ) ,
        ) ,
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ) ,
            ) ,
        ) ,
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'permalink',
            1 => 'the_content',
            2 => 'excerpt',
            3 => 'discussion',
            4 => 'comments',
            5 => 'revisions',
            6 => 'slug',
            7 => 'author',
            8 => 'format',
            9 => 'page_attributes',
            10 => 'featured_image',
            11 => 'categories',
            12 => 'tags',
            13 => 'send-trackbacks',
        ) ,
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));

    acf_add_local_field_group(array(
        'key' => 'group_62a6f19c21d00',
        'title' => 'Insert Schemas',
        'fields' => array(
            array(
                'key' => 'field_62a6f1f867341',
                'label' => 'Insert Schema',
                'name' => 'insert_schema',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ) ,
        ) ,
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ) ,
            ) ,
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ) ,
            ) ,
            array(
                array(
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'category',
                ) ,
            ) ,
        ) ,
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'send-trackbacks',
        ) ,
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
  endif;


  //////////////////////////////////////////
  function cptui_register_my_cpts() {

	/**
	 * Post Type: Show room.
	 */

	$labels = [
		"name" => esc_html__( "Show room", "twentytwenty-child" ),
		"singular_name" => esc_html__( "Show room", "twentytwenty-child" ),
	];

	$args = [
		"label" => esc_html__( "Show room", "twentytwenty-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "show-room", "with_front" => false ],
		"query_var" => true,
		"menu_icon" => "dashicons-store",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		"show_in_graphql" => false,
	];

	register_post_type( "show-room", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
