<?php
/*
Plugin Name: Share a Draft Conditional
Plugin URI: http://wordpress.org/extend/plugins/shareadraft-conditional/
Description: A conditional template tag/filter to identify Share A Draft shared drafts, and show messages and functionality to the people you're sharing with.
Author: simonwheatley
Version: 1.0
Author URI: http://codeforthepeople.com/
Text Domain: shareadraft
*/ 

/**
 * Hooks the ShareADraft sad_is_draft filter 
 *
 * @return void
 **/
function sad_is_draft( $is_draft = true ) {
	$post = get_post( get_queried_object_id() );
	if ( ! is_singular() )
		return false;
	if ( 'draft' != get_post_field( 'post_status', $post ) )
		return false;
	if ( ! $GLOBALS[ '__share_a_draft' ]->can_view( $post->ID ) )
		return false;
	return true;
}
add_filter( 'sad_is_draft', 'sad_is_draft' );
