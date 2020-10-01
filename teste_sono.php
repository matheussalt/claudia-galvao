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

<?php get_footer();