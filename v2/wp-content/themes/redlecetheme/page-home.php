<?php

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

    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <br><br>
          <br><br>
        </div>
      </div>
      <div class="parallax">
        <?php the_post_thumbnail('full'); ?>
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
				'post__in' => array(13,20)
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

			<div class="section white">
				<div class="container margin">
					<div class="row">




	  <div class="col s12">

		  <h4 class="red-text text-accent-4 center">ULTIMAS NOTICIAS</h4>
		  <br><br>
      <?php

      $args = array(
        'type' => 'post',
        'posts_per_page' => 6
      );

      $otherPost = new WP_Query( $args );

      if( $otherPost->have_posts() ):

        while( $otherPost->have_posts() ): $otherPost->the_post();?>

        <?php get_template_part('content','noticias'); ?>

      <?php endwhile;

    endif;

    ?>
	</div>

</div>

</div>

</div>



<?php get_footer(); ?>
