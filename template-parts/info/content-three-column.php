<div id="homepage">
    <article>
        <div class="row">
            <div class="small-12 medium-4 columns"><a href="academics/degrees-and-programs/index.html">
                    <div class="message" style="background:url(
                            <?php if (is_front_page()) : ?>
                                <?php 
                                    // Retrieve Kirki image or
                                    // Set default URL if no image is set
                                    $image = get_theme_mod('home_pop_image_one');  
                                    $defaultImageUrl = "https://i1.wp.com/www.cis.fiu.edu/wp-content/uploads/2016/07/cta-applying-now_v2.jpg"
                                ?>

                                <?php if ($image) : ?>
                                    <?php echo $image; ?>
                                <?php else : ?>
                                    <?php echo $defaultImageUrl ?>
                                <?php endif;  ?>
                            
                            <?php else : ?>
                                <?php echo 'https://i1.wp.com/www.cis.fiu.edu/wp-content/uploads/2016/07/cta-applying-now_v2.jpg' ?>
                            <?php endif;  ?>
                            )">
                        <div>

                            <span>
                                <?php if (is_front_page()) : ?>

                                <?php 
                                        // Retrieve Kirki Title or
                                        // Set default Text if no title is set
                                        $title = get_theme_mod('home_pop_text_one');  
                                        $defaultTitle = "Title 1"
                                    ?>

                                <?php if ($title) : ?>
                                <?php echo $title; ?>
                                <?php else : ?>
                                <?php echo $defaultTitle ?>
                                <?php endif;  ?>

                                <?php else : ?>
                                <?php echo 'My POP title 1' ?>
                                <?php endif;  ?>
                            </span>
                        </div>
                    </div>
                </a>
            </div>


            <div class="small-12 medium-4 columns"><a href="academics/advising/index.html">
                    <div class="message" style="background:url(
                            <?php if (is_front_page()) : ?>
                                <?php 
                                    // Retrieve Kirki image or
                                    // Set default URL if no image is set
                                    $image = get_theme_mod('home_pop_image_two');  
                                    $defaultImageUrl = "https://i1.wp.com/www.cis.fiu.edu/wp-content/uploads/2016/07/cta-applying-now_v2.jpg"
                                ?>

                                <?php if ($image) : ?>
                                    <?php echo $image; ?>
                                <?php else : ?>
                                    <?php echo $defaultImageUrl ?>
                                <?php endif;  ?>
                            
                            <?php else : ?>
                                <?php echo 'https://i1.wp.com/www.cis.fiu.edu/wp-content/uploads/2016/07/cta-applying-now_v2.jpg' ?>
                            <?php endif;  ?>
                            )">
                        <div><span>

                                <?php if (is_front_page()) : ?>
                                <?php 
                                        // Retrieve Kirki Title or
                                        // Set default Text if no title is set
                                        $title = get_theme_mod('home_pop_text_two');  
                                        $defaultTitle = "Title 2"
                                    ?>

                                <?php if ($title) : ?>
                                <?php echo $title; ?>
                                <?php else : ?>
                                <?php echo $defaultTitle ?>
                                <?php endif;  ?>

                                <?php else : ?>
                                <?php echo 'My POP title 2' ?>
                                <?php endif;  ?>
                            </span></div>
                    </div>
                </a></div>
            <div class="small-12 medium-4 columns"><a href="about/alumni/index.html">
                    <div class="message" style="background:url(
                            <?php if (is_front_page()) : ?>
                                <?php 
                                    // Retrieve Kirki image or
                                    // Set default URL if no image is set
                                    $image = get_theme_mod('home_pop_image_three');  
                                    $defaultImageUrl = "https://i1.wp.com/www.cis.fiu.edu/wp-content/uploads/2016/07/cta-applying-now_v2.jpg"
                                ?>

                                <?php if ($image) : ?>
                                    <?php echo $image; ?>
                                <?php else : ?>
                                    <?php echo $defaultImageUrl ?>
                                <?php endif;  ?>
                            
                            <?php else : ?>
                                <?php echo 'https://i1.wp.com/www.cis.fiu.edu/wp-content/uploads/2016/07/cta-applying-now_v2.jpg' ?>
                            <?php endif;  ?>
                            )">
                        <div><span>

                                <?php if (is_front_page()) : ?>
                                <?php 
                                    // Retrieve Kirki Title or
                                    // Set default Text if no title is set
                                    $title = get_theme_mod('home_pop_text_three');  
                                    $defaultTitle = "Title 3"
                                ?>

                                <?php if ($title) : ?>
                                <?php echo $title; ?>
                                <?php else : ?>
                                <?php echo $defaultTitle ?>
                                <?php endif;  ?>

                                <?php else : ?>
                                <?php echo 'My POP title 3' ?>
                                <?php endif;  ?>
                            </span></div>
                    </div>
                </a></div>
        </div>
    </article>
</div>