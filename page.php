<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
	
<?php endwhile; ?>



<?php get_footer(); ?>