<?php get_header(); ?>

  <div class="row">

    <div class="col s6">

      <?php

        $lastBlog = new WP_Query('type=post&posts_per_page=1');

        if( $lastBlog->have_posts() ):

		      while( $lastBlog->have_posts() ): $lastBlog->the_post();?>

            <?php get_template_part('content',get_post_format()); ?>

		      <?php endwhile;

	      endif;

        wp_reset_postdata();

      ?>

    </div>

    <div class="col s6">

	    <?php

	      if( have_posts() ):

		      while( have_posts() ): the_post();?>

            <?php get_template_part('content',get_post_format()); ?>

		      <?php endwhile;

	      endif;

        //PRINT OTHER 2 POSTS NO EL PRIMERO
        $args = array(
          'type' => 'post',
          'posts_per_page' => 2,
          'offset' => 1,
        );
        $lastBlog = new WP_Query($args);

        if( $lastBlog->have_posts() ):

		      while( $lastBlog->have_posts() ): $lastBlog->the_post();?>

            <?php get_template_part('content',get_post_format()); ?>

		      <?php endwhile;

	      endif;

        wp_reset_postdata();

	    ?>

      <hr>

      <?php
      //IMPRIMIR SOLO ROCKABILLY

      $lastBlog = new WP_Query('type=post&posts_per_page=-1&cat=6');

      if( $lastBlog->have_posts() ):

        while( $lastBlog->have_posts() ): $lastBlog->the_post();?>

          <?php get_template_part('content',get_post_format()); ?>

        <?php endwhile;

      endif;

      wp_reset_postdata();

    ?>

    </div>

  </div>

<?php get_footer(); ?>


<!-- if( is_front_page() ){
  //custom queries
} else {

} -->

<!-- <a href="<?php// echo get_permalink(); ?>">your omg URL</a> -->
