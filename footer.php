<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>

</div>


<?php wp_footer(); ?>

    <!-- SIGN UP SECTION -->
    <section id="signup" data-type="background" data-speed="4">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <h2>Are you interested in coding and have any question I can help answer? Or, do you need <strong>someone to work with</strong>?</h2>
                    <p><a href="https://jncweb.net/wp-jinook/contact/" class="btn btn-lg btn-block btn-success">Contact Jinook!</a></p>
                </div>
            </div>
        </div>
    </section>

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
                <p id="copy-right" class="pull-right"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?> <?php the_author_link(); ?></p>
            </div>
            
        </div>
    </footer>


    <!-- MODAL -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="">&times;</span><span
                            class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fas fa-envelope"></i> Subscribe to our Mailing
                        List</h4>
                </div>
                <div class="modal-body">
                    <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of
                        our best-selling courses, <em>for free!</em></p>
                    <form role="form" class="form-inline">
                        <div class="form-group">
                            <label for="subscribe-name" class="sr-only">Your first name</label>
                            <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                        </div>
                        <div class="form-group">
                            <label for="subscribe-email" class="sr-only">and your email</label>
                            <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
                        </div>
                        <input type="submit" class="btn btn-danger" value="Subscribe!">
                    </form>
                    <hr>
                    <p><small>By providing your email you consent to receiving occasional promotional emails &amp;
                            newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe
                            at any time.</small></p>
                </div>
            </div>
        </div>
    </div>

    <!-- BOOTSTRAP CORE JAVASCRIPT -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
    <link rel="stylesheet" href="https://use.typekit.net/key6tlm.css">

</body>
</html>
