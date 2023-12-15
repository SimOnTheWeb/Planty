<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<header class="site-header">
	<div class="logo">
		<img src=".../images/logo.png" alt="Logo Planty">
	</div>
        <nav id="nav" class="site-navigation" role="navigation">
            <div class="navigation">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'Header',
                        'container'      => 'false',
                        'menu_class'     => 'cssNav',
                    )
                );
                ?>
            </div>
        </nav>
    </header>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>