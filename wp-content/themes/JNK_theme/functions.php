<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

require_once('bs4navwalker.php');
register_nav_menu('primary', 'Primary menu');



function heading_cpt() {
  /* Property */
  $labels = array(
    'name'                => _x('Headings', 'Post Type General Name', 'textdomain'),
    'singular_name'       => _x('Heading', 'Post Type Singular Name', 'textdomain'),
    'menu_name'           => __('Headings', 'textdomain'),
    'name_admin_bar'      => __('Headings', 'textdomain'),
    'parent_item_colon'   => __('Parent Item:', 'textdomain'),
    'all_items'           => __('Tous les headings', 'textdomain'),
    'add_new_item'        => __('Ajouter un nouveau heading', 'textdomain'),
    'add_new'             => __('Ajouter un nouveau heading', 'textdomain'),
    'new_item'            => __('Heading', 'textdomain' ),
    'edit_item'           => __('Editer heading', 'textdomain'),
    'update_item'         => __('Mettre à jour heading', 'textdomain'),
    'view_item'           => __('Voir heading', 'textdomain'),
    'search_items'        => __('Rechercher', 'textdomain'),
    'not_found'           => __('Aucun heading pour le moment', 'textdomain'),
    'not_found_in_trash'  => __('Introuvable dans la corbeille', 'textdomain'),
  );

  $rewrite = array(
    'slug'                => _x('headings', 'headings', 'textdomain'),
    'with_front'          => true,
    'pages'               => true,
    'feeds'               => false,
  );

  $args = array(
    'label'               => __('headings', 'textdomain'),
    'description'         => __('headings', 'textdomain'),
    'labels'              => $labels,
    'supports'            => array('title', 'editor', 'thumbnail'),
    'hierarchical'        => false,
    'taxonomies'          => array('category', 'post_tag'),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-home',
    'show_in_admin_bar'   => true,
    'show_in_rest'        => true, // Important !
    'show_in_nav_menus'   => true,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'query_var'           => 'headings',
    'rewrite'             => $rewrite,
    'capability_type'     => 'page',
  );
  register_post_type('headings', $args);
}

add_action('init', 'heading_cpt');

function about_cpt() {
  /* Property */
  $labels = array(
    'name'                => _x('abouts', 'Post Type General Name', 'textdomain'),
    'singular_name'       => _x('about', 'Post Type Singular Name', 'textdomain'),
    'menu_name'           => __('abouts', 'textdomain'),
    'name_admin_bar'      => __('abouts', 'textdomain'),
    'parent_item_colon'   => __('Parent Item:', 'textdomain'),
    'all_items'           => __('Tous les abouts', 'textdomain'),
    'add_new_item'        => __('Ajouter un nouveau about', 'textdomain'),
    'add_new'             => __('Ajouter un nouveau about', 'textdomain'),
    'new_item'            => __('Heading', 'textdomain' ),
    'edit_item'           => __('Editer about', 'textdomain'),
    'update_item'         => __('Mettre à jour about', 'textdomain'),
    'view_item'           => __('Voir about', 'textdomain'),
    'search_items'        => __('Rechercher', 'textdomain'),
    'not_found'           => __('Aucun about pour le moment', 'textdomain'),
    'not_found_in_trash'  => __('Introuvable dans la corbeille', 'textdomain'),
  );

  $rewrite = array(
    'slug'                => _x('abouts', 'abouts', 'textdomain'),
    'with_front'          => true,
    'pages'               => true,
    'feeds'               => false,
  );

  $args = array(
    'label'               => __('abouts', 'textdomain'),
    'description'         => __('abouts', 'textdomain'),
    'labels'              => $labels,
    'supports'            => array('title', 'editor', 'thumbnail'),
    'hierarchical'        => false,
    'taxonomies'          => array('category', 'post_tag'),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-home',
    'show_in_admin_bar'   => true,
    'show_in_rest'        => true, // Important !
    'show_in_nav_menus'   => true,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'query_var'           => 'abouts',
    'rewrite'             => $rewrite,
    'capability_type'     => 'page',
  );
  register_post_type('abouts', $args);
}

add_action('init', 'about_cpt');

