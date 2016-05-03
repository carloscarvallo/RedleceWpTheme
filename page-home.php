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

<?php get_template_part('content','resume'); ?>

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
