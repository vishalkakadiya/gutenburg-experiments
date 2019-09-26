<?php

add_action( 'plugin_loaded', 'vk_register_latest_post_block' );

function vk_register_latest_post_block() {
	register_block_type(
		'cgb/latest-posts-block',
		[
			'render_callback' => 'vk_render_latest_posts',
		]
	);
}

function vk_render_latest_posts() {

	$query = new \WP_Query(
		[
			'post_type'   => 'post',
			'post_status' => 'publish',
		]
	);

	if ( empty( $query->posts ) ) {
		echo '<p>No posts</p>';
	}

	$posts_output = '<div class="latest-posts-block">';

	foreach ( $query->posts as $latest_post ) {

		$posts_output .= sprintf(
			'<div class="post-title"><h2><a href="%s">%s</a></h2></div>',
			get_permalink( $latest_post->ID ),
			esc_html( $latest_post->post_title )
		);
	}

	$posts_output .= '</div>';

	return $posts_output;
}
