<?php

/*
  Template Name: Pagina con Titulo
*/

get_header(); ?>

	<?php

	if( have_posts() ):

		while( have_posts() ): the_post(); ?>

    <div class="section anaranjadito">
      <div class="container">
      <div class="row">
        <div class="col s12 center">
          <h4>RedLECE es la Primera Red Regional Intergubernamental de Cooperación sobre Educación en Contextos de Encierro</h4>
          <p class="center-align">Surge en el marco del proyecto EUROsociAL-Educación durante el III Foro Educativo Mercosur en Brasil, en noviembre de 2006, financiada por la Comisión Europea y coordinada por el Centro Internacional de Estudios Pedagógicos (CIEP). Este foro se centró en el análisis, intercambio y cooperación técnica entre países latinoamericanos en el ámbito de la educación en contextos de encierro.</p>
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
        <?php the_post_thumbnail(); ?>
      </div>
    </div>

			<?php// the_content(); ?>

      <?php// the_title(); ?>

<!-- =========================================================================== -->
<!-- HARDCODING -->
<!-- =========================================================================== -->

			<div class="section white">
				<div class="container margin">
					<div class="row">
						<div class="col s12">

								<h5 class="center red-text text-accent-4">Arumendis si aut aut eicitassunt quiam apisquam lautae peria inti voloribus moluptatem veriorerovit que cus nonsequ atemporibus. Tem et plistiumquas unt, ut iliscid elique volorio everibusam, sit eumendis si utem. Henis aspidis atiam accus estetus evellant volore volorestibus</h5>
								<div class="container margin">
								<p class="left-align">El nuevo Plan Iberoamericano de Alfabetización y Aprendizaje a lo Largo de la Vida El nuevo Plan Iberoamericano de Alfabetización y Aprendizaje a lo Largo de la VidaHarunt acesequatis dolorat ibusamus que nobit, isci dent ipis porum lam que seque necereprem facculparum qui distotat quas dernam volupiendam que verum qui ommoEqui bero voles suntem id qui il magnis es soluptam et aut andi nem aut facessi molupta culpa volores aut ommodi suscium volorem qui offic tectur ratet, voluptas aute nonseditibus esere coreped quas doloriat recae dicatum aut ea volorer ferumqui ullupta spidero

								El nuevo Plan Iberoamericano de Alfabetización y Aprendizaje a lo Largo de la Vida El nuevo Plan Iberoamericano de Alfabetización y Aprendizaje a lo Largo</p>
								<br><br>
								</div>

						</div>

						<div class="col s3 image">
							<img class="responsive-img" src="v1/images/imagen1.jpg" alt="">
						</div>
						<div class="col s3 image">
							<img class="responsive-img" src="v1/images/imagen2-1.jpg" alt="">
						</div>
						<div class="col s3 image">
							<img class="responsive-img" src="v1/images/imagen3.jpg" alt="">
						</div>
						<div class="col s3 image">
							<img class="responsive-img" src="v1/images/imagen1.jpg" alt="">
						</div>

						<div class="col s12">
								<div class="container margin">
								<br>
								<p class="left-align">El nuevo Plan Iberoamericano de Alfabetización y Aprendizaje a lo Largo de la Vida El nuevo Plan Iberoamericano de Alfabetización y Aprendizaje a lo Largo de la VidaHarunt acesequatis dolorat ibusamus que nobit, isci dent ipis porum lam que seque necereprem facculparum qui distotat quas dernam volupiendam que verum qui ommoEqui bero voles suntem id qui il magnis es soluptam et aut andi nem aut facessi molupta culpa volores aut ommodi suscium volorem qui offic tectur ratet, voluptas aute nonseditibus esere coreped quas doloriat recae dicatum aut ea volorer ferumqui ullupta spidero

								El nuevo Plan Iberoamericano de Alfabetización y Aprendizaje a lo Largo de la Vida El nuevo Plan Iberoamericano de Alfabetización y Aprendizaje a lo Largo</p>
								<br><br>
								</div>
						</div>
<!--
						<div class="col s12">
							<hr>
							<h4 class="red-text text-accent-4 center">ULTIMAS NOTICIAS</h4>
							<br><br>
							<div class="col s12 m6">
								<div class="image-container">
									<img class="responsive-img" src="v1/images/imagen2-1.jpg" alt="">
								</div>
								<h5 class="center red-text text-accent-4">Otro titular que puede tener hasta dos lineas máximo</h5>
								<br><br>
							</div>

						  <div class="col s12 m6">
							  <div class="image-container">
								  <img class="responsive-img" src="v1/images/imagen3.jpg" alt="">
							  </div>
								  <h5 class="center red-text text-accent-4">Otro titular que puede tener hasta dos lineas máximo</h5>
						  </div>
						</div>
-->
					</div>
				</div>
			</div>

<!-- ========================================================================= -->


		<?php endwhile;

	endif;

	?>
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

			  <?php get_template_part('content',get_post_format()); ?>

		<?php endwhile;

	endif;

	wp_reset_postdata();

	?>
	</div>

</div>

</div>

<?php get_footer(); ?>
