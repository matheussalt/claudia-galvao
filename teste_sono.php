<?php
/**
 * Template Name: teste do sono
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="teste">
  <div class="container">
    <div class="teste-title">
      <img src="<?=get_template_directory_URI()?>/img/src/teste.svg" alt="Teste do sono" />

      <h2>Teste do sono</h2>
    </div>

    <? echo do_shortcode('[contact-form-7 id="36" title="Teste do sono"]'); ?>
  </div>
</section>

<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  if (event.detail.inputs[0].value === "Sinto muito sono durante o dia") {
    window.location.href = `${baseURL}/voce-tem-sonolencia-diurna/`;
  }
  
  if (event.detail.inputs[0].value === "Ronco a noite e às vezes engasgo durante o sono") {
    window.location.href = `${baseURL}/sera-que-seu-ronco-e-sinal-de-apneia-do-sono/`;
  }
}, false );
</script>

<?php get_footer();