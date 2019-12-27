<?php
/**
 * Custom taxonomy
 */
function wa_add_taxo_category() {
    /***************************************************************
     * Actualités (category)
     */
    register_taxonomy(
        'categorypost',
        'articles', [
        'labels'            => [
            'name'              => _x( 'Catégories', 'taxonomy general name', 'wa' ),
            'singular_name'     => _x( 'Catégorie', 'taxonomy singular name', 'wa' ),
            'search_items'      => __( 'Rechercher une catégorie', 'wa' ),
            'all_items'         => __( 'Toutes les catégories', 'wa' ),
            'edit_item'         => __( 'Modifier la catégorie', 'wa' ),
            'update_item'       => __( 'Mettre à jour la catégorie', 'wa' ),
            'add_new_item'      => __( 'Ajouter une catégorie', 'wa' ),
            'new_item_name'     => __( 'Nouvelle intitulé de la catégorie', 'wa' ),
            'menu_name'         => __( 'Catégorie', 'wa' ),
        ],
        'hierarchical'      => true,
        'sort'              => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'actu' ),
    ]);
    /***************************************************************
     * Tutoriels - type
     */
    register_taxonomy(
        'categorytype',
        'tutoriels', [
        'labels'            => [
            'name'              => _x( 'Catégories', 'taxonomy general name', 'wa' ),
            'singular_name'     => _x( 'Catégorie', 'taxonomy singular name', 'wa' ),
            'search_items'      => __( 'Rechercher une catégorie', 'wa' ),
            'all_items'         => __( 'Toutes les catégories', 'wa' ),
            'edit_item'         => __( 'Modifier la catégorie', 'wa' ),
            'update_item'       => __( 'Mettre à jour la catégorie', 'wa' ),
            'add_new_item'      => __( 'Ajouter une catégorie', 'wa' ),
            'new_item_name'     => __( 'Nouvelle intitulé de la catégorie', 'wa' ),
            'menu_name'         => __( 'Catégorie', 'wa' ),
        ],
        'hierarchical'      => true,
        'sort'              => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'type' ),
        ]
    );
    /***************************************************************
    * Tutorials language (category)
    */
    register_taxonomy(
        'categorylang',
        'tutoriels',
        [
        'labels'            => [
            'name'              => _x( 'Langages', 'taxonomy general name', 'wa' ),
            'singular_name'     => _x( 'Langage', 'taxonomy singular name', 'wa' ),
            'search_items'      => __( 'Rechercher un langage', 'wa' ),
            'all_items'         => __( 'Toutes les langages', 'wa' ),
            'edit_item'         => __( 'Modifier le langage', 'wa' ),
            'update_item'       => __( 'Mettre à jour le langage', 'wa' ),
            'add_new_item'      => __( 'Ajouter un langage', 'wa' ),
            'new_item_name'     => __( 'Nouvelle intitulé du langage', 'wa' ),
            'menu_name'         => __( 'Langage', 'wa' ),
        ],
        'hierarchical'      => true,
        'sort'              => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'langage' ),
        ]
    );
    /***************************************************************
     * Forum type (category)
     */
    register_taxonomy(
        'categoryforum',
        'forum',
        [
        'labels'             => [
            'name'              => _x( 'Catégories', 'taxonomy general name', 'wa' ),
            'singular_name'     => _x( 'Catégorie', 'taxonomy singular name', 'wa' ),
            'search_items'      => __( 'Rechercher une catégorie', 'wa' ),
            'all_items'         => __( 'Toutes les catégories', 'wa' ),
            'edit_item'         => __( 'Modifier la catégorie', 'wa' ),
            'update_item'       => __( 'Mettre à jour la catégorie', 'wa' ),
            'add_new_item'      => __( 'Ajouter une catégorie', 'wa' ),
            'new_item_name'     => __( 'Nouvelle intitulé de la catégorie', 'wa' ),
            'menu_name'         => __( 'Catégorie', 'wa' ),
        ],
        'sort'               => true,
        'show_ui'            => true,
        'show_admin_column'  => true,
        'hierarchical'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'thread' )
        ]
    );
    /***************************************************************
     * Doc type (category)
     */
    register_taxonomy(
        'categorydoc',
        'doc',
        [
        'labels'              => [
            'name'              => _x( 'Catégories', 'taxonomy general name', 'wa' ),
            'singular_name'     => _x( 'Catégorie', 'taxonomy singular name', 'wa' ),
            'search_items'      => __( 'Rechercher une catégorie', 'wa' ),
            'all_items'         => __( 'Toutes les catégories', 'wa' ),
            'edit_item'         => __( 'Modifier la catégorie', 'wa' ),
            'update_item'       => __( 'Mettre à jour la catégorie', 'wa' ),
            'add_new_item'      => __( 'Ajouter une catégorie', 'wa' ),
            'new_item_name'     => __( 'Nouvelle intitulé de la catégorie', 'wa' ),
            'menu_name'         => __( 'Catégorie', 'wa' ),
        ],
        'sort'               => true,
        'show_ui'            => true,
        'show_admin_column'  => true,
        'hierarchical'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'doc' )
        ]
    );
}
add_action( 'init', 'wa_add_taxo_category', 0 );
