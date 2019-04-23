<?php
// Advanced Custom Fields
$video_title                 = get_field('video_title');
$video_url                   = get_field('video_url');
?>

<!-- VIDEO FEATURETTE -->
<section id="featurette">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2><?php echo $video_title; ?></h2>
                <p><?php echo $video_url; ?></p>
            </div>
        </div>
    </div>

</section>