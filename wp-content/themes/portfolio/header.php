<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head(); ?>
</head>

<body <?php body_class( 'antialiased flex flex-col min-h-screen' ); ?>>
<?php wp_body_open(); ?>

<header class="header">
<?php /*
    wp_nav_menu( 
        array( 
            'menu' => 'main'
        ) 
    ); 
*/ ?>
</header>

<div class="lg:flex grow">
	<main id="primary" class="grow p-8" role="main">
