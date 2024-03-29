<?php
/**
 * Script options page output.
 *
 * @package    WAY_Plugin
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace WAY_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Active tab switcher.
 *
 * @since  1.0.0
 * @return void
 */
if ( isset( $_GET[ 'tab' ] ) ) {
    $active_tab = $_GET[ 'tab' ];
} else {
    $active_tab = 'general';
}

/**
 * Set up the page tabs as an array for adding tabs
 * from another plugin or from a theme.
 *
 * @since  1.0.0
 * @return array
 */
$tabs = [

    // General options tab.
    sprintf(
        '<a href="?page=%1s-scripts&tab=general" class="nav-tab %2s"><span class="dashicons dashicons-admin-tools"></span> %3s</a>',
        WAY_ADMIN_SLUG,
        $active_tab == 'general' ? 'nav-tab-active' : '',
        esc_html__( 'General', 'way-plugin' )
    ),

    // Vendor options tab.
    sprintf(
        '<a href="?page=%1s-scripts&tab=vendor" class="nav-tab %2s"><span class="dashicons dashicons-admin-plugins"></span> %3s</a>',
        WAY_ADMIN_SLUG,
        $active_tab == 'vendor' ? 'nav-tab-active' : '',
        esc_html__( 'Vendor', 'way-plugin' )
    )

];

// Apply a filter to the tabs array for adding tabs.
$page_tabs = apply_filters( 'way_tabs_script_options', $tabs );

/**
 * Do settings section and fields by tab.
 *
 * @since  1.0.0
 * @return void
 */
if ( 'general' == $active_tab ) {
    $section = 'way-scripts-general';
    $fields  = 'way-scripts-general';
} elseif ( 'vendor' == $active_tab ) {
    $section = 'way-scripts-vendor';
    $fields  = 'way-scripts-vendor';
} else {
    $section = null;
    $fields  = null;
}

// Apply filters to the sections and fields for new tabs.
$do_section = apply_filters( 'way_section_script_options', $section );
$do_fields  = apply_filters( 'way_fields_script_options', $fields );


/**
 * Conditional save button text by tab.
 *
 * @since  1.0.0
 * @return string Returns the button label.
 */
if ( 'general' == $active_tab  ) {
    $save = __( 'Save General', 'way-plugin' );
} elseif ( 'vendor' == $active_tab ) {
    $save = __( 'Save Vendor', 'way-plugin' );
} else {
    $save = __( 'Save Settings', 'way-plugin' );
}

// Apply a filter for new tabs added by another plugin or from a theme.
$button = apply_filters( 'way_save_script_options', $save );

?>
<div class="wrap">
    <h1 class="wp-heading-inline"><?php esc_html_e( 'Script Options', 'way-plugin' ); ?></h1>
    <?php if ( is_rtl() ) : ?>
    <p class="description"><?php esc_html_e( 'Script settings from the Controlled Chaos plugin. More information in the Help tab at upper left.', 'way-plugin' ); ?></p>
    <?php else : ?>
    <p class="description"><?php esc_html_e( 'Script settings from the Controlled Chaos plugin. More information in the Help tab at upper right.', 'way-plugin' ); ?></p>
    <?php endif; ?>
    <hr class="wp-header-end">
    <h2 class="nav-tab-wrapper">
        <?php echo implode( $page_tabs ); ?>
    </h2>
    <form method="post" action="options.php">
        <?php
        settings_fields( $do_fields );
        do_settings_sections( $do_section );
        ?>
        <p class="submit"><?php submit_button( $button, 'primary', '', false, [] ); ?></p>
    </form>
</div>