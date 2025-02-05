<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Navigations
 * ------------------------------------------------------------------------
 * This file is for registering your theme's custom navigation areas
 * where various menus can be assigned by site administrators.
 */

if ( ! function_exists( 'gostyniec_register_navigations' ) ) {
	/**
	 * Registers theme's navigation menus.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function gostyniec_register_navigations() {
		register_nav_menus(
			array(
				'menu-1' => __( 'Left menu', 'gostyniec' ),
				'menu-2' => __( 'Right Menu', 'gostyniec' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'gostyniec_register_navigations' );
