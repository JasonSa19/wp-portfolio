<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head(); ?>
</head>

<body <?php body_class( 'antialiased flex flex-col min-h-screen text-slate-900 dark:text-white' ); ?>>
<?php

wp_body_open();

// POD Fields

$id 	= get_the_ID();

$mail	= get_field('mail', $id);

$linkedin		= get_field('linkedin', $id);
$github		  = get_field('github', $id);
$instagram	= get_field('instagram', $id);
$resume		 	= get_field('resume', $id);
?>

<header class="header main-wrapper pt-20">
	<div class="header-inner flex justify-between items-center">
		<div class="mail flex items-center justify-center gap-5">

			<div class="mail-svg-wrap rounded-full w-20 h-20 flex justify-center items-center">
				<svg width=27 height=18 >
					<use xlink:href="#mail"></use>
				</svg>
			</div>
			<a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
		</div>

		<div class="socials">
			<a href="<?php echo $linkedin; ?>">LinkedIn</a> / <a href="<?php echo $github; ?>">Github</a> / <a href="<?php echo $instagram; ?>">Instagram</a> 
		</div>

		<div class="resume">
			<a href="<?php echo $resume['guid']; ?>" target="_blank">
				<button class="main-btn rounded-full py-4 px-8 flex justify-center items-center gap-3">
					<svg width=24 height="27" >
						<use xlink:href="#pdf"></use>
					</svg>
					<?php echo $resume['post_title']; ?>
				</button>
			</a>
		</div>

	</div>
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
