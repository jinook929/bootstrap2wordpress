<?php
// Custom Fields
$prelaunch_price     = get_post_meta(8, 'prelaunch_price', true);
$launch_price        = get_post_meta(8, 'launch_price', true);
$final_price         = get_post_meta(8, 'final_price', true);
$course_url          = get_post_meta(8, 'course_url', true);
$button_text         = get_post_meta(8, 'button_text', true);

// Advanced Custom Fields
$big_logo            = get_field('big_logo');
?>

<br>
<br>

<section id="hero" data-type="background" data-speed="3">
    <article>
        <div class="container clearfix">
            <div class="row">

                <!-- <div id="logo-badge" class="col-sm-5">
                    <img src="<?php #echo $big_logo['url'] ?>" alt="<?php #echo $big_logo['alt'] ?>" class="logo"> -->
                <!-- </div> -->
                <!-- <?php #bloginfo('stylesheet_directory') ?>/assets/img/logo-badge.png // alt="Bootstrap to WordPress" -->

                <div class="col-sm-12 hero-text">
                    <h1><?php bloginfo('name'); ?></h1>
                    <p class="lead"><?php bloginfo('description'); ?></p>
                    
                    <!-- <div id="price-timeline">
                        
                        <a href="https://jncweb.net/wp-jinook/life/the-happy-secret-to-better-work/">
                        <div class="price active">
                            
                            <h4>Have Fun! <small>Because coding really is fun</small></h4> -->
                            <!-- <span><?php #echo $prelaunch_price; ?></span> -->
                        <!-- </div>
                        </a>
                        
                        <a href="https://jncweb.net/wp-jinook/life/unsung-hero/">
                        <div class="price inactive">
                            <h4>Serve Others! <small>Because well-made apps help people</small></h4> -->
                            <!-- <span><?php #echo $launch_price; ?></span> -->
                        <!-- </div>
                        </a> -->
                        
                        <!-- <div class="price">
                            <h4>Final Price <small>Coming soon!</small></h4>
                            <span><?php echo $final_price; ?></span>
                        </div> -->
                        
                    <!-- </div> -->

                    <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" target="_blank" role="button"><?php echo $button_text; ?></a></p>

                </div>

            </div>
        </div>
    </article>
</section>