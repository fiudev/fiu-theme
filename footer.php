<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SCIS_Two
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'scis_two' ) ); ?>">
            <?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'scis_two' ), 'WordPress' );
				?>
        </a>
        <span class="sep"> | </span>
        <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'scis_two' ), 'scis_two', '<a href="https://cis.fiu.edu">FIU SCIS</a>' );
				?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">

/* Google Custom Search ID */
var gseID = "PUT_SITE_GSE_ID_HERE";
</script>
<script>
(function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&amp;l=' + l : '';
    j.async = true;
    j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-5GFMR34');
</script>

<script src="https://digicdn.fiu.edu/v1/_assets/js/jquery.min.js" type="text/javascript"></script>
<script src="https://digicdn.fiu.edu/v1/_assets/js/foundation.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://digicdn.fiu.edu/v1/_assets/js/core-scripts.js"></script>
</body>

</html>