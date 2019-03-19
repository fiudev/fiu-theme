<article>
    <div class="row">
        <div class="small-12 columns">
            <h2>
                <?php if (is_front_page()) : ?>
                    <?php echo get_theme_mod('home_title_sub_section') ?>
                <?php else : ?>
                    <?php echo 'My sub title' ?>
                <?php endif;  ?>
            </h2>
            <p>
                <?php if (is_front_page()) : ?>
                    <?php echo get_theme_mod('home_text_sub_section') ?>
                <?php else : ?>
                    <?php echo 'My sub content' ?>
                <?php endif;  ?>
            </p>
        </div>
    </div>
</article>