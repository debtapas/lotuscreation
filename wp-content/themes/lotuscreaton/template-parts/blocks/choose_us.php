<section id="feature" class="white-bg">
  <div class="container-fluid">
    <div class="row tabs-style-03 section-title">
        <h2>Why Choose us?</h2>
        <div class="col-md-6 col-sm-push-6 col-xs-12">
          <img src="<?php echo get_theme_file_uri(). '/assets/images/why-choose.jpg';?>" alt="mockup" class="img-responsive"/>
          <div class="video-box_overlay">
            <div class="center-layout">
              <div class="v-align-middle">
               <!-- <a class="popup-youtube" href="https://www.youtube.com/watch?v=sU3FkzUKHXU">
                <div class="play-button"><i class="tr-icon ion-android-arrow-dropright"></i></div>
                </a> -->
              </div>
            </div>
          </div>
        </div> <!-- col-md-6 col-sm-6 col-xs-12 -->
        <div class="col-md-6 col-sm-pull-6 col-xs-12 transition-none">
          <div class="icon-tabs">
              <div class="row">
                <div class="col-md-10 col-md-offset-2">
                  <!--== Tab panes ==-->                  
                  <div class="panel-group accordion-style-01" id="accordion-style">
                    <?php
                      $arg = array(
                        'post_type'     =>  'choose',
                        'post_per_page' =>  15
                      );
                      $loop = new WP_Query($arg);
                    ?>
                      <?php if( $loop->have_posts() ) : while( $loop->have_posts() ) : $loop->the_post();?>
                        <div class="panel">
                        <div class="panel-heading"> <a data-toggle="collapse" data-parent="#accordion-style" href="#question<?php echo get_the_id();?>" aria-expanded="false" class="collapsed">
                          <div class="panel-title"><?php the_title();?><span class="pull-right"><i class="ion-android-add"></i></span> </div>
                          </a> </div>
                        <div id="question<?php echo get_the_id();?>" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                          <div class="panel-body"><?php the_content();?></div>
                        </div>
                      </div>
                      <?php endwhile; endif; wp_reset_postdata();?>   
                  </div>
                </div>

              </div>
            </div>
      </div>
    </div>
  </section>