<?php
/**
 * Enqueue frontend styles.
 *
 * @package    WAY_Plugin
 * @subpackage Frontend
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace WAY_Plugin\Frontend;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The frontend functionality of the plugin.
 *
 * @since  1.0.0
 * @access public
 */
class Enqueue_Frontend_Styles {

	/**
	 * Instance of the class
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object Returns the instance.
	 */
	public static function instance() {

		// Varialbe for the instance to be used outside the class.
		static $instance = null;

		if ( is_null( $instance ) ) {

			// Set variable for new instance.
			$instance = new self;

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

		add_action( 'wp_enqueue_scripts', [ $this, 'styles' ] );

	}

	/**
	 * Enqueue the stylesheets for the frontend of the site.
	 *
	 * Uses the universal slug partial for admin pages. Set this
     * slug in the core plugin file.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function styles() {

		// Non-vendor plugin styles.
		wp_enqueue_style( WAY_ADMIN_SLUG, WAY_URL . 'assets/css/frontend.css', [], WAY_VERSION, 'all' );

		// Fancybox 3.
		if ( get_option( 'way_enqueue_fancybox_styles' ) ) {

			/**
			 * Bail if the current theme supports ccd-fancybox by
			 * including its own copy of the Fancybox stylesheet.
			 */
			if ( current_theme_supports( 'ccd-fancybox' ) ) {
				return;
			} else {
				wp_enqueue_style( WAY_ADMIN_SLUG . '-fancybox', WAY_URL . 'assets/css/jquery.fancybox.min.css', [], WAY_VERSION, 'all' );
			}
		}

		// Slick.
		if ( get_option( 'way_enqueue_slick' ) ) {
			wp_enqueue_style( WAY_ADMIN_SLUG . '-slick', WAY_URL . 'assets/css/slick.min.css', [], WAY_VERSION, 'all' );
		}

		// Slick theme.
		if ( get_option( 'way_enqueue_slick' ) ) {
			wp_enqueue_style( WAY_ADMIN_SLUG . '-slick-theme', WAY_URL . 'assets/css/slick-theme.css', [], WAY_VERSION, 'all' );
		}

		// Tooltipster.
		if ( get_option( 'way_enqueue_tooltipster' ) ) {
			wp_enqueue_style( WAY_ADMIN_SLUG . '-tooltipster', WAY_URL . 'assets/css/tooltipster.bundle.min.css', [], WAY_VERSION, 'all' );
		}

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function way_enqueue_frontend_styles() {

	return Enqueue_Frontend_Styles::instance();

}

// Run an instance of the class.
way_enqueue_frontend_styles();