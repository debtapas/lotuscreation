<!--== Process Start ==-->
  <section class="section-title">
    <div class="container">
      <h2>Our Expertise</h2>      
      <div class="row service-box-style-06 service-slider">
        <?php
          $arg = array(
            'post_type'     =>  'expertise',
            'posts_per_page' =>  6,
            'order'         =>  'ASC'
          );

          $expertise = new WP_Query($arg);
          if( $expertise->have_posts() ) : while( $expertise->have_posts() ) : $expertise->the_post();
        ?>
        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
          <div class="icon-img">
          <a href="events.php">
            <?php
            the_post_thumbnail(
              'post_thumnail', 
              ['class'  =>  'img-responsive', 'title'  =>  'Expertise Feature Image']);
            ?></a>
          </div>
          <h4 class="font-800"><?php the_title();?></h4>
          <p><?php echo wp_trim_words( get_the_content(), 10)?></p>
          <a href="services.php" class="btn btn-color btn-md remove-margin btn-circle">Read more</a>
        </div>
    <?php endwhile; endif; wp_reset_postdata();?>
    </div>
   </div>
  </section>
  <!--== Process End ==-->