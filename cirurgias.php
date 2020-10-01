<?php
/**
 * Template Name: cirurgias
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="cirurgias">
  <div class="container">
    <h2>Cirurgias</h2>

    <div class="cirurgias-wrapper">
      <?php
        $args = array(
            'post_parent' => $post->ID,
            'post_type' => 'page',
            'orderby' => 'menu_order'
        );

        $child_query = new WP_Query( $args );
      ?>

      <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
      <a class="cirurgia-item" href="<?=the_permalink()?>">
        <div>
          <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
          <h2><?=the_title()?></h2>
        </div>
      </a>
      <?php endwhile; ?>
    </div>
  </div>
</section>

<?php get_footer();