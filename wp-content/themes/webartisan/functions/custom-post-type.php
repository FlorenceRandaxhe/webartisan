<?php
/***************************************
 *
 * Register custom post type
 */
function wa_register_post_types(){

    // Actualities
    register_post_type( 'articles', [
        'label'                 => 'Actualités',
        'labels'                => [
            'singular_name'         => 'Actualité',
            'add_new_item'          => 'Ajouter une actualité',
            'add_new'               => 'Ajouter une actualité',
            'edit_item'             => 'Editer une des actualités',
            'new_item'              => 'Nouvelle actualité',
            'view_item'             => 'Voir l\'actualité',
            'search_items'          => 'Rechercher une actualité',
            'not_found'             => 'Aucune actualité trouvée',
            'not_found_in_trash'    => 'Aucune actualité dans la corbeille',
        ],
        'description'           => 'Toutes les actualités du web',
        'hierarchical'          => true,
        'public'                => true,
        'menu_icon'             => 'dashicons-welcome-widgets-menus',
        'menu_position'         => 5,
        'supports'              => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'comments',
            'revisions',
            'custom-fields'
        ),
    ] );

    // Tutorials
    register_post_type( 'tutoriels', [
        'label'                 => 'Tutoriels',
        'labels'                => [
            'singular_name'         => 'Tutoriel',
            'add_new_item'          => 'Ajouter un tutoriel',
            'add_new'               => 'Ajouter un tutoriel',
            'edit_item'             => 'Editer un des tutoriels',
            'new_item'              => 'Nouveau tutoriel',
            'view_item'             => 'Voir le tutoriel',
            'search_items'          => 'Rechercher un tutoriel',
            'not_found'             => 'Aucun tutoriel trouvé',
            'not_found_in_trash'    => 'Aucun tutoriel dans la corbeille',
        ],
        'description'           => 'Tous les tutoriels',
        'hierarchical'          => true,
        'public'                => true,
        'menu_icon'             => 'dashicons-editor-code',
        'menu_position'         => 5,
        'supports'              => array(
            'title',
            'editor',
            'excerpt',
            'comments',
            'revisions',
            'custom-fields'
        ),
    ] );

    // Jobs
    register_post_type( 'emplois', [
        'label'                 => 'Offres d\'emploi',
        'labels'                => [
            'singular_name'         => 'Offre d\'emploi',
            'add_new_item'          => 'Ajouter une offre d\'emploi',
            'add_new'               => 'Ajouter une offre d\'emploi',
            'edit_item'             => 'Editer une des offres d\'emploi',
            'new_item'              => 'Nouvelle offre d\'emploi',
            'view_item'             => 'Voir l\'offre d\'emploi',
            'search_items'          => 'Rechercher une offre d\'emploi',
            'not_found'             => 'Aucune offre d\'emploi trouvée',
            'not_found_in_trash'    => 'Aucune offre d\'emploi dans la corbeille',
        ],
        'description'           => 'Toutes les offres d\'emploi',
        'hierarchical'          => true,
        'public'                => true,
        'menu_icon'             => 'dashicons-megaphone',
        'menu_position'         => 5,
        'supports'              => array(
            'title',
            'custom-fields',
            'thumbnail'
        ),
    ] );

    // Forum
    register_post_type( 'forum', [
        'label'                 => 'Forum',
        'labels'                => [
            'singular_name'         => 'Forum',
            'add_new_item'          => 'Ajouter un sujet de forum',
            'add_new'               => 'Ajouter un sujet au forum',
            'edit_item'             => 'Editer un des sujets',
            'new_item'              => 'Nouveau sujet',
            'view_item'             => 'Voir le sujet',
            'search_items'          => 'Rechercher un sujet',
            'not_found'             => 'Aucun sujet trouvé',
            'not_found_in_trash'    => 'Aucun sujet dans la corbeille',
        ],
        'description'           => 'Tous les sujets du forum',
        'hierarchical'          => true,
        'public'                => true,
        'menu_icon'             => 'dashicons-format-chat',
        'menu_position'         => 5,
        'supports'              => array(
            'title',
            'editor',
            'comments',
            'custom-fields'
        ),

    ] );

    // Documentation
    register_post_type( 'doc', [
        'label'                 => 'Web docs',
        'labels'                => [
            'singular_name'         => 'Web doc',
            'add_new_item'          => 'Ajouter une doc',
            'add_new'               => 'Ajouter une doc',
            'edit_item'             => 'Editer une des docs',
            'new_item'              => 'Nouvelle doc',
            'view_item'             => 'Voir les docs',
            'search_items'          => 'Rechercher une doc',
            'not_found'             => 'Aucune doc trouvée',
            'not_found_in_trash'    => 'Aucune doc dans la corbeille',
        ],
        'description'           => 'Toute la doc',
        'hierarchical'          => true,
        'public'                => true,
        'menu_icon'             => 'dashicons-editor-ul',
        'menu_position'         => 5,
        'supports'              => array(
            'title',
            'editor',
            'excerpt',
            'comments',
            'revisions',
            'custom-fields'
        ),
    ] );

    // External ressources
    register_post_type( 'ressources', [
        'label'                 => 'Ressources',
        'labels'                => [
            'singular_name'         => 'Ressource',
            'add_new_item'          => 'Ajouter une ressource',
            'add_new'               => 'Ajouter une ressource',
            'edit_item'             => 'Editer une des ressources',
            'new_item'              => 'Nouvelle ressource',
            'view_item'             => 'Voir les ressources',
            'search_items'          => 'Rechercher une ressource',
            'not_found'             => 'Aucune ressource trouvée',
            'not_found_in_trash'    => 'Aucune ressource dans la corbeille',
        ],
        'description'           => 'Toutes les ressources',
        'hierarchical'          => true,
        'public'                => true,
        'menu_icon'             => 'dashicons-share',
        'menu_position'         => 5,
        'supports'              => array(
            'title',
            'revisions',
            'custom-fields'
        ),

    ] );
}
add_action( 'init', 'wa_register_post_types' );
