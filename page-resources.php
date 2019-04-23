<?php
/*
Template Name: Resources Page
*/

get_header();

$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

<br>
<br>

<!-- RESOURCES PAGE TITLE -->
<?php if (has_post_thumbnail()) { ?>

<section id="resources" class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
    <h1 class="page-title"><?php the_title(); ?></h1>
</section>

<?php } else { ?>

<section class="feature-image feature-image-default" data-type="background" data-speed="2">
    <h1 class="page-title"><?php the_title(); ?></h1>
</section>

<?php } ?>

<!-- PORTFOLIO -->
<br>
<section id="portfolio">
    
<div class="container">
    
    <div class="row">
        
        <div class="col-sm-12 intro">
            
            <p class="lead">Welcome and thank you for visiting Jinook’s website. On this page, I will introduce and explain about some of my works: websites and apps. I also want to recommend some useful tools - including familiar ones - I have used: languages, programs, libraries, frameworks, APIs, websites, and more. <strong>I hope that you would get helped for a little bit easier & happier coding.</strong></p>
            
        </div>
        
    </div>
    
    <div class="row">
        <div class="col-sm-12 first-container">
            
            <div class="col-sm-4 firstset">
            <a href="https://jncweb.net/wp-jinook/">
                <img src="http://jncweb.net/wp-jinook/wp-content/themes/bootstrap2wordpress/assets/img/wp-jinook.png">
                <h3>Build Great Things</h3>
            </a>
            <p>This homepage, <strong>Build Great Things</strong>, was made with <em>Bootstrap</em> and <em>WordPress</em>. Using plug-ins like <em>Advanced Custom Fields</em> & <em>Custom Post Type UI</em>, I have made it even easier to manage the pages through the WordPress dashboard. After the development stage was finished on the local server, it was deployed on the <em>BlueHost</em> web server with the <em>All-in-One WP Migration</em> plug-in.</p>
            </div>

            <div class="col-sm-4 firstset">
            <a href="https://jncweb.net/wp-jinook/wp-content/themes/bootstrap2wordpress/assets/etc/kittenbuddies/" target="_blank">
            <img src="http://jncweb.net/wp-jinook/wp-content/themes/bootstrap2wordpress/assets/img/kittenbuddies.png">
            <h3>KittenBuddies</h3>
            </a>
            <p>I created this simple app, <strong>KittenBuddies</strong>, using React.js. Users can check the search box to find the name of the cat they want to find. For the data resources, I got helps from sites like <em>JSON-Generator.com</em> and <em>RoboHash.org</em>. I used <em>Tachyons</em> for style, and we used two Google fonts, <em>Monoton</em> and <em>Righteous</em>.</p>
            </div>

            <div class="col-sm-4 firstset">
            <a href="https://shrouded-stream-77196.herokuapp.com/" target="_blank">
            <img src="http://jncweb.net/wp-jinook/wp-content/themes/bootstrap2wordpress/assets/img/yelpcamp.png">
            <h3>YelpCamp</h3>
            </a>
            <p><strong>YelpCamp</strong> is a website built with <em>Node.js</em> as framework and <em>MongoDB</em> as a database. As you might expect, <em>Express.js</em> was a great help. Database connection from <em>Node.js</em> and <em>MongoDB</em> was via <em>Mongoose</em>. I have created <em>RESTful routes</em> so that users may register, edit, and delete camp sites. NPM package <em>Passport.js</em> enabled them to sign-up, login, and logout. Visitors also can check the real location of each camp site thanks to the <em>Google Map API</em>'s help.</p>
            </div>

        </div><!--content-->
    </div><!--row-->
</div><!--container-->



