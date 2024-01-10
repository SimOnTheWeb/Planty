<?php
// Balise d'ouverture PHP


// Chargement des scripts dans le thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


// Définition de la fonction pour charger les styles
function theme_enqueue_styles() {
    // Chargement du style.css du thème parent Twenty Twenty Four
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    // Chargement du style personnalisé avec version basée sur le timestamp
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/css/theme.css',
        array(),
        filemtime(get_stylesheet_directory() . '/css/theme.css')
    );
}
// Fin de la fonction theme_enqueue_styles

// Ajout du fond d'écran vert pour la page Commander
function custom_page_background_color() {
    if (is_page('289')) {
        echo '<style>body { background-color: #3b8e46 !important; }</style>';
    }
}

//Ajout de l'action pour éxecuter la fonction
add_action('wp_head', 'custom_page_background_color');
// Fin de la fonction custom_page_background_color


// Enregistrement des emplacements de menu
function enregistrement_nav_menus() {
    register_nav_menus(
        array(
            'Header' => __('Header'),
            'Footer' => __('Footer'),
        )
    );
}

//wp_nav_menu

// Ajout de l'action pour enregistrer les emplacements de menu après la configuration du thème
add_action('after_setup_theme', 'enregistrement_nav_menus');


// Fonction pour la page d'acceuil
function menu_admin_page1($items) {

    $target_page_id = 285;

    if (is_user_logged_in() && is_page($target_page_id)) {
        $admin_link = '<li class="header_nav_admin_url"><a href="'. admin_url() .'">Admin</a></li>';
        $position = 252;
        $items = substr_replace($items, $admin_link, $position, 0);
    }

    return $items;
}

function add_admin_link_to_menu($items, $target_page_id, $position) {
    if (is_user_logged_in() && is_page($target_page_id)) {
        $admin_link = '<li class="header_nav_admin_url"><a href="'. admin_url() .'">Admin</a></li>';
        $items = substr_replace($items, $admin_link, $position, 0);
    }

    return $items;
}

// Hook pour différentes pages
add_filter('wp_nav_menu_items', function ($items) {
    return add_admin_link_to_menu($items, 285, 252); // Page d'accueil
}, 10, 1);

add_filter('wp_nav_menu_items', function ($items) {
    return add_admin_link_to_menu($items, 287, 312); // Page Nous rencontrer
}, 10, 1);

add_filter('wp_nav_menu_items', function ($items) {
    return add_admin_link_to_menu($items, 289, 257); // Page Commander
}, 10, 1);


// Balise de fermeture PHP
?>