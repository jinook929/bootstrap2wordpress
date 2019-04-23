<?php
 /*
    Template Name: Home Page
 */

get_header();
?>

<!-- HERO -->
<?php get_template_part('content', 'hero'); ?>

<!-- OPT IN SECTION -->
<?php #get_template_part('content', 'optin'); ?>

<!-- BOOST YOUR INCOME -->
<?php get_template_part('content', 'boost'); ?>

<!-- WHO BENEFITS -->
<?php #get_template_part('content', 'benefits'); ?>

<!-- COURSE FEATURES -->
<?php get_template_part('content', 'course'); ?>

<!-- PROJECT FEATURETTE -->
<?php get_template_part('content', 'project'); ?>

<!-- VIDEO FEATURETTE -->
<?php get_template_part('content', 'video'); ?>

<!-- INSTRUCTOR -->
<?php #get_template_part('content', 'instructor'); ?>

<!-- TESTIMONIAL -->
<?php #get_template_part('content', 'testimonials'); ?>

<?php
get_footer();
?>
