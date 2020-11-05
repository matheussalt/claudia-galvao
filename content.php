<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<? if (is_single()) { ?>

<section class="blog">
  <div class="container">
    <?php 
    $category = get_the_category(); 
    $category_parent_id = $category[0]->category_parent;
    
    if ($category_parent_id == 1) { ?>
    <h2>Blog</h2>

    <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
    <?php } ?>

    <div class="blog-content">
      <h2 class="blog-title"><?=the_title()?></h2>

      <?=the_content()?>

      <div class="dra-card">
        <img src="<?=get_template_directory_URI()?>/img/src/dra_claudia.jpg" alt="Dra. Cláudia Galvão" />

        <div>
          <h3>Dra. Cláudia Galvão</h3>
          <h4>Medicina do Sono | Otorrinolaringologia </h4>

          <div class="dra-card-social">
            <a href="https://instagram.com/draclaudiagalvao/" target="_blank">
              <img src="<?=get_template_directory_URI()?>/img/src/insta.svg" />
            </a>

            <a href="https://www.facebook.com/Cl%C3%ADnica-do-Sono-Cl%C3%A1udia-Galv%C3%A3o-110478064063837"
              target="_blank">
              <img src="<?=get_template_directory_URI()?>/img/src/face.svg" />
            </a>
          </div>
        </div>
      </div>

      <div class="content-btn">
        <div class="content-btn-call">
          <p>Agendar Consulta</p>
          <a href="tel:3125527788" target="_blank" class="btn btn-blue">Ligar Agora</a>
        </div>

        <div class="content-btn-call">
          <p>Agendar Consulta</p>
          <a href="https://wa.me/+5531983668408" target="_blank" class="btn btn-green">Whatsapp</a>
        </div>
      </div>
    </div>
  </div>
</section>

<? } else { ?>

<a class="blog-card" href="<?=the_permalink()?>">
  <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
  <h3><?=the_title()?></h3>
  <p><?=custom_excerpt2(140)?></p>
</a>

<? } ?>