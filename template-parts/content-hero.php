<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SCIS_Two
 */

?>

<section class="slick-hero">
    <div class="home-slide slider slick slider">
        <div class="image">
            <img src="https://www.yu.edu/sites/default/files/ThinkstockPhotos-853673106.jpg">
        </div>
        <div class="image">
            <img src="https://cdn-images-1.medium.com/max/2600/0*_v8Ttc88-qaAyTf3">
        </div>
        <div class="image">
            <img src="https://static.kent.ac.uk/nexus/ems/50.jpg">
        </div>
    </div>
</section>




<script>
    jQuery(function($) {
        $('.home-slide').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });
    });
</script> 