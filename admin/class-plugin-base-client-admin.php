<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       mariolafuente.com
 * @since      1.0.0
 *
 * @package    Plugin_Base_Client
 * @subpackage Plugin_Base_Client/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Plugin_Base_Client
 * @subpackage Plugin_Base_Client/admin
 * @author     mariolafuente.com <admin@mariolafuente.com>
 */
class Plugin_Base_Client_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */

	/*
		if ( ! is_admin() ) {
			// No es administrrador
			echo 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
	} else {
		// echo 'El Usuario es administrador';
	}
	*/
	 
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/** * Register the stylesheets for the admin area. */
	public function enqueue_styles() {
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/plugin-base-client-admin.css', array(), $this->version, 'all' );
	}


	/** Change logn */
	public function login_style() {
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/login.css', array(), $this->version, 'all' );
		}
	
public function remove_logo() {
	echo '
							<style type="text/css"> 
							li#wp-admin-bar-wp-logo {
								display: none;
						}
							</style>
							';
			// global $wp_admin_bar;
			// $wp_admin_bar->remove_menu( 'wp-logo' );
	}


	/** Register the JavaScript for the admin area. */
	public function enqueue_scripts() {
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/plugin-base-client-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function remove_footer_admin() {
		echo '<span id="footer-thankyou">Developed by <a href="http://www.mariolafuente.com/" target="_blank">mariolafuente.com </a></span>';

	}



public function dashboard_widgets() {

		wp_add_dashboard_widget(
			'quick-menu-access',    // Widget slug and css
			'Quick Menu Access',   // Title.
			'dashboard_menu'		// Display function .	$result =  
	);

}


/* REMOVE STUFF */

public function remove_dashboard_widgets() {

	//Completely remove various dashboard widgets (remember they can also be HIDDEN from admin)
	remove_meta_box( 'dashboard_quick_press',   'dashboard', 'side' );      //Quick Press widget
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );      //Recent Drafts
	remove_meta_box( 'dashboard_primary',       'dashboard', 'side' );      //WordPress.com Blog
	remove_meta_box( 'dashboard_secondary',     'dashboard', 'side' );      //Other WordPress News
	remove_meta_box( 'dashboard_incoming_links','dashboard', 'normal' );    //Incoming Links
	remove_meta_box( 'dashboard_plugins',       'dashboard', 'normal' );    
	remove_meta_box( 'dashboard_activity',       'dashboard', 'normal' );   
	remove_meta_box( 'dashboard_right_now',       'dashboard', 'normal' );    

}



function remove_submenus() {
	global $submenu;
	//Remove Home and Updates
	unset($submenu['index.php'][10]); 
	//Posts menu
			    //unset($submenu['edit.php'][5]); // Leads to listing of available posts to edit
			    //unset($submenu['edit.php'][10]); // Add new post
			    //unset($submenu['edit.php'][15]); // Remove categories
			    //unset($submenu['edit.php'][16]); // Removes Post Tags

			    //Media Menu
			    //unset($submenu['upload.php'][5]); // View the Media library
			    //unset($submenu['upload.php'][10]); // Add to Media library

			    //Links Menu
			    //unset($submenu['link-manager.php'][5]); // Link manager
			    //unset($submenu['link-manager.php'][10]); // Add new link
			    //unset($submenu['link-manager.php'][15]); // Link Categories

			    //Pages Menu
			   // unset($submenu['edit.php?post_type=page'][5]); // The Pages listing
			    //unset($submenu['edit.php?post_type=page'][10]); // Add New page

			    //Appearance Menu
			   // unset($submenu['themes.php'][5]); // Removes 'Themes'
			    //unset($submenu['themes.php'][7]); // Widgets
			    unset($submenu['themes.php'][15]); // Removes Theme Installer tab
			    unset($submenu['themes.php'][20]); //Background
			    //unset($submenu['themes.php'][6]); // Customize

			    //Plugins Menu
			    //unset($submenu['plugins.php'][5]); // Plugin Manager
			    //unset($submenu['plugins.php'][10]); // Add New Plugins
			    //unset($submenu['plugins.php'][15]); // Plugin Editor

			    //Users Menu
			    //unset($submenu['users.php'][5]); // Users list
			    //unset($submenu['users.php'][10]); // Add new user
			    //unset($submenu['users.php'][15]); // Edit your profile

			    //Tools Menu
			    //unset($submenu['tools.php'][5]); // Tools area
			    //unset($submenu['tools.php'][10]); // Import
			    //unset($submenu['tools.php'][15]); // Export
			    //unset($submenu['tools.php'][20]); // Upgrade plugins and core files

			    //Settings Menu
			   // unset($submenu['options-general.php'][10]); // General Options
			   // unset($submenu['options-general.php'][15]); // Writing
			    //unset($submenu['options-general.php'][20]); // Reading
			    //unset($submenu['options-general.php'][25]); // Discussion
			    //unset($submenu['options-general.php'][30]); // Media
			    //unset($submenu['options-general.php'][35]); // Privacy
			    //unset($submenu['options-general.php'][40]); // Permalinks
			    //unset($submenu['options-general.php'][45]); // Misc
}



	public function removeJunk(){
		//echo 'xxxx';
	}


}

