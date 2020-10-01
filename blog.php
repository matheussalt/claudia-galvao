<?php
/**
 * Template Name: blog
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="home-blog">
  <div class="container">
    <h2>Blog</h2>

    <div class="blog-wrapper">
      <? query_posts( array( 'post_type' => 'post', 'posts_per_page' => '9', 'cat' => '1',  'paged' => $paged ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', get_post_format() ); ?>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!--Paginacao -->
<div class="paginas">
  <?php if(function_exists('wp_paginate')) { wp_paginate(); }
    else { twentythirteen_paging_nav(); } ?>
</div>

<?php get_footer();