<?php

/****************
 *
 * Allow svg
 */
function cc_mime_types( $mimes )
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

/******************************************************
 *
 * Add thumbnails
 */
add_theme_support( 'post-thumbnails' );
add_image_size( 'job-thumb', 60, 60, array( 'center', 'center' ) );
add_image_size( 'tuto-thumb', 230, 230, array( 'left', 'top' ) );
add_image_size( 'featured-post', 1044, 376, array( 'left', 'bottom' ) );
add_image_size( 'post-thumb', 620, 300, array( 'left', 'top' ) );
add_image_size( 'small-thumb', 143, 100, array( 'left', 'top' ) );