<?php

require_once 'functions/custom-login.php';
require_once 'functions/custom-post-type.php';
require_once 'functions/custom-taxonomy.php';
require_once 'functions/custom-comment.php';
require_once 'functions/thumbs.php';
require_once 'functions/nav.php';
require_once 'functions/filters.php';

/************************************************
 * Path for assets
 */
function assets( $path )
{
    return get_template_directory_uri() . '/' . trim( $path, '/' );
}

/************************************************
 * Title (meta)
 */
add_filter( 'wp_title', 'custom_wp_title' );
function custom_wp_title( $title )
{
    if( empty( $title ) )
    {
        $title = 'Accueil';
    }
    $title .= ' | ' . get_bloginfo( 'name' );
    return trim( $title );
}

/************************************************
 * Page links
 */
function wa_get_page_id_from_template( $templateName )
{
    $pages = get_pages( array (
        'meta_key' => '_wp_page_template',
        'meta_value' => 'template-parts/' . $templateName,
    ));
    foreach( $pages as $page ){
        return $page->ID;
    }
}

function wa_get_page_url( $templateName )
{
    return get_page_link( wa_get_page_id_from_template( $templateName ) );
}

/************************************************
 * remove unused menu from side-bar
 */
function remove_menus()
{
    remove_menu_page( 'edit.php' );   //Posts
}
add_action( 'admin_menu', 'remove_menus' );

add_filter( 'excerpt_length', function( $length )
{
    return 30;
} );

/***************************************************
 * Change author slug
 */
add_action( 'init', 'cng_author_base' );
function cng_author_base()
{
    global $wp_rewrite;
    $author_slug = 'membre'; // change slug name
    $wp_rewrite->author_base = $author_slug;
}

/***************************************************
 *
 * Handle new thread formular
 */
function wa_get_forum_form()
{
    return'dw-custom-form-comment';
}

if( $_POST['wa_forum_form'] ?? false === wa_get_forum_form() )
{
    require 'Classes/ForumFormController.php';
    $forumForm = new ForumFormController( $_POST );
    $_SESSION['thread'] = $forumForm;

    if ( !$forumForm->errors )
    {
        wp_redirect(home_url( '/forum' ) );exit;
    }
}

/***************************************************
 *
 * Handle contact formular
 */
function wa_contact_form()
{
    return'dw-contact-form';
}

if( $_POST['wa_contact_form'] ?? false === wa_contact_form() )
{
    require 'Classes/ContactFormController.php';
    $contactForm = new ContactFormController( $_POST );
    $_SESSION['contact'] = $contactForm;

    if (!$contactForm->errors )
    {
        wp_redirect( home_url(). $_SERVER['REQUEST_URI'] . '/?mail=success' ); exit;
    }
}

/***************************************************
 *
 * Handle new job formular
 */
function wa_new_job_form()
{
    return'dw-new-job-form';
}

if( $_POST['wa_new_job'] ?? false === wa_new_job_form() )
{
    require 'Classes/NewJobFormController.php';
    $newJobOffer = new NewJobFormController( $_POST );
    $_SESSION['job'] = $newJobOffer;

    if ( !$newJobOffer->errors )
    {
        wp_redirect( home_url(). $_SERVER['REQUEST_URI'] . '/?add=success' ); exit;
    }
}

/***************************************************
 *
 * Handle register formular
 */
function wa_new_user_form()
{
    return'dw-custom-form-user';
}

if( $_POST['wa_user_form'] ?? false === wa_new_user_form() )
{
    require 'Classes/RegisterFormController.php';
    $newUser = new RegisterFormController( $_POST );
    $_SESSION['newUser'] = $newUser;

    if ( !$newUser->errors )
    {
        wp_redirect( home_url('/connexion') );exit;
    }
}

/***************************************************
 *
 * Handle password change
 */
function wa_change_password_form()
{
    return'dw-password-form-user';
}

if( $_POST['wa_password_form'] ?? false === wa_change_password_form() )
{
    require 'Classes/PasswordChangeController.php';
    $newPassword = new PasswordChangeController( $_POST );
    $_SESSION['newUser'] = $newPassword;

    if ( !$newPassword->errors )
    {
        wp_redirect( home_url(). $_SERVER['REQUEST_URI'] );exit;
    }
}


function wa_show_admin_bar()
{
    return false;
}
add_filter( 'show_admin_bar' , 'wa_show_admin_bar' );