function projects_cpt() {
  /* Property */
  $labels = array(
    'name'                => _x('projects', 'Post Type General Name', 'textdomain'),
    'singular_name'       => _x('project', 'Post Type Singular Name', 'textdomain'),
    'menu_name'           => __('projects', 'textdomain'),
    'name_admin_bar'      => __('projects', 'textdomain'),
    'parent_item_colon'   => __('Parent Item:', 'textdomain'),
    'all_items'           => __('Tous les projects', 'textdomain'),
    'add_new_item'        => __('Ajouter un nouveau project', 'textdomain'),
    'add_new'             => __('Ajouter un nouveau project', 'textdomain'),
    'new_item'            => __('project', 'textdomain' ),
    'edit_item'           => __('Editer project', 'textdomain'),
    'update_item'         => __('Mettre à jour project', 'textdomain'),
    'view_item'           => __('Voir project', 'textdomain'),
    'search_items'        => __('Rechercher', 'textdomain'),
    'not_found'           => __('Aucun project pour le moment', 'textdomain'),
    'not_found_in_trash'  => __('Introuvable dans la corbeille', 'textdomain'),
  );

  $rewrite = array(
    'slug'                => _x('projects', 'projects', 'textdomain'),
    'with_front'          => true,
    'pages'               => true,
    'feeds'               => false,
  );

  $args = array(
    'label'               => __('projects', 'textdomain'),
    'description'         => __('projects', 'textdomain'),
    'labels'              => $labels,
    'supports'            => array('title', 'editor', 'thumbnail'),
    'hierarchical'        => false,
    'taxonomies'          => array('category', 'post_tag'),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-home',
    'show_in_admin_bar'   => true,
    'show_in_rest'        => true, // Important !
    'show_in_nav_menus'   => true,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'query_var'           => 'projects',
    'rewrite'             => $rewrite,
    'capability_type'     => 'page',
  );
  register_post_type('projects', $args);
}

add_action('init', 'projects_cpt');


function footer_cpt() {
  /* Property */
  $labels = array(
    'name'                => _x('footers', 'Post Type General Name', 'textdomain'),
    'singular_name'       => _x('footer', 'Post Type Singular Name', 'textdomain'),
    'menu_name'           => __('footers', 'textdomain'),
    'name_admin_bar'      => __('footers', 'textdomain'),
    'parent_item_colon'   => __('Parent Item:', 'textdomain'),
    'all_items'           => __('Tous les footers', 'textdomain'),
    'add_new_item'        => __('Ajouter un nouveau footer', 'textdomain'),
    'add_new'             => __('Ajouter un nouveau footer', 'textdomain'),
    'new_item'            => __('footer', 'textdomain' ),
    'edit_item'           => __('Editer footer', 'textdomain'),
    'update_item'         => __('Mettre à jour footer', 'textdomain'),
    'view_item'           => __('Voir footer', 'textdomain'),
    'search_items'        => __('Rechercher', 'textdomain'),
    'not_found'           => __('Aucun footer pour le moment', 'textdomain'),
    'not_found_in_trash'  => __('Introuvable dans la corbeille', 'textdomain'),
  );

  $rewrite = array(
    'slug'                => _x('footers', 'footers', 'textdomain'),
    'with_front'          => true,
    'pages'               => true,
    'feeds'               => false,
  );

  $args = array(
    'label'               => __('footers', 'textdomain'),
    'description'         => __('footers', 'textdomain'),
    'labels'              => $labels,
    'supports'            => array('title', 'editor', 'thumbnail'),
    'hierarchical'        => false,
    'taxonomies'          => array('category', 'post_tag'),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-home',
    'show_in_admin_bar'   => true,
    'show_in_rest'        => true, // Important !
    'show_in_nav_menus'   => true,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'query_var'           => 'footers',
    'rewrite'             => $rewrite,
    'capability_type'     => 'page',
  );
  register_post_type('footers', $args);
}

add_action('init', 'footer_cpt');


