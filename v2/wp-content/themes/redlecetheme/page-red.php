<?php

/*
  Template Name: Pagina Red
*/

get_header(); ?>

	<?php

	if( have_posts() ):

		while( have_posts() ): the_post(); ?>

    <div class="section anaranjadito">
      <div class="container">
      <div class="row">
        <div class="col s12 center">
          <h4>La Red Latinoamericana de educación en contextos de encierro - RedLECE - se creó en el marco del proyecto EUROsociAL-Educación en el transcurso del III Foro educativo Mercosur en Belo Horizonte (Brasil) del 20 al 24 de noviembre de 2006.</h4>
        </div>
      </div>
      </div>
    </div>

			<?php// the_content(); ?>

      <?php// the_title(); ?>

    <?php endwhile;

  endif;

  ?>

<!-- =========================================================================== -->
<!-- HARDCODING -->
<!-- =========================================================================== -->

<div class="section">

  <div class="row">
    <div class="col s2 offset-s1">
    <table class="bordered highlight">
    <tbody>
      <tr><td>Argentina</td></tr>
      <tr><td>Brasil</td></tr>
      <tr><td>Chile</td></tr>
      <tr><td>Colombia</td></tr>
      <tr><td>Costa Rica</td></tr>
      <tr><td>Cuba</td></tr>
      <tr><td>Ecuador</td></tr>
      <tr><td>El Salvador</td></tr>
      <tr><td>España</td></tr>
      <tr><td>Guatemala</td></tr>
      <tr><td>Honduras</td></tr>
      <tr><td>México</td></tr>
      <tr><td>Nicaragua</td></tr>
      <tr><td>Panamá</td></tr>
      <tr><td>Paraguay</td></tr>
      <tr><td>Perú</td></tr>
      <tr><td>Portugal</td></tr>
      <tr><td>República Dominicana</td></tr>
      <tr><td>Uruguay</td></tr>
    </tbody>
  </table>
  </div>

  <div class="col s7 offset-s1">
    <br><br>
    <hr>
    <h4 class="red-text text-accent-4 left-align">ARGENTINA</h4>
    <br>
    <div class="card anaranjadito">
      <div class="card-image">
        <img src="v1/images/imagen5.jpg">
        <span class="card-title">Ministerio de Educación, Ciencia y Tecnologías de la Nación</span>
      </div>
      <div class="card-action white-text">
        <p>www.me.gov.varbr<br>
          <hr class="white-hr">
          Pizzumo 935.<br>
          (1020) Ciudad Autonoma <br>
          de Buenos Aires <br>
          <hr class="white-hr">
          (54-11) 4129-1000
        </p>
      </div>
    </div>
  </div>
<!--
  <div class="col s7 offset-s4">
    <br><br>
    <hr>
    <h4 class="red-text text-accent-4 left-align">BRASIL</h4>
    <br>
    <div class="card anaranjadito">
      <div class="card-image">
        <img src="v1/images/imagen5.jpg">
        <span class="card-title">Ministerio de Educación, Ciencia y Tecnologías de la Nación</span>
      </div>
      <div class="card-action white-text">
        <p>www.me.gov.varbr<br>
          <hr class="white-hr">
          Pizzumo 935.<br>
          (1020) Ciudad Autonoma <br>
          de Buenos Aires <br>
          <hr class="white-hr">
          (54-11) 4129-1000
        </p>
      </div>
    </div>
  </div>
-->

</div>


</div>

<!-- ========================================================================= -->



<div class="container margin">
  <div class="row">

	  <div class="col s12">
		  <hr>
		  <h4 class="red-text text-accent-4 center">ULTIMAS NOTICIAS</h4>
		  <br><br>
	<?php

	//loop para los ultimos post de cada categoria
	/*$args_cat = array(
		'include' => '1, 5, 6'
	);

	$categories = get_categories($args_cat);
	//var_dump($categories);
	foreach($categories as $category):

	endforeach;*/

	//MOSTRARA SOLO UNA CATEGORIA
	$args = array(
		'type' => 'post',
		'posts_per_page' => 3,
		'category__in' => array( 1 ),
	);

	$lastBlog = new WP_Query( $args );

	if( $lastBlog->have_posts() ):

		while( $lastBlog->have_posts() ): $lastBlog->the_post();?>

			<?php// get_template_part('content','featured'); ?>

			  <?php get_template_part('content','image'); ?>

		<?php endwhile;

	endif;

	wp_reset_postdata();

	?>
	</div>

</div>

</div>

<?php get_footer(); ?>
