<?php

require_once 'functions/custom-login.php';
require_once 'functions/custom-post-type.php';
require_once 'functions/custom-taxo-category.php';
require_once 'functions/custom-taxo-tag.php';
require_once 'functions/custom-comment.php';
require_once 'functions/thumbs.php';
require_once 'functions/nav.php';
require_once 'functions/filters.php';
require_once 'functions/remove-editor.php';
require_once 'functions/meta-information.php';
require_once 'functions/header.php';

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


/*************************************************
 * Custom excerpt length
 */
add_filter( 'excerpt_length', function( $length )
{
    return 30;
} );

/***************************************************
 * Change author slug
 */
add_action( 'init', 'wa_author_base' );
function wa_author_base()
{
    global $wp_rewrite;
    $author_slug = 'membre'; // change slug name
    $wp_rewrite->author_base = $author_slug;
}

/*****************************************************
 * hide admin bar
 */
function wa_show_admin_bar()
{
    return false;
}
add_filter( 'show_admin_bar' , 'wa_show_admin_bar' );


/**
 *
 */
function custom_new_gravatar ($avatar_defaults) {
    $avatar = 'https://webartisan.florence-randaxhe.com/wp-content/uploads/2019/12/default-gravatar.jpg';
    $avatar_defaults[$avatar] = "Custom Gravatar";
    return $avatar_defaults;
}
add_filter( 'avatar_defaults', 'custom_new_gravatar' );


/************************************************************************/
/******************************   Forms  ********************************/
/************************************************************************
 *
 * Handle new thread formular
 */
function wa_get_forum_form()
{
    return'dw-custom-form-comment';
}

if( $_POST['wa_forum_form'] ?? false === wa_get_forum_form() )
{
    if (!is_user_logged_in()) {
        wp_redirect(home_url('/connexion'));
        exit;
    }
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
        wp_redirect( home_url(). $_SERVER['REQUEST_URI'] . '/?psw=success');exit;
    }
}

/***************************************************
 *
 * Handle email change
 */
function wa_change_mail_form()
{
    return'dw-mail-form-user';
}

if( $_POST['wa_mail_form'] ?? false === wa_change_mail_form() )
{
    require 'Classes/MailChangeController.php';
    $newMail = new MailChangeController( $_POST );
    $_SESSION['changemail'] = $newMail;

    if ( !$newMail->errors )
    {
        wp_redirect( home_url(). $_SERVER['REQUEST_URI'] . '/?mail=success');exit;
    }
}

