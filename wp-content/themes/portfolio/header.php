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

	<header id="header" class="header pt-12 lg:pt-20" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="200">
		<div
			class="header-inner main-wrapper flex flex-col-reverse lg:flex-row flex-wrap lg:flex-nowrap justify-between items-start lg:items-center">

			<?php if (!empty($mail)) { ?>
				<div class="mail hidden lg:flex items-center justify-center gap-5">
					<div class="mail-svg-wrap rounded-full w-20 h-20 flex justify-center items-center">
						<svg width="27" height="26">
							<use xlink:href="#mail"></use>
						</svg>
					</div>
					<a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
				</div>
			<?php } ?>

			<div class="socials hidden lg:block">
				<?php if (!empty($linkedin)) { ?><a target="_blank" href="<?php echo $linkedin; ?>">LinkedIn</a>
				<?php } ?> /
				<?php if (!empty($linkedin)) { ?><a target="_blank" href="<?php echo $github; ?>">Github</a>
				<?php } ?> /
				<?php if (!empty($linkedin)) { ?><a target="_blank" href="<?php echo $instagram; ?>">Instagram</a>
				<?php } ?>
			</div>


			<div class="right-side flex lg:gap-24 items-center w-full lg:w-auto justify-end">
				<div class="mobile-socials flex lg:hidden items-center gap-6 mr-auto">
					<div class="svg-wrap mail-svg-wrap rounded-full w-20 h-20 flex justify-center items-center">
						<svg class="fill-white" width="27" height="26">
							<use xlink:href="#mail"></use>
						</svg>
					</div>
					<?php if (!empty($linkedin)) { ?>
						<div class="svg-wrap">
							<a target="_blank" href="<?php echo $linkedin; ?>">
								<svg class="fill-white" width=30 height=30>
									<use xlink:href="#linkedin"></use>
								</svg>
							</a>
						</div>
					<?php } ?>
					<?php if (!empty($github)) { ?>
						<div class="svg-wrap">
							<a target="_blank" href="<?php echo $github; ?>">
								<svg class="fill-white" width=30 height=30>
									<use xlink:href="#github"></use>
								</svg>
							</a>
						</div>
					<?php } ?>
					<?php if (!empty($instagram)) { ?>
						<div class="svg-wrap">
							<a target="_blank" href="<?php echo $instagram; ?>">
								<svg class="fill-white" width=30 height=30>
									<use xlink:href="#instagram"></use>
								</svg>
							</a>
						</div>
					<?php } ?>
				</div>
				<?php if (!empty($resume)) { ?>
					<div class="resume hidden lg:block">
						<a href="<?php echo $resume['guid']; ?>" target="_blank">
							<button class="mr-12 lg:mr-0 main-btn rounded-full py-4 px-8 flex justify-center items-center gap-3">
								<svg width=24 height="27">
									<use xlink:href="#pdf"></use>
								</svg>
								<?php echo $resume['post_title']; ?>
							</button>
						</a>
					</div>
				<?php } ?>

				<button id="navbar-toggler" class="navbar-toggler flex flex-col justify-between items-end z-10">
					<span class="top w-5/6 rounded-full"></span>
					<span class="middle w-full rounded-full"></span>
					<span class="bottom w-1/2 rounded-full"></span>
				</button>
			</div>


		</div>

		<div id="main-menu-wrap" class="menu-outer fixed w-full z-1 relative">
			<?php
			wp_nav_menu(
				array(
					'menu' => 'main',
					'menu_class' => 'flex flex-col lg:flex-row align-center justify-center gap-32 py-20 pl-12 lg:pl-0'
				)
			);
			?>
			<?php if (!empty($resume)) { ?>
				<div class="resume block lg:hidden">
					<a href="<?php echo $resume['guid']; ?>" target="_blank">
						<button class="mr-12 lg:mr-0 main-btn rounded-full py-4 px-8 flex justify-center items-center gap-3">
							<svg width=24 height="27">
								<use xlink:href="#pdf"></use>
							</svg>
							<?php echo $resume['post_title']; ?>
						</button>
					</a>
				</div>
			<?php } ?>
		</div>
	</header>



	<div class="grow">
		<main id="primary" role="main">