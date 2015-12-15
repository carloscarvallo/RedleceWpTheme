<?php get_header(); ?>

  <?php
  // 10 id de la pagina pagina Red
  $args = array(
    'post_type' => 'page',
    'posts_per_page' => 1,
    'post__in' => array(10)
  );

  $lastBlog = new WP_Query( $args );

  if( $lastBlog->have_posts() ):

    while( $lastBlog->have_posts() ): $lastBlog->the_post();?>

    <div class="section anaranjadito">
      <div class="container">
      <div class="row">
        <div class="col s12 center">
          <h4><?php the_field( 'heading' ); ?></h4>
        </div>
      </div>
      </div>
    </div>

    <?php endwhile;

  endif;

  wp_reset_postdata();

  ?>

<div class="section">

  <div class="row">
    <div class="col s2 offset-s1 hide-on-med-and-down">
			<br>
			<!-- 8 id de categoria documento -->
			<?php
			$args = array(
				'post_type' => 'documento',
				'category__in' => array( 8 ),
        'orderby' => 'title',
        'order' => 'ASC'
			);
			$my_query = new WP_Query($args);

		  while ($my_query->have_posts()) : $my_query->the_post(); ?>

				<table class="bordered highlight">
					<tbody>
						<tr><td>
							<a href="<?php the_permalink() ?>">
								<?php the_title(); ?></a>
						</td></tr>
					</tbody>
				</table>

				<?php endwhile;
				wp_reset_postdata();
				?>
		</div>

    <div class="col s12 l7">
    <?php

  	if( have_posts() ):

  		while( have_posts() ): the_post(); ?>

  			  <?php get_template_part('content','doc'); ?>

  		<?php endwhile;

  	endif;

  	?>
    </div>

	  <div class="col s12 l7 offset-l3">

		<?php

		if( have_posts() ):
			while( have_posts() ): the_post(); ?>
			<?php the_content(); ?>
		  <?php endwhile;
	  endif;
	  ?>

    </div>
  </div>
</div>


<div class="section cremita">
	<div class="container margin">
		<div class="row">
			<!-- 10 id pagina red, 14 id pagina documentos -->
			<?php

			$args = array(
				'post_type' => 'page',
				'posts_per_page' => 2,
				'post__in' => array(10,14)
			);

			$lastBlog = new WP_Query( $args );

			if( $lastBlog->have_posts() ):

				while( $lastBlog->have_posts() ): $lastBlog->the_post();?>

					  <?php get_template_part('content','extracto'); ?>

				<?php endwhile;

			endif;

			wp_reset_postdata();

			?>

		</div>
	</div>
</div>

<?php get_footer(); ?>
