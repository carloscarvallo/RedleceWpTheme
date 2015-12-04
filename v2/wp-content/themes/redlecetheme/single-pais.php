<?php get_header(); ?>

  <?php

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

<!-- =========================================================================== -->
<!-- HARDCODING -->
<!-- =========================================================================== -->

<div class="section">

  <div class="row">
    <div class="col s2 offset-s1">
		<br>
    <table class="bordered highlight">
    <tbody>
      <tr><td>Argentina</td></tr>
      <tr><td>Brasil</td></tr>
      <tr><td>Chile</td></tr>
      <tr><td>Colombia</td></tr>
      <tr><td>Costa Rica</td></tr>
      <tr><td>Cuba</td></tr>
      <tr><td>Ecuador</td></tr>
      <tr><td>El Salvador</td></tr>
      <tr><td>España</td></tr>
      <tr><td>Guatemala</td></tr>
      <tr><td>Honduras</td></tr>
      <tr><td>México</td></tr>
      <tr><td>Nicaragua</td></tr>
      <tr><td>Panamá</td></tr>
      <tr><td>Paraguay</td></tr>
      <tr><td>Perú</td></tr>
      <tr><td>Portugal</td></tr>
      <tr><td>República Dominicana</td></tr>
      <tr><td>Uruguay</td></tr>
    </tbody>
  </table>
  </div>

  <div class="col s7 offset-s1">
    <?php

  	if( have_posts() ):

  		while( have_posts() ): the_post(); ?>

  			  <?php get_template_part('content','card'); ?>

  		<?php endwhile;

  	endif;

  	?>



  </div>


<?php

if( have_posts() ):

  while( have_posts() ): the_post(); ?>

<div class="col s7 offset-s4">

            <?php the_content(); ?>

          </div>
        </div>
      </div>

  <?php endwhile;

endif;

?>


<div class="section cremita">
	<div class="container margin">
		<div class="row">

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