<div class="col s12 m6">
  <div class="image-container">

  <?php if( has_post_thumbnail() ): ?>
    <a href="<?php the_permalink(); ?>">
    <!-- <img class="responsive-img" src="" alt=""> -->
      <?php

      $img_attr = array('class' => 'responsive-img');

      the_post_thumbnail('full', $img_attr); ?>

  <?php endif; ?>
  </div>
  <br>
  <!-- <h5 class="center red-text text-accent-4"> -->
    <?php the_title(sprintf('<h5 class="center red-text text-accent-4"><a href="%s">', esc_url( get_permalink() ) ), '</a></h5>'); ?>
  <!-- </h5> -->
  <br>
  <p class="dotted"></p>
  <br>
</div>