function project_heading_cpt() {
  /* Property */
  $labels = array(
    'name'                => _x('project_headings', 'Post Type General Name', 'textdomain'),
    'singular_name'       => _x('project_heading', 'Post Type Singular Name', 'textdomain'),
    'menu_name'           => __('Project heading', 'textdomain'),
    'name_admin_bar'      => __('Project heading', 'textdomain'),
    'parent_item_colon'   => __('Parent Item:', 'textdomain'),
    'all_items'           => __('Tous les project_headings', 'textdomain'),
    'add_new_item'        => __('Ajouter un nouveau Project heading', 'textdomain'),
    'add_new'             => __('Ajouter un nouveau Project heading', 'textdomain'),
    'new_item'            => __('Project heading', 'textdomain' ),
    'edit_item'           => __('Editer Project heading', 'textdomain'),
    'update_item'         => __('Mettre à jour Project heading', 'textdomain'),
    'view_item'           => __('Voir Project heading', 'textdomain'),
    'search_items'        => __('Rechercher', 'textdomain'),
    'not_found'           => __('Aucun Project heading pour le moment', 'textdomain'),
    'not_found_in_trash'  => __('Introuvable dans la corbeille', 'textdomain'),
  );

  $rewrite = array(
    'slug'                => _x('project_headings', 'project_headings', 'textdomain'),
    'with_front'          => true,
    'pages'               => true,
    'feeds'               => false,
  );

  $args = array(
    'label'               => __('project_headings', 'textdomain'),
    'description'         => __('project_headings', 'textdomain'),
    'labels'              => $labels,
    'supports'            => array('title', 'editor', 'thumbnail'),
    'hierarchical'        => false,
    'taxonomies'          => array('category', 'post_tag'),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-home',
    'show_in_admin_bar'   => true,
    'show_in_rest'        => true, // Important !
    'show_in_nav_menus'   => true,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'query_var'           => 'project_headings',
    'rewrite'             => $rewrite,
    'capability_type'     => 'page',
  );
  register_post_type('project_headings', $args);
}

add_action('init', 'project_heading_cpt');


function project_description_cpt() {
  /* Property */
  $labels = array(
    'name'                => _x('project_descriptions', 'Post Type General Name', 'textdomain'),
    'singular_name'       => _x('project_description', 'Post Type Singular Name', 'textdomain'),
    'menu_name'           => __('Project description', 'textdomain'),
    'name_admin_bar'      => __('project_descriptions', 'textdomain'),
    'parent_item_colon'   => __('Parent Item:', 'textdomain'),
    'all_items'           => __('Tous les project_descriptions', 'textdomain'),
    'add_new_item'        => __('Ajouter un nouveau project_description', 'textdomain'),
    'add_new'             => __('Ajouter un nouveau project_description', 'textdomain'),
    'new_item'            => __('Project description', 'textdomain' ),
    'edit_item'           => __('Editer Project description', 'textdomain'),
    'update_item'         => __('Mettre à jour Project description', 'textdomain'),
    'view_item'           => __('Voir Project descriptionn', 'textdomain'),
    'search_items'        => __('Rechercher', 'textdomain'),
    'not_found'           => __('Aucun Project description pour le moment', 'textdomain'),
    'not_found_in_trash'  => __('Introuvable dans la corbeille', 'textdomain'),
  );

  $rewrite = array(
    'slug'                => _x('project_descriptions', 'project_descriptions', 'textdomain'),
    'with_front'          => true,
    'pages'               => true,
    'feeds'               => false,
  );

  $args = array(
    'label'               => __('project_descriptions', 'textdomain'),
    'description'         => __('project_descriptions', 'textdomain'),
    'labels'              => $labels,
    'supports'            => array('title', 'editor', 'thumbnail'),
    'hierarchical'        => false,
    'taxonomies'          => array('category', 'post_tag'),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-home',
    'show_in_admin_bar'   => true,
    'show_in_rest'        => true, // Important !
    'show_in_nav_menus'   => true,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'query_var'           => 'project_descriptions',
    'rewrite'             => $rewrite,
    'capability_type'     => 'page',
  );
  register_post_type('project_descriptions', $args);
}

add_action('init', 'project_description_cpt');

