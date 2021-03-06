<?php

/**
 * about Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assign defaults.
$heading           = get_field('heading');
$top_heading       = get_field('top_heading');
$content           = get_field('content');
$read_more_text    = get_field('read_more_text');
$read_more_url     = get_field('read_more_url');
$image             = get_field('image');
$size              = 'full'; // (thumbnail, medium, large, full or custom size)
?>

<!--=== About Us Start ======-->
  <section class="lg-section dark-bg" id="about">
    <div class="col-md-6 col-sm-6 bg-flex bg-flex-left">
      <div class="bg-flex-holder bg-flex-cover" style="background-image: url(<?php echo $image['url'] ?>);"></div>
    </div>
    <div class="container-fluid">
      <div class="col-md-5 col-sm-6 col-md-offset-6 col-sm-offset-6 pl-80 pr-70">
        <div class="section-title">
          <h2 class="white-color"><?php echo $heading; ?></h2>
        </div>
        <p class="white-color"><?php echo $content ?></p>
        <p class="mt-30"><a class="btn btn-lg btn-color btn-circle" href="about.php"><?php echo $read_more_text;?></a></p>
      </div>
    </div>
  </section>
<!--=== About Us End ======-->

