<?php
/*
Plugin Name: Srizon Responsive Flickr Gallery Basic
Plugin URI: http://www.srizon.com/srizon-flickr-gallery
Description: This Plugin is designed to show your flickr photos into your WordPress site either as an album or as a gallery (A collection of albums).
Text Domain: srizon-flickr-gallery
Domain Path: /languages
Version: 1.0
Author: Afzal
Author URI: http://www.srizon.com/contact
*/
function srizon_flickr_gallery_load_textdomain() {
    load_plugin_textdomain( 'srizon-flickr-gallery', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'srizon_flickr_gallery_load_textdomain' );

require_once 'lib/srizon_functions.php';
require_once 'lib/srizon_pagination.php';
require_once 'lib/srizon-flickr-ui.php';
require_once 'lib/srizon-flickr-db.php';
require_once 'lib/flickr.php';

// font end files
if(!is_admin()) {
    require_once 'site/srizon-flickr-front.php';
    require_once 'site/srizon-flickr-album-front.php';
    require_once 'site/srizon-flickr-gallery-front.php';
}

// backend files
if(is_admin()) {
    require_once 'admin/index.php';
}

SrizonFlickrDB::prepareCommonOpt();

function srz_flickr_get_resource_url( $relativePath ) {
    return plugins_url( $relativePath, plugin_basename( __FILE__ ) );
}