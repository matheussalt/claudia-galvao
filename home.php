<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<style>
.banner {
  background-image: url('<?=get_template_directory_URI()?>/img/src/banner.jpg');
}

@media screen and (min-width: 768px) {
  .banner {
    background-image: url('<?=get_template_directory_URI()?>/img/src/banner@2x.jpg');
  }
}
</style>

<section class="banner">
  <div class="container">
    <div class="banner-txt">
      <h1>Diagnóstico e tratamento dos distúrbios do sono</h1>
      <p>Você sabia que dormir bem reduz os riscos de desenvolver obesidade, hipertensão arterial e doenças cardíacas?
        Também contribui para uma maior produtividade no trabalho, para a redução dos níveis de estresse no dia a dia e
        oferece um estímulo maior ao raciocínio. Sono é qualidade de vida!</p>
      <a href="<?=site_url()?>">Saiba mais</a>
    </div>
  </div>
</section>

<?php get_footer();