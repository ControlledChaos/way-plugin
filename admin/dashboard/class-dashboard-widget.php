<?php
/**
 * Dashboard widget.
 *
 * @package    WAY_Plugin
 * @subpackage Admin\Dashboard
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace WAY_Plugin\Admin\Dashboard;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Dashboard widget.
 *
 * @since IntegratePress 1.0.0
 */
class Dashboard_Widget {

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

		// Register the dashboard widget area.
		add_action( 'widgets_init', [ $this, 'widget_area' ], 25 );

		// Create the dashdoard widget.
		add_action( 'wp_dashboard_setup', [ $this, 'dashboard_widget' ] );

	}

	/**
	 * Register the dashboard widget area.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function widget_area() {

		register_sidebar( [
			'name'          => __( 'Dashboard Widget Area', 'way-plugin' ),
			'id'            => 'way_dashboard_widget',
			'description'   => __( 'Widgetize the Dasboard for users.', 'way-plugin' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		] );

	}

	/**
	 * Create the dashdoard widget.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function dashboard_widget() {

		$heading = apply_filters( 'way_dashboard_widget_heading', __( 'Sample Widget', 'way-plugin' ) );

		wp_add_dashboard_widget( 'way_dashboard_widget', $heading, [ $this, 'output' ] );

	}

	/**
	 * Dashboard widget output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return mixed
	 */
	public function output() {

		if ( is_active_sidebar( 'way_dashboard_widget' ) ) {

			dynamic_sidebar( 'way_dashboard_widget' );

		} else {

			$placeholder = sprintf(
				'<p><a href="%1s">%2s</a> %3s.</p>',
				admin_url( 'widgets.php' ),
				__( 'Add a widget', 'way-plugin' ),
				__( 'to this area', 'way-plugin' )
			);

			echo $placeholder;

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
function way_dashboard_widget() {

	return Dashboard_Widget::instance();

}

// Run an instance of the class.
way_dashboard_widget();