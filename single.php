<?php
/**
 * The template for displaying all single posts.
 *
 * @package Wellington
 */

get_header(); ?>

	<section id="primary" class="content-single content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			do_action( 'wellington_after_posts' );

			wellington_related_posts();

			comments_template();

		endwhile; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
