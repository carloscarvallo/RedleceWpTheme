<?php get_header(); ?>
<h1>soy un documento</h1>
	<?php

	if( have_posts() ):

		while( have_posts() ): the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php the_title( '<h1 class="custom-class">','</h1>' ); ?>

        <?php if( has_post_thumbnail() ): ?>

          <div class="pull-right"><?php the_post_thumbnail('full'); ?></div>

        <?php endif; ?>

        <small><?php the_category(); ?></small>


        <?php the_content(); ?>

      </article>

			<hr>

		<?php endwhile;

	endif;

	?>

<?php get_footer(); ?>
