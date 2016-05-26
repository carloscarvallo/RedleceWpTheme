<br><br>
<hr>
<?php the_title(sprintf('<h4 class="red-text text-accent-4 left-align"><a href="%s">', esc_url( get_permalink() ) ), '</a></h5>'); ?>
<br>
<div class="card large anaranjadito">
  <div class="card-image">

    <?php if( has_post_thumbnail() ): ?>
      <a href="<?php the_permalink(); ?>">
        <?php
        the_post_thumbnail('full'); ?>
    <?php endif; ?></a>

  </div>
  <div class="card-action white-text">
    <p><?php the_field( 'titulo' ); ?><br>
      <hr class="white-hr">
      Editado por: <?php the_field( 'editado_por' ); ?><br>
      <!-- (1020) Ciudad Autonoma <br> -->
      <!-- de Buenos Aires <br> -->
      <!-- <hr class="white-hr"> -->
      <!-- A&ntilde;o: <?php the_field( 'anho' ); ?> -->
    </p>
  </div>
</div>