global $managerOpt_Home_PgId;       $managerOpt_Home_PgId     = 51;   // esta en otros lados run search
global $managerOpt_General_PgId;    $managerOpt_General_PgId  = 154; //up 1336; //change in line 405
global $tiendasPgId;                $tiendasPgId              = 181;   //up 45;


function dashboard_menu() {

	echo '<table><thead><tr></tr></thead><tbody><tr><td><h4>Productos</h4></td><td><a href="'. esc_url( home_url( '/wp-admin/edit.php?post_type=product' ) ) .'" target="_blank" rel="noopener">Abrir</a></td></tr><tr><td><h4>Exportar Usuarios</h4></td><td><a href="'. esc_url( home_url( '/wp-admin/export.php' ) ) .'" target="_blank" rel="noopener">Abrir</a></td></tr><tr><td><h4>Modificar Tipo de cambio</h4></td><td><a href="'. esc_url( home_url( '/wp-admin/options-general.php?page=gnc_storefront' ) ) .'" target="_blank" rel="noopener">Abrir</a></td></tr><tr><td><h4>Modificar Terminos de Carrito de compra</h4></td><td><a href="'. esc_url( home_url( '/wp-admin/post.php?post=1136&amp;action=edit' ) ) .'" target="_blank" rel="noopener">Abrir</a></td></tr><tr><td><h4>Refrescar precios</h4></td><td><a href="'. esc_url( home_url( '/run-dollar-product-price-update/' ) ) .'" target="_blank" rel="noopener">Abrir</a></td></tr><tr><td><h4>Modificar Pg Principal</h4></td><td><a href="'. esc_url( home_url( '/wp-admin/post.php?post=51&amp;action=edit' ) ) .'" target="_blank" rel="noopener">Abrir</a></td></tr><tr><td><h4>Modificar headlines</h4></td><td><a href="' . esc_url( home_url( '/wp-admin/admin.php?page=revslider' ) ) .'" target="_blank" rel="noopener">Abrir</a></td></tr><tr><td><h4>Modificar Menus</h4></td><td><a href="' .esc_url( home_url( '/wp-admin/nav-menus.php' ) ) . '" target="_blank" rel="noopener">Abrir</a></td></tr><tr><td><h4>Modificar Footer Sidebar y mas</h4></td><td><a href="' . esc_url( home_url( '/wp-admin/widgets.php' ) ) .'" target="_blank" rel="noopener">Abrir</a></td></tr><tr><td><h4>Listado de Clientes</h4></td><td><a href="'. esc_url( home_url( '/wp-admin/admin.php?page=wc-reports&amp;tab=customers&amp;report=customer_list' ) ) .'" target="_blank" rel="noopener">Abrir</a></td></tr><tr><td><h4>Listado de venta de este mes</h4></td><td><a href="'. esc_url( home_url( '/wp-admin/admin.php?page=wc-reports&amp;tab=orders&amp;range=month' ) ) .'" target="_blank" rel="noopener">Abrir</a></td></tr><tr><td><h4>Loguearse al chat</h4></td><td><a href="'. esc_url( home_url( '/wp-admin/options-general.php?page=tawkto_plugin&amp;override=1' ) ) .'" target="_blank" rel="noopener">Abrir</a></td></tr><tr><td><h4>BAC PAYMENT GATEWAY</h4></td><td><a href="'. esc_url( home_url( '/wp-admin/admin.php?page=wc-settings&amp;tab=checkout&amp;section=credomatic' ) ) .'" target="_blank" rel="noopener">Abrir</a></td></tr><tr><td><h4>&gt;Abrir Credomaic</h4></td><td><a href="https://credomatic.compassmerchantsolutions.com/merchants/reports.php?tid=8929b12071bf3d23f3a3337e36ef3996" target="_blank" rel="noopener">Abrir</a></td></tr></tbody></table>';
	
	
	}
	