<?php
/**
 * Template Name: quiz
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<?php $shortcode = get_field('shortcode'); ?>

<section class="quiz">
  <div class="container">
    <? echo do_shortcode($shortcode); ?>
  </div>
</section>

<?php get_footer();