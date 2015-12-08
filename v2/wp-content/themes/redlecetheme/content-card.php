<!-- <h4 class="red-text text-accent-4 left-align">ARGENTINA</h4> -->
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
    <?php endif; ?>

    <span class="card-title"><?php the_field( 'institucion' ); ?></span></a>
  </div>
  <div class="card-action white-text">
    <p><?php the_field( 'sitio_web' ); ?><br>
      <hr class="white-hr">
      <?php the_field( 'direccion' ); ?><br>
      <!-- (1020) Ciudad Autonoma <br> -->
      <!-- de Buenos Aires <br> -->
      <hr class="white-hr">
      <?php the_field( 'numero_de_contacto' ); ?>
    </p>
  </div>
</div>
