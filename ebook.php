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
    <h1>E-book</h1>

    <div class="ebook-wrapper">
      <img src="<?=get_template_directory_URI()?>/img/src/ebook.jpg"
        alt="E-book 15 hábitos importantes para uma boa noite de sono" />

      <div class="ebook-txt">
        <h2>E-book</h2>
        <p>Neste material, você irá conhecer 15 hábitos importantes para ter uma boa qualidade de sono. Faça o download
          gratuito e coloque em prática estas dicas o quanto antes!</p>
        <a href="<?=site_url()?>/ebook">Download</a>
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