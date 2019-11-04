<?php
/**
 * Custom taxonomy
 */
function wa_add_taxonomies() {
    /***************************************************************
     * Actuality (category)
     */
    register_taxonomy(
        'categorypost',
        'articles',
        array(
            'label'                 => __( 'Catégorie' ),
            'sort'                  => true,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'hierarchical'          => true,
            'query_var'             => true,
            'rewrite'               => array( 'slug' => 'actu' )
        )
    );
    /***************************************************************
     * Actuality (tags)
     */
    register_taxonomy(
        'tagpost',
        'articles',
        array(
            'label'                 => __( 'Tags' ),
            'sort'                  => true,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'hierarchical'          => false,
            'query_var'             => true,
            'rewrite'               => array( 'slug' => 'tag-actu' )
        )
    );
    /***************************************************************
     * Tutorials type (category)
     */
    register_taxonomy(
        'categorytype',
        'tutoriels',
        array(
            'label'                 => __( 'Catégorie' ),
            'sort'                  => true,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'hierarchical'          => true,
            'query_var'             => true,
            'rewrite'               => array( 'slug' => 'type' )
        )
    );
    /***************************************************************
    * Tutorials language (category)
    */
    register_taxonomy(
        'categorylang',
        'tutoriels',
        array(
            'label'                 => __( 'Language' ),
            'sort'                  => true,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'hierarchical'          => true,
            'query_var'             => true,
            'rewrite'               => array( 'slug' => 'langage' )
        )
    );
    /***************************************************************
     * Forum type (category)
     */
    register_taxonomy(
        'categoryforum',
        'forum',
        array(
            'label'                 => __( 'Catégorie' ),
            'sort'                  => true,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'hierarchical'          => true,
            'query_var'             => true,
            'rewrite'               => array( 'slug' => 'thread' )
        )
    );
    /***************************************************************
     * Doc type (category)
     */
    register_taxonomy(
        'categorydoc',
        'doc',
        array(
            'label'                 => __( 'Catégorie' ),
            'sort'                  => true,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'hierarchical'          => true,
            'query_var'             => true,
            'rewrite'               => array( 'slug' => 'doc' )
        )
    );
    /***************************************************************
     * Ressources type (tag)
     */
    register_taxonomy(
        'tagres',
        'ressources',
        array(
            'label'                 => __( 'Tags' ),
            'sort'                  => true,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'hierarchical'          => false,
            'query_var'             => true,
            'rewrite'               => array( 'slug' => 'tag-res' )
        )
    );
}
add_action( 'init', 'wa_add_taxonomies', 0 );