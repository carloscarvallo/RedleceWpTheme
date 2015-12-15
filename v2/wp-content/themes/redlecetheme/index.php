<?php get_header(); ?>
<div class="section white">
	<div class="container margin">
		<div class="row">
			<div class="col s12">

				<?php

					$args = array(
						'type' => 'post',
						'posts_per_page' => 1,
					);

					$lastBlog = new WP_Query( $args );

					if( $lastBlog->have_posts() ):

						while( $lastBlog->have_posts() ): $lastBlog->the_post();?>

							<?php get_template_part('content','featured'); ?>

						<?php endwhile;

					endif;

					wp_reset_postdata();

				?>

				<?php

				$args = array(
					'type' => 'post',
					'offset' => 1,
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

<?php get_footer(); ?>
