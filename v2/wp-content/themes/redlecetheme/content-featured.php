<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if( has_post_thumbnail() ): ?>

    <div class="thumbnail"> <?php the_post_thumbnail('thumbnail'); ?> </div>

  <?php endif; ?>

  <?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>'); ?>

  <small><?php the_category(); ?></small>

</article>
<hr>
