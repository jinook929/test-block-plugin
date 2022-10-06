<?php
/**
* Plugin Name: Madwell ACF Blocks Plugin
* Description: This is a plugin for Madwell ACF blocks.
*/

function madwell_category ( $categories, $post ) {
	return array_merge(
		array(
			array(
				'slug' => 'madwell',
				'title' => 'Madwell',
			),
		),
		$categories
	);
}

add_filter( 'block_categories', 'madwell_category', 10, 2 );

// Include blocks
include_once('blocks/cards-block.php');
include_once('blocks/test-block.php');
include_once('blocks/image-block.php');

// Function that renders JSON string as DynamicContent to the editor
function echo_json_string () {
	$arr = array();
	foreach (get_fields() as $key => $value) {
		$arr[$key] = $value;
	}
	$json = json_encode($arr);
	echo $json;
}
