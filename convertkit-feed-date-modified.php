<?php
/**
 * Plugin Name:         ConvertKit Feed by Date Modified
 * Description:         Replaces the original publish date in the feed with the last modified date.
 * Plugin URI:          https://github.com/momsdish-corp/public-wp-convertkit-feed-date-modified
 * Author:              Momsdish
 * Author URI:          https://github.com/momsdish-corp
 * Requires PHP:        7
 * Requires at least:   6
 * Text Domain:         convertkit-feed-date-modified
 * Domain Path:         /languages
 * Version:             0.1.0
 *
 * @package             Momsdish
 */

define( 'CONVERTKIT_FEED_DATE_MODIFIED_DIR', __DIR__ );
define( 'CONVERTKIT_FEED_DATE_MODIFIED_FILE', __FILE__ );
define( 'CONVERTKIT_FEED_DATE_MODIFIED_URL', plugin_dir_url( __FILE__ ) );
define( 'CONVERTKIT_FEED_DATE_MODIFIED_TEXT_DOMAIN', 'convertkit-feed-date-modified' );

// If this file is called directly, abort.
defined( 'ABSPATH' ) || exit;

// Add the feed URL
// Feed available through this URL - /index.php?feed=convertkit-date-modified-rss2
add_action('init', function(){
	add_feed('convertkit-date-modified', function() {
		load_template( plugin_dir_path( __FILE__ ) . 'convertkit-feed-date-modified-rss2.php' );
	});
});

// Modify the query to order by modified date
add_action('pre_get_posts', function($query) {
	if($query->is_feed('convertkit-date-modified')) {
		$query->set('orderby', 'modified');
		$query->set('order', 'DESC');
	}
});
