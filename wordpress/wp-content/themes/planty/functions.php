<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

function enregistrement_nav_menus() {

    register_nav_menus(
        array(
            'Header' => esc_html( 'Primary', 'planty' ),
            'Footer' => esc_html( 'Secondary', 'planty' ),
        )
    );
}

add_action( 'after_setup_theme', 'enregistrement_nav_menus' );

function display_theme_locations() {
    $theme_locations = get_nav_menu_locations();

    // Afficher les emplacements des menus
    foreach ($theme_locations as $location => $menu_id) {
        echo 'Emplacement : ' . $location . '<br>';
    }
}

// Appeler la fonction pour afficher les emplacements des menus
add_action('wp_footer', 'display_theme_locations');