function project_quote_cpt() {
  /* Property */
  $labels = array(
    'name'                => _x('project_quotes', 'Post Type General Name', 'textdomain'),
    'singular_name'       => _x('project_quote', 'Post Type Singular Name', 'textdomain'),
    'menu_name'           => __('Project quote', 'textdomain'),
    'name_admin_bar'      => __('project_quotes', 'textdomain'),
    'parent_item_colon'   => __('Parent Item:', 'textdomain'),
    'all_items'           => __('Tous les project_quotes', 'textdomain'),
    'add_new_item'        => __('Ajouter un nouveau project_quote', 'textdomain'),
    'add_new'             => __('Ajouter un nouveau project_quote', 'textdomain'),
    'new_item'            => __('Project quote', 'textdomain' ),
    'edit_item'           => __('Editer Project quote', 'textdomain'),
    'update_item'         => __('Mettre à jour Project quote', 'textdomain'),
    'view_item'           => __('Voir Project quoten', 'textdomain'),
    'search_items'        => __('Rechercher', 'textdomain'),
    'not_found'           => __('Aucun Project quote pour le moment', 'textdomain'),
    'not_found_in_trash'  => __('Introuvable dans la corbeille', 'textdomain'),
  );

  $rewrite = array(
    'slug'                => _x('project_quotes', 'project_quotes', 'textdomain'),
    'with_front'          => true,
    'pages'               => true,
    'feeds'               => false,
  );

  $args = array(
    'label'               => __('project_quotes', 'textdomain'),
    'description'         => __('project_quotes', 'textdomain'),
    'labels'              => $labels,
    'supports'            => array('title', 'editor', 'thumbnail'),
    'hierarchical'        => false,
    'taxonomies'          => array('category', 'post_tag'),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-home',
    'show_in_admin_bar'   => true,
    'show_in_rest'        => true, // Important !
    'show_in_nav_menus'   => true,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'query_var'           => 'project_quotes',
    'rewrite'             => $rewrite,
    'capability_type'     => 'page',
  );
  register_post_type('project_quotes', $args);
}

add_action('init', 'project_quote_cpt');

function project_card_cpt() {
  /* Property */
  $labels = array(
    'name'                => _x('project_cards', 'Post Type General Name', 'textdomain'),
    'singular_name'       => _x('project_card', 'Post Type Singular Name', 'textdomain'),
    'menu_name'           => __('Project card', 'textdomain'),
    'name_admin_bar'      => __('project_cards', 'textdomain'),
    'parent_item_colon'   => __('Parent Item:', 'textdomain'),
    'all_items'           => __('Tous les project cards', 'textdomain'),
    'add_new_item'        => __('Ajouter un nouveau project card', 'textdomain'),
    'add_new'             => __('Ajouter un nouveau project card', 'textdomain'),
    'new_item'            => __('Project card', 'textdomain' ),
    'edit_item'           => __('Editer Project card', 'textdomain'),
    'update_item'         => __('Mettre à jour Project card', 'textdomain'),
    'view_item'           => __('Voir Project card', 'textdomain'),
    'search_items'        => __('Rechercher', 'textdomain'),
    'not_found'           => __('Aucune Project card pour le moment', 'textdomain'),
    'not_found_in_trash'  => __('Introuvable dans la corbeille', 'textdomain'),
  );

  $rewrite = array(
    'slug'                => _x('project_cards', 'project_cards', 'textdomain'),
    'with_front'          => true,
    'pages'               => true,
    'feeds'               => false,
  );

  $args = array(
    'label'               => __('project_cards', 'textdomain'),
    'description'         => __('project_cards', 'textdomain'),
    'labels'              => $labels,
    'supports'            => array('title', 'editor', 'thumbnail'),
    'hierarchical'        => false,
    'taxonomies'          => array('category', 'post_tag'),
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-home',
    'show_in_admin_bar'   => true,
    'show_in_rest'        => true, // Important !
    'show_in_nav_menus'   => true,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'query_var'           => 'project_cards',
    'rewrite'             => $rewrite,
    'capability_type'     => 'page',
  );
  register_post_type('project_cards', $args);
}

add_action('init', 'project_card_cpt');



remove_filter('the_content','wpautop');


?>
