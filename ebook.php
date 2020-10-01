<?php
/**
 * Template Name: ebook
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="ebook">
  <div class="container">
    <h2>E-book</h2>

    <div class="ebook-wrapper">
      <img src="<?=get_template_directory_URI()?>/img/src/ebook.jpg"
        alt="E-book 15 hábitos importantes para uma boa noite de sono" />

      <div class="ebook-txt">
        <h3>GUIA COMPLETO PARA UMA BOA NOITE DE SONO</h3>
        <h4>15 HÁBITOS QUE VOCÊ PRECISA ADOTAR</h4>
        <div class="ebook-txt">
          <p>Deitar e dormir é um desafio para milhares de pessoas. Pensando nisso, elaborei esse material com 15
            hábitos
            importantes que você deve manter para conseguir boas noites de sono. Muitas vezes, bastam algumas mudanças
            na
            rotina para melhorar esse problema.
            Boa leitura!</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ebook-form">
  <div class="container">
    <? echo do_shortcode('[contact-form-7 id="73" title="E-book"]'); ?>
  </div>
</section>

<?php get_footer();