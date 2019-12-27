<?php

/**
 * Remove editor on template pages
 */
function wa_remove_editor() {
    if (isset($_GET['post'])) {
        $id = $_GET['post'];
        $template = get_post_meta($id, '_wp_page_template', true);
        switch ($template) {
            case 'template-parts/template-newForum.php':
            case 'template-parts/template-addJob.php':
            case 'template-parts/template-login.php':
            case 'template-parts/template-register.php':
            case 'template-parts/template-profile.php':
                remove_post_type_support('page', 'editor');
                break;
            default :
                // Don't remove any other template.
                break;
        }
    }
}
add_action('init', 'wa_remove_editor');
