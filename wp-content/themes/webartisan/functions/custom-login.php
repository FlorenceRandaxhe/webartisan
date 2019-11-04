<?php

/************************
 *
 * Main redirection of the default login page.
 */
function redirect_login_page()
{
    $login_page  = home_url( '/connexion/' );
    $page_viewed = basename( $_SERVER['REQUEST_URI'] );

    if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET' )
    {
        wp_redirect( $login_page );
        exit;
    }
}
add_action( 'init','redirect_login_page' );


/********************************************************
 *
 * Main redirection of the default register page.
 */
function redirect_register_page()
{
    $register_page  = home_url( '/sinscrire/' );
    $page_viewed = basename( $_SERVER['REQUEST_URI'] );

    if( $page_viewed == "wp-login.php?action=register" && $_SERVER['REQUEST_METHOD'] == 'GET' )
    {
        wp_redirect( $register_page );
        exit;
    }
}
add_action( 'init','redirect_register_page' );

/**********************************************************
 *
 * Where to go if a login failed
 */
function custom_login_failed()
{
    $login_page  = home_url( '/connexion/' );
    wp_redirect( $login_page . '?login=failed' );
    exit;
}
add_action( 'wp_login_failed', 'custom_login_failed' );

/**********************************************************
 * Where to go if any of the fields were empty
 */
function verify_user_pass( $user, $username, $password )
{
    $login_page  = home_url( '/connexion/' );
    if( $username == "" || $password == "" )
    {
        wp_redirect( $login_page . "?login=empty" );
        exit;
    }
}
add_filter( 'authenticate', 'verify_user_pass', 1, 3 );

/**********************************************************
 * What to do on logout
 */

