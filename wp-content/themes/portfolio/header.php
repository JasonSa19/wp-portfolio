<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
</head>


<body data-aos-easing="easy-out-back" data-aos-delay="0" <?php body_class('antialiased flex flex-col min-h-screen text-slate-900 dark:text-white'); ?>>
	<?php

	wp_body_open();

	// POD Fields
	
	$id = get_the_ID();

	$mail = pods_field('mail', $id);

	$linkedin = pods_field('linkedin', $id);
	$github = pods_field('github', $id);
	$instagram = pods_field('instagram', $id);
	$resume = pods_field('resume', $id);
	?>

	<header id="header" class="header pt-20" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="200">
		<div class="header-inner main-wrapper flex justify-between items-center">
			<div class="mail flex items-center justify-center gap-5">

				<div class="mail-svg-wrap rounded-full w-20 h-20 flex justify-center items-center">
					<svg width="27" height="26">
						<use xlink:href="#mail"></use>
					</svg>
				</div>
				<a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
			</div>

			<div class="socials">
				<a href="<?php echo $linkedin; ?>">LinkedIn</a> / <a href="<?php echo $github; ?>">Github</a> / <a
					href="<?php echo $instagram; ?>">Instagram</a>
			</div>


			<div class="right-side flex gap-24 items-center">
				<div class="resume">
					<a href="<?php echo $resume['guid']; ?>" target="_blank">
						<button class="main-btn rounded-full py-4 px-8 flex justify-center items-center gap-3">
							<svg width=24 height="27">
								<use xlink:href="#pdf"></use>
							</svg>
							<?php echo $resume['post_title']; ?>
						</button>
					</a>
				</div>

				<button id="navbar-toggler" class="navbar-toggler flex flex-col justify-between items-end z-10">
					<span class="top w-5/6 rounded-full"></span>
					<span class="middle w-full rounded-full"></span>
					<span class="bottom w-1/2 rounded-full"></span>
				</button>
			</div>


		</div>

		<div id="main-menu-wrap" class="menu-outer fixed w-full z-0">
			<?php
			wp_nav_menu(
				array(
					'menu' => 'main',
					'menu_class' => 'flex align-center justify-center gap-32 py-20'
				)
			);
			?>
		</div>
	</header>



	<div class="grow">
		<main id="primary" role="main">