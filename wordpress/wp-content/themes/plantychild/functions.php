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

// Hook pour la page d'accueil
add_filter('wp_nav_menu_items', 'menu_admin_page1', 10, 1);


// Fonction pour la page Nous rencontrer
function menu_admin_page2($items) {
    $target_page_id = 287;

    if (is_user_logged_in() && is_page($target_page_id)) {
        $admin_link = '<li class="header_nav_admin_url"><a href="'. admin_url() .'">Admin</a></li>';
        $position = 312;
        $items = substr_replace($items, $admin_link, $position, 0);
    }

    return $items;
}

// Hook pour la page Nous rencontrer
add_filter('wp_nav_menu_items', 'menu_admin_page2', 10, 1);


// Fonction pour la page Commander
function menu_admin_page3($items) {
    $target_page_id = 289;

    if (is_user_logged_in() && is_page($target_page_id)) {
        $admin_link = '<li class="header_nav_admin_url"><a href="'. admin_url() .'">Admin</a></li>';
        $position = 257;
        $items = substr_replace($items, $admin_link, $position, 0);
    }

    return $items;
}

// Hook pour la page Commander
add_filter('wp_nav_menu_items', 'menu_admin_page3', 10, 1);


// Balise de fermeture PHP
?>