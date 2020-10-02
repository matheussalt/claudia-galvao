<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


<section class="home-blog">
  <div class="container">
    <?php if ( have_posts() ) : ?>
    <h2><?php printf( __( 'Resultados da busca por: %s', 'twentythirteen' ), get_search_query() ); ?></h2>

    <div class="blog-wrapper">

      <?php /* The loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content', get_post_format() ); ?>
      <?php endwhile; ?>
    </div>

    <!--Paginacao -->
    <div class="paginas">
      <?php if(function_exists('wp_paginate')) { wp_paginate(); }
        else { twentythirteen_paging_nav(); } ?>
    </div>
  </div>
</section>

<?php else : ?>
<section>
  <div class="container">
    <h2>Nada foi encontrado...</h2>
  </div>
</section>
<?php endif; ?>



<?php get_footer(); ?>