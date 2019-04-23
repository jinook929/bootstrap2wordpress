<?php
/* Template Name: Full-width Template */

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

get_header();
?>

<br>
<br>

<!-- CONTACT TITLE -->

<?php if (has_post_thumbnail()) { ?>

    <section class="feature-image feature-image-default" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </section>

<?php } else { ?>

    <section class="feature-image feature-image-default" data-type="background" data-speed="2">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </section>

<?php } ?>

<!-- MAIN CONTENT -->
<div class="container">
    <div class="row" id="primary">
        <div id="content" class="col-sm-12">
            <section class="main-content">
                
            <?php while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

            <?php endwhile; ?>

            </section>
            <!--main-content-->
        </div>
        <!--content-->
    </div>
    <!--row-->
</div>
<!--container-->

<!-- ENDING IMAGE -->
    <section id="signup" data-type="background" data-speed="4">
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </section>


</div>


<?php wp_footer(); ?>

    <!-- FOOTER -->
    <footer>
        <div id="footer-navbar" class="container">
            
            <div class="col-sm-12 col-md-3 footer-nav">
                <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/logo_.png" alt="Jinook Jung"></a></p>
            </div>
            
            <div class="col-sm-12 col-md-6 footer-nav">
                <?php
					wp_nav_menu( array(
						'theme_location'  => 'footer',
                        'container'       => 'nav',
                        'menu_class'      => 'list-unstyled list-inline'
					) );
                ?>
            </div>
            
            <div class="col-sm-12 col-md-3 footer-nav">
                <p class="pull-right"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?> <?php the_author_link(); ?></p>
            </div>
            
        </div>
    </footer>

    <!-- BOOTSTRAP CORE JAVASCRIPT -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
    <link rel="stylesheet" href="https://use.typekit.net/key6tlm.css">

</body>
</html>
