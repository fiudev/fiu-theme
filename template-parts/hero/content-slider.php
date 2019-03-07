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
    /* object-position: top; */
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

/* Slide Info */
.slide-info {
    position: absolute;
    z-index: 1;
    width: 60%;
    align-items: center;
    display: grid;
    justify-content: center;
    margin-top: 150px;
}

.slide-info h1 {
    color: white;
    background-color: rgba(8, 29, 63, 0.5);
    padding: 0 15px;
    width: 450px;
}

.slide-button button {
    color: #081D3F;
    background-color: #F8C93D;
    font-weight: 600;
    text-decoration: underline;
}


@media (max-width: 1024px) and (min-width: 641px) {

    .home-slide,
    .slick-hero,
    .home-slide .image img {
        height: 600px;
    }

    /* Slide Info */
    .slide-info {
        width: 80%;
    }

}

@media (max-width: 641px) {

    .home-slide,
    .slick-hero,
    .home-slide .image img {
        height: 450px;
    }

    /* Slide Info */

    #content {
        padding: 0px !important;
    }

    .slide-info {
        width: 100%;
    }

    .slide-info h1 {
        width: 300px;
    }
}
</style>

<div class="slick-hero">

    <div class="slide-info">
        <div class="slide-title">
            <h1>Senior Design Showcase Attracts Talent Recruiters</h1>
        </div>

        <div class="slide-button">
            <a href="#"><button>Read story</button></a>
        </div>

    </div>



    <div class="home-slide">
        <div class="image">
            <img
                src="https://cec.fiu.edu/wp-content/uploads/2018/11/ranu-jung-prosthetic-hand-system-fiu-computing-engineering-1600x1068.jpg">
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