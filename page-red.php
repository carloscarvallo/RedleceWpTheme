<?php

/*
  Template Name: Pagina Red
*/

get_header(); ?>

	<?php

	if( have_posts() ):

		while( have_posts() ): the_post(); ?>

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
	  <!-- COLUMNA 1 -->
		<div class="col l2 m12 s12">
			<br>
			<?php
			$args = array(
				'post_type' => 'pais',
				'category__in' => array( 7 ),
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
  <!-- COLUMNA 2 -->
  <div class="col l7 m12 s12">
    <?php

  	$args = array(
  		'post_type' => 'pais',
  		'category__in' => array( 7 ),
		'order'   => 'ASC'
  	);

  	$lastBlog = new WP_Query( $args );

  	if( $lastBlog->have_posts() ):

  		while( $lastBlog->have_posts() ): $lastBlog->the_post();?>

  			  <?php get_template_part('content','card'); ?>

  		<?php endwhile;

  	endif;

  	wp_reset_postdata();

  	?>
  </div>
</div>


</div>

<?php get_template_part('content','resume'); ?>

<?php get_footer(); ?>
