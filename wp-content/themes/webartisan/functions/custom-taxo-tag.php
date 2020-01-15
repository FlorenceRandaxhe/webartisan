<?php
/**
 * Tags
 */
function wa_add_taxo_tag() {
    /***************************************************************
     * Actuality (tags)
     */
    register_taxonomy(
        'tagpost',
        'articles',
        [
            'labels'             => [
                'name'              => _x( 'Tags', 'taxonomy general name', 'wa' ),
                'singular_name'     => _x( 'Tag', 'taxonomy singular name', 'wa' ),
                'search_items'      => __( 'Rechercher un tag', 'wa' ),
                'all_items'         => __( 'Toutes les tags', 'wa' ),
                'edit_item'         => __( 'Modifier le tag', 'wa' ),
                'update_item'       => __( 'Mettre à jour le tag', 'wa' ),
                'add_new_item'      => __( 'Ajouter un tag', 'wa' ),
                'new_item_name'     => __( 'Nouvel intitulé du tag', 'wa' ),
                'menu_name'         => __( 'Tag', 'wa' ),
            ],
            'sort'               => true,
            'show_ui'            => true,
            'show_admin_column'  => true,
            'hierarchical'       => false,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'tag-actu' )
        ]
    );
    /***************************************************************
     * tutoriels (tags)
     */
    register_taxonomy(
        'tagtuto',
        'tutoriels',
        [
            'labels'             => [
                'name'              => _x( 'Tags', 'taxonomy general name', 'wa' ),
                'singular_name'     => _x( 'Tag', 'taxonomy singular name', 'wa' ),
                'search_items'      => __( 'Rechercher un tag', 'wa' ),
                'all_items'         => __( 'Toutes les tags', 'wa' ),
                'edit_item'         => __( 'Modifier le tag', 'wa' ),
                'update_item'       => __( 'Mettre à jour le tag', 'wa' ),
                'add_new_item'      => __( 'Ajouter un tag', 'wa' ),
                'new_item_name'     => __( 'Nouvel intitulé du tag', 'wa' ),
                'menu_name'         => __( 'Tag', 'wa' ),
            ],
            'sort'               => true,
            'show_ui'            => true,
            'show_admin_column'  => true,
            'hierarchical'       => false,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'tag-tuto' )
        ]
    );
    /***************************************************************
     * Ressources type (tag)
     */
    register_taxonomy(
        'tagres',
        'ressources',
        [
            'labels'             => [
                'name'              => _x( 'Tags', 'taxonomy general name', 'wa' ),
                'singular_name'     => _x( 'Tag', 'taxonomy singular name', 'wa' ),
                'search_items'      => __( 'Rechercher un tag', 'wa' ),
                'all_items'         => __( 'Toutes les tags', 'wa' ),
                'edit_item'         => __( 'Modifier le tag', 'wa' ),
                'update_item'       => __( 'Mettre à jour le tag', 'wa' ),
                'add_new_item'      => __( 'Ajouter un tag', 'wa' ),
                'new_item_name'     => __( 'Nouvel intitulé du tag', 'wa' ),
                'menu_name'         => __( 'Tag', 'wa' ),
            ],
            'sort'               => true,
            'show_ui'            => true,
            'show_admin_column'  => true,
            'hierarchical'       => false,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'tag-res' )
        ]
    );
}
add_action( 'init', 'wa_add_taxo_tag', 0 );
