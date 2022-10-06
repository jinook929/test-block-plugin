<?php
/**
 * Block Name: Image Block
 *
 */

// initialize the block
function image_block_acf_init() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'image_block',
            'title'             => __('Image Block'),
            'description'       => __('A custom image block.'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'previews/json-preview.php',
            'category'          => 'madwell',
						'icon'							=> 'art',
						'mode'							=> 'edit',
        ));
    }
}
add_action('acf/init', 'image_block_acf_init');

// add the fields, using "Custom Fields > Tools" at wp-admin
if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_633cf2ceefc6a',
    'title' => 'Image Block',
    'fields' => array(
      array(
        'key' => 'field_633cf2cf231f8',
        'label' => 'ACF Image',
        'name' => 'acf_image',
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
          'value' => 'acf/image-block',
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
    'graphql_field_name' => 'imageBlock',
    'map_graphql_types_from_location_rules' => 0,
    'graphql_types' => '',
  ));
  
  endif;		