<div class="container">
    <div class="row">
        <div class="col-sm-12 second-container">
            
            <div class="col-sm-4 secondset">
            <a href="https://jncweb.net/wp-jinook/wp-content/themes/bootstrap2wordpress/assets/etc/colorgame/" target="_blank">
            <img src="http://jncweb.net/wp-jinook/wp-content/themes/bootstrap2wordpress/assets/img/colorgame.png">
            <h3>Great RGB Color Game</h3>
            </a>
            <p>This color guessing game, <strong>Great RGB Color Game</strong>, is created on a simple <em>HTML</em> and <em>CSS</em>, plus, of course, vanilla <em>JavaScript</em>. It can be set for beginner, intermediate, and advanced levels, using the front-end developers' most basic tool, <em>DOM</em>. If you continue, you may be able to increase your sense of recognizing RGB color system. For the <em>jQuery</em> version, see the <a href="#footer-navbar">footer menu</a> below.</p>
            </div>

            <div class="col-sm-4 secondset">
            <a href="https://jncweb.net/wp-jinook/wp-content/themes/bootstrap2wordpress/assets/etc/joinus/" target="_blank">
            <img src="http://jncweb.net/wp-jinook/wp-content/themes/bootstrap2wordpress/assets/img/joinus.png">
            <h3>Join Us</h3>
            </a>
            <p>This interesting app, <strong>Join Us</strong> was originally made on <em>Node.js</em> (of course, with <em>Express.js</em>), storing data into <em>MySQL</em> via NPM package <em>Mysql</em>. However, to deploy on a <em>Shared Web Hosting</em> server(by <em>BlueHost</em>), I had to tweak it, using <em>PHP</em>, to store data to the server database. When a user enters a fake email, he/she can see the number on the screen increase, which means the email was safely stored to the database.</p>
            </div>

            <div class="col-sm-4 secondset">
            <a href="https://jncweb.net/wp-jinook/blog/">
            <img src="http://jncweb.net/wp-jinook/wp-content/themes/bootstrap2wordpress/assets/img/laptop.png">
            <h3>More Coming Up!!!</h3>
            </a>
            <p>I am still learning a lot. To be honest, I might not know much, but I am sure that this ignorance is not the ultimate obstacle to making great things. It is already quite a rewarding process now, but, if I keep enjoying this work of incredible creation with <em>passion</em> and <em>perseverance</em>, this will be a pleasant blast! I will continue to introduce <strong>my future works</strong> (sites & apps) and interesting topics <em>via this page or the <a href="https://jncweb.net/wp-jinook/blog/">blog page</a></em>.</p>
            </div>

        </div><!--content-->
    </div><!--row-->
</div><!--container-->

</section><!-- #portfolio -->


<br>

<hr class="style-two">

<br>

<!-- MAIN CONTENT -->


<div class="container resource-intro">
    <h1 style="text-align: center; font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;">Resources</h1>
    <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; wp_reset_query(); ?>
</div>

<div class="container">
    <div class="row"> <!-- id="primary" -->
        <div id="content" class="col-sm-12">
            <section class="resource-content"> <!-- class="main-content" -->

                <div class="resource-row clearfix">

                    <?php $loop = new WP_Query(array('post_type' => 'resource', 'orderby' => 'post_id', 'order' => 'ASC')); ?>

                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                    <?php
                    $resource_image = get_field('resource_image');
                    $resource_url   = get_field('resource_url');
                    $add_button     = get_field('add_button');
                    $button_text    = get_field('button_text');
                    ?>
                    
                    <div class="col-sm-4 resourceset">

                        <img src="<?php echo $resource_image[url]; ?>" alt="<?php echo $resource_image[alt]; ?>">

                        <h3 class="resource-desc"><?php the_title(); ?></h3>

                        <?php the_content(); ?>

                        <?php if (!empty($button_text)) : ?>
                        <!--<a href="<?php #echo $resource_url; ?>" class="btn btn-success"><?php #echo $button_text; ?></a>-->
                        <?php endif; ?>

                    </div><!-- .col-sm-4 .resourceset -->
                  
                    <?php endwhile;
                wp_reset_query(); ?>


                
                </div><!--resource-row-->
                
            </section><!--main-content-->
        </div><!--content-->
    </div><!--row-->
</div><!--container-->

<?php
get_footer();
?>