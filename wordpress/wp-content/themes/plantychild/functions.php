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
            'Header' => esc_html('Header', 'planty'),
            'Footer' => esc_html('Footer', 'planty'),
        )
    );
}

// Ajout de l'action pour enregistrer les emplacements de menu après la configuration du thème
add_action('after_setup_theme', 'enregistrement_nav_menus');


// Fonction pour ajouter le lien admin
function menu_admin($menu_items, $args) {
    if ($args->theme_location == 'Header') {
        if (is_user_logged_in()) {
            $menu_items .= '<li><a href="http://localhost/Planty/wordpress/boisson-energisante-100-naturelle/admin/">'. __("Admin") .'</a></li>';
        }
    }
    return $menu_items;
}

// Hook pour le lien admin dans le header
add_filter('wp_nav_menu_items', 'menu_admin', 10, 2);


// Balise de fermeture PHP
?>