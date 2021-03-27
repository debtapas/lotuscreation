<!--== Blog Start ==-->
  <?php
  $arg = array(
        'post_type'     =>  'post',
        'posts_per_page' =>  3,
        'order'         =>  'DSC'
      );
      $blogposts = new WP_Query($arg);
  ?>
  <section id="blog">
    <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="section-title text-center">
              <h2>Our Latest Blogs</h2>
            </div>
          </div>
        </div>

        <!--== Blog Start ==-->
    <div class="row blog-style-01">   
        <?php if( $blogposts->have_posts() ) : while( $blogposts->have_posts() ): $blogposts->the_post(); ?>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="post">
                <div class="post-img">
                  <a href="<?php the_permalink(); ?>">
                      <?php 
                        the_post_thumbnail('post-thumbnail',
                          ['class' => 'img-responsive',
                          'title' => 'Feature image']);
                      ?>
                    </a>
                  <div class="post-metas">
                    <div class="post-metas-center">                
                        <p class="post-date"><?php the_date();?></p>
                    </div>
                  </div>
                </div>
                  <div class="post-info all-padding-20">
                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    <p><?php echo wp_trim_words( get_the_content(), 24); ?></p>
                  </div>
              </div>
            </div> 
        <?php endwhile;
      endif;
      wp_reset_postdata();?>
      </div>
    </div>
  </section>
  <!--== Blog End ==-->