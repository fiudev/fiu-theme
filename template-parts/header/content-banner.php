<!-- <?php scis_two_post_thumbnail(); ?> -->

<!-- Page Banner -->
<div class="short banner-container" role="banner" style="background:url(

        <?php  $image = get_field('content_banner_image'); ?>

        <?php if ($image) : ?>
            <?php echo $image['url']; ?>
        <?php else : ?>
            <?php echo 'https://case.fiu.edu/_assets/images/banners/CASE-About.jpg' ?>
        <?php endif;  ?>
    
)"> </div> <!-- Page Breadcrumbs -->
<article>
    <div class="breadcrumbs-wrapper">
        <div class="row" role="navigation">
            <div class="small-12 columns">
                <?php get_breadcrumb(); ?>
            </div>
        </div>
    </div>
</article>


<!-- Page Title -->
<article class="page-title">
    <div class="row">
        <div class="small-12 columns"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></div>
    </div>
</article>