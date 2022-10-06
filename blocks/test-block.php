<?php
/**
 * Block Name: Test Block
 *
 */

// initialize the block
function test_block_acf_init() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'test_block',
            'title'             => __('Test Block'),
            'description'       => __('A custom test block.'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'previews/json-preview.php',
            'category'          => 'madwell',
            'icon'				=> 'feedback',
            'mode'				=> 'edit',
        ));
    }
}
add_action('acf/init', 'test_block_acf_init');

// add the fields, using "Custom Fields > Tools" at wp-admin
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_633330eee8a14',
        'title' => 'Test Block',
        'fields' => array(
            array(
                'key' => 'field_633330efd0f57',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'show_in_graphql' => 1,
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_63333106d0f58',
                'label' => 'Memo',
                'name' => 'memo',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'show_in_graphql' => 1,
                'default_value' => '',
                'delay' => 0,
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
            ),
            array(
                'key' => 'field_6333311ad0f59',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'show_in_graphql' => 1,
                'return_format' => 'array',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/test-block',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
        'show_in_graphql' => 1,
        'graphql_field_name' => 'testBlock',
        'map_graphql_types_from_location_rules' => 0,
        'graphql_types' => '',
    ));
    
    endif;		