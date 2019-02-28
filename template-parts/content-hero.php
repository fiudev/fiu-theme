<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SCIS_Two
 */

?>
<style>
.home-slide,
.slick-hero {
    height: 700px;
    width: 100%;
    max-width: 100%;
    max-height: 100%;
}

.slick-track,
.slick-list {
    height: inherit;
    width: inherit;
}


.home-slide .image img {
    object-fit: cover;
    object-position: top;
    width: inherit;
    height: inherit;
    min-width: 100%;
    min-height: inherit;
}

.slick-next {
    right: 35px;
    font-weight: 500;
    z-index: 1 !important;

}

.slick-prev {
    left: 35px;
    font-weight: 500;
    z-index: 1 !important;
}

.slick-next:before {
    content: ">";
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    font-size: 30px;
    padding: 5px 10px;
}

.slick-prev:before {
    content: "<";
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    font-size: 30px;
    padding: 5px 10px;
}
</style>

<div class="slick-hero">
    <div class="home-slide">
        <div class="image">
            <img src="https://www.cis.fiu.edu/wp-content/uploads/2017/05/gwc-scis-photo.jpg">
        </div>
        <div class="image">
            <img src="https://www.fiu.edu/_assets/images/academics-banner.jpg">
        </div>
        <div class="image">
            <img src="https://cec.fiu.edu/wp-content/uploads/2018/12/2018-fiu-senior-design-showcase-1600x1068.jpg">
        </div>
    </div>
</div>

<script>
jQuery(function($) {
    $('.home-slide').slick({
        autoplay: true,
        autoplaySpeed: 6000,
        focusOnSelect: true,
        dots: false,
        arrows: true,
        cssEase: 'linear',
        fade: true,
        adaptiveHeight: true,
        centerMode: true,
        infinite: true,
        speed: 300,
        slidesToScroll: 1,
    });
});
</script>