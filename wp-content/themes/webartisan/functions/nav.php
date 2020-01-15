<?php

/**
 *
 * register nav
 */
register_nav_menus(
    array(
        'main' 		=> 'main navigation',
        'footer' 	=> 'footer navigation',
    )
);

/**************************************************
 *
 * get menu structure as array
 */
function wa_getMenu( $location )
{
    global $wp_post;
    $wp_post = get_queried_object_id();
    $menu = [];
    $locations = get_nav_menu_locations();

    foreach ( wp_get_nav_menu_items ( $locations[$location] ) as $post )
    {
        $item = new stdClass();
        $item->url = $post->url;
        $item->label = $post->title;
        $item->current = ( $post->object_id == $wp_post );
        $menu[$post->ID] = $item;
    }
    return $menu;
}
