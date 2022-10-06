<?php
/**
 * Block Name: Cards Block
 *
 */

// initialize the block
function cards_block_acf_init() {
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'              => 'cards_block',
            'title'             => __('Cards Block'),
            'description'       => __('A custom cards block.'),
            'render_template'   => plugin_dir_path( __FILE__ ) . 'previews/json-preview.php',
            'category'          => 'madwell',
						'icon'							=> 'groups',
						'mode'							=> 'edit',
        ));
    }
}
add_action('acf/init', 'cards_block_acf_init');

// add the fields, using "Custom Fields > Tools" at wp-admin
if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_633243fb83493',
    'title' => 'Cards Block',
    'fields' => array(
      array(
        'key' => 'field_633271586c196',
        'label' => 'Section Title',
        'name' => 'section_title',
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
        'graphql_field_name' => 'sectionTitle',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_633244369f8f9',
        'label' => 'Cards',
        'name' => 'cards',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'show_in_graphql' => 1,
        'graphql_field_name' => 'cards',
        'collapsed' => '',
        'min' => 0,
        'max' => 0,
        'layout' => 'table',
        'button_label' => '',
        'sub_fields' => array(
          array(
            'key' => 'field_633244659f8fa',
            'label' => 'Name',
            'name' => 'name',
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
            'graphql_field_name' => 'name',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_633244759f8fb',
            'label' => 'Description',
            'name' => 'description',
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
            'graphql_field_name' => 'description',
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_633244899f8fc',
            'label' => 'Picture',
            'name' => 'picture',
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
            'graphql_field_name' => 'picture',
            'return_format' => 'array',
            'preview_size' => 'medium',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
          ),
          // array(
          //   'key' => 'field_633244759f8fc',
          //   'label' => 'ETC',
          //   'name' => 'etc',
          //   'type' => 'text',
          //   'instructions' => '',
          //   'required' => 0,
          //   'conditional_logic' => 0,
          //   'wrapper' => array(
          //     'width' => '',
          //     'class' => '',
          //     'id' => '',
          //   ),
          // 'show_in_graphql' => 1,
          //   'default_value' => '',
          //   'placeholder' => '',
          //   'prepend' => '',
          //   'append' => '',
          //   'maxlength' => '',
          // ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'acf/cards-block',
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
    'show_in_rest' => 1,
    'show_in_graphql' => 1,
    'graphql_field_name' => 'cardsBlock',
  ));
  
  endif;		