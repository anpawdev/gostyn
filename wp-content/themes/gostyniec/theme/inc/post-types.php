<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Post Types
 * ------------------------------------------------------------------------
 * This file is for registering your theme post types. Custom post types
 * allow users to easily create and manage various types of content.
 */

if ( ! function_exists( 'partners_post_type' ) ) {
	/**
	 * Registers a `partners` custom post type.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function partners_post_type() {
		register_post_type(
			'partners', array(
				'public'      => true,
				'supports'    => array( 'title', 'thumbnail' ),
				'rewrite' => array( 'slug' => 'partnerzy', 'with_front' => true ),
				'menu_icon' => 'dashicons-admin-users',
				'has_archive' => true,
				'labels'      => array(
					'name'                => _x( 'Partnerzy', 'Post Type General Name', 'gostyniec' ),
					'singular_name'       => _x( 'Partnerzy', 'Post Type Singular Name', 'gostyniec' ),
					'menu_name'           => __( 'Partnerzy', 'gostyniec' ),
					'name_admin_bar'      => __( 'partners', 'gostyniec' ),
					'parent_item_colon'   => __( 'Rodzic:', 'gostyniec' ),
					'all_items'           => __( 'Wszystkie', 'gostyniec' ),
					'add_new_item'        => __( 'Dodaj nowy', 'gostyniec' ),
					'add_new'             => __( 'Dodaj nowy', 'gostyniec' ),
					'new_item'            => __( 'Nowy', 'gostyniec' ),
					'edit_item'           => __( 'Edytuj', 'gostyniec' ),
					'update_item'         => __( 'Aktualizuj', 'gostyniec' ),
					'view_item'           => __( 'Zobacz', 'gostyniec' ),
					'search_items'        => __( 'Szukaj', 'gostyniec' ),
					'not_found'           => __( 'Nie znaleziono', 'gostyniec' ),
					'not_found_in_trash'  => __( 'Nie znaleziono w koszu', 'gostyniec' ),
				),
			)
		);
	}
}
add_action( 'init', 'partners_post_type' );

?>