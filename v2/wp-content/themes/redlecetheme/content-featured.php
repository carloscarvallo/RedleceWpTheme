<div class="col s12">
  <div class="image-container titular">

  <?php if( has_post_thumbnail() ): ?>
    <a href="<?php the_permalink(); ?>">
      <?php

      $img_attr = array('class' => 'responsive-img thumb-titular');

      the_post_thumbnail('full', $img_attr); ?>

  <?php endif; ?>
  </div>
  <br>
    <?php the_title(sprintf('<h2 class="red-text text-accent-4 center header-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>'); ?>
  <hr>
  <br><br>
</div>
