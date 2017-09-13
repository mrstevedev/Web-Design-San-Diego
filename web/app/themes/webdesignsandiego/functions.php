<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

function cc_mime_types($mimes=array()) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types', 1, 1);

wp_list_comments( array(
  'avatar_size' => 100,
) );

// // Async load
// function ikreativ_async_scripts($url)
// {
//     if ( strpos( $url, '#asyncload') === false )
//         return $url;
//     else if ( is_admin() )
//         return str_replace( '#asyncload', '', $url );
//     else
// 	return str_replace( '#asyncload', '', $url )."' async='async"; 
//     }
// add_filter( 'clean_url', 'ikreativ_async_scripts', 11, 1 );

// // Enqueue scripts
// function ikreativ_theme_scripts()
// {
//     // wp_enqueue_script() syntax, $handle, $src, $deps, $version, $in_footer(boolean)
//     wp_enqueue_script('sage/smoothscroll', get_template_directory_uri() . '/assets/scripts/smoothscroll.min.js#asyncload', ['jquery'], null, true);  
// }
// add_action( 'wp_enqueue_scripts', 'ikreativ_theme_scripts');