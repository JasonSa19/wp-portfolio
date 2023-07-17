<?php if ( have_posts() ) : ?>

	<ul>

		<?php while ( have_posts() ) : the_post(); ?>

			
				<?php the_content(); ?>
		

		<?php endwhile; ?>

	</ul>

<?php endif;
