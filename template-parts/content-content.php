<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'scis_two' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->