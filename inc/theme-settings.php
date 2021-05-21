<?php
defined( 'ABSPATH' ) || exit();


/**
 * add link to the top menu (house icon with site name)
*/
add_action( 'admin_bar_menu', 'add_link_to_admin_bar',999 );
 
function add_link_to_admin_bar($admin_bar) {         
          $args = array(
                // 'parent' => 'dashboard',
                'id'     => 'media-libray',
                'title'  => 'Media Library',
                'href'   => esc_url( admin_url( 'upload.php' ) ),
                'group'  => true,
                'meta'   => false
            );
            $admin_bar->add_menu( $args );       
}

// Add Toolbar Menus
function gelios_toolbar() {
	global $wp_admin_bar;

	$args = array(
		'id'     => 'heroheader',
		'title'  => __( 'heroheader', 'uk' ),
		'group'  => true,
	);
	$wp_admin_bar->add_menu( $args );

}
add_action( 'admin_bar_menu', 'gelios_toolbar', 999 );

