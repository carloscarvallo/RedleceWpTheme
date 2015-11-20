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
      <div class="parallax"><img src="v1/images/img15.jpg" alt="Unsplashed background img 1"></div>
    </div>

			<?php// the_content(); ?>

      <?php// the_title(); ?>


		<?php endwhile;

	endif;

	?>

<?php get_footer(); ?>
