<?php
/**
 * AZB Theme back compat functionality
 *
 * Prevents AZB Theme from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage azb_theme
 * @since AZB Theme 1.0
 */

/**
 * Prevent switching to AZB Theme on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since AZB Theme 1.0
 */
function azb_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'azb_upgrade_notice' );
}
add_action( 'after_switch_theme', 'azb_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * AZB Theme on WordPress versions prior to 4.7.
 *
 * @since AZB Theme 1.0
 *
 * @global string $wp_version WordPress version.
 */
function azb_upgrade_notice() {
	$message = sprintf( __( 'AZB Theme requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'azb' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since AZB Theme 1.0
 *
 * @global string $wp_version WordPress version.
 */
function azb_customize() {
	wp_die( sprintf( __( 'AZB Theme requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'azb' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'azb_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since AZB Theme 1.0
 *
 * @global string $wp_version WordPress version.
 */
function azb_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'AZB Theme requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'azb' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'azb_preview' );
