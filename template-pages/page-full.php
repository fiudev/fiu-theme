<?php
/**
 * Template Name: Full
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SCIS
 */

get_header();
?>

<!-- Banner -->
<?php get_template_part( 'template-parts/header/content', 'banner' ); ?>

<article>
    <div class="row">
        <main id="main-content">
		
            <!-- POST -->
            <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'content' );

			// get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
	?>

        </main><!-- #main -->

    </div>
</article>

<?php

// get_sidebar();
get_footer();