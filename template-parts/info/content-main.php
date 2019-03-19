<article class="page-title">
    <div class="row">
        <div class="small-12 columns">
            <h1>
                <?php if (is_front_page()) : ?>
                    <?php echo get_theme_mod('home_title_main_section'); ?>
                <?php else : ?>
                    <?php echo 'My Title' ?>
                <?php endif;  ?>
            </h1>
        </div>
    </div>
</article>
<article>
    <div class="row">
        <div class="small-12 columns">
            <p>
            <?php if (is_front_page()) : ?>
                <?php echo get_theme_mod('home_text_main_section') ?>
            <?php else : ?>
                <?php echo 'My Content' ?>
            <?php endif;  ?>
            </p>
        </div>
    </div>
</article>