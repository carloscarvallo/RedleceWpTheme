<!--
<div class="col s12 m6">

    <h5 class="center red-text text-accent-4">Miembros de la Red</h5>
    <p class="dotted"></p>
    <p class="center-align red-text text-accent-4">REDLECE Está compuesta por 50 instituciones de 20 países latinomericanosque están comprometidos con la educación</p>
    <br><br>
    <p class="dotted center"><span class="red accent-4"><a class="white-text" href="paises.html">VER TODOS</a></span></p>

</div>
-->

<div class="col s12 m6">

  <?php the_title(sprintf('<h5 class="center red-text text-accent-4 uppercase-text"><a href="%s">', esc_url( get_permalink() ) ), '</a></h5>'); ?>
  <p class="dotted"></p>

    <?php the_excerpt(); ?>
  <br>
  <p class="dotted center"><span class="red accent-4"><a class="white-text" href="<?php the_permalink(); ?>">VER TODOS</a></span></p>

</div>
