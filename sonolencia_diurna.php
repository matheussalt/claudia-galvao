<?php
/**
 * Template Name: sonolencia diurna
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="quiz">
  <div class="container">
    <? echo do_shortcode('[qsm quiz=1]'); ?>
  </div>
</section>

<?php get_footer();