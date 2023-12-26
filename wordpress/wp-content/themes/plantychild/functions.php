<?php

// Balise d'ouverture PHP

// Chargement des scripts dans le thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// Définition de la fonction pour charger les styles
function theme_enqueue_styles() {
    // Chargement du style.css du thème parent Twenty Twenty one
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    // Chargement du style personnalisé avec version basée sur le timestamp
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_directory_uri() . '/css/theme.css',
        array(),
        filemtime(get_stylesheet_directory() . '/css/theme.css')
    );
}

// Fin de la fonction theme_enqueue_styles

function custom_page_background_color() {
    if (is_page('289')) {
        echo '<style>body { background-color: #3b8e46 !important; }</style>';
    }
}
add_action('wp_head', 'custom_page_background_color');