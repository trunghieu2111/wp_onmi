<?php
function tm_projects_get_project_thumbnail( $size = 'project-archive' ) {
	global $post;

	if ( has_post_thumbnail() ) {
		return get_the_post_thumbnail( $post->ID, $size );
	}
}

remove_action( 'projects_loop_item', 'projects_template_loop_project_thumbnail' );

add_action( 'projects_loop_item', 'tm_heli_projects_template_loop_project_thumbnail', 10 );
function tm_heli_projects_template_loop_project_thumbnail() {
	echo '<figure class="project-thumbnail">' . tm_projects_get_project_thumbnail( 'full' ) . '</figure>';
}
