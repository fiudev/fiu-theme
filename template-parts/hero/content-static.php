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
.static-hero {
    margin-bottom: 40px;
}

.static-slide {
    height: 700px;
    width: 100%;
    max-width: 100%;
    max-height: 100%;
}

.static-slide .image {
    height: inherit;
    width: inherit;
}

.static-hero .static-slide .image img {
    object-fit: cover;
    width: inherit;
    height: inherit;
    min-width: 100%;
    min-height: inherit;
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

    .static-slide {
        height: 600px;
    }

    /* Slide Info */
    .slide-info {
        width: 80%;
    }

}

@media (max-width: 641px) {

    .static-slide {
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

<div class="static-hero">

    <div class="slide-info">
        <div class="slide-title">
            <h1>
                UPE & WICS at Dolphins Stem Day</h1>
        </div>

        <div class="slide-button">
            <a href="#"><button>Read story</button></a>
        </div>

    </div>



    <div class="static-slide">
        <div class="image">
            <img src="https://www.cis.fiu.edu/wp-content/uploads/2018/11/XirMREcQEa2JMUuxt6DHA.jpg">
        </div>
    </div>
</div>