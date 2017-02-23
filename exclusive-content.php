<?php
/**
 * This plugin provides a shortcode that lets you hide some parts of the content
 * from your posts and pages.
 *
 * @package   Exclusive-Content
 * @version   1.0.0
 * @author    Abhijeet Prasad <abhijeet.prasad@rci.rogers.com>
 * @link      http://github.com/digitalmedia/
 *
 * @wordpress-plugin
 * Plugin Name: Exclusive Content
 * Plugin URI: http://github.com/digitalmedia
 * Description: This plugin provides a shortcode that lets you hide some parts of the content from your posts and pages.
 * Author: Abhijeet Prasad
 * Author URI: http://github.com/digitalmedia
 * Version: 1.0.0
 */

// Load the class that process shortcode
require( dirname( __FILE__ ) . '/exclusive-content.class.php' );
// Load the class that creates settings page
require( dirname( __FILE__) . '/exclusive-content-settings.php' );

new Ex_Content;