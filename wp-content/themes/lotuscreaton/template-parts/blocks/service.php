  <!--== Process Start ==-->
    <section class="dark-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12 xs-mb-50 centerize-col">
          <div class="section-title text-center">
            <h2 class="white-color">Our Services</h2>
          </div>
        </div>
      </div>
      <div class="row our-process-style-01">
        <?php
          $arg = array(
            'post_type'       =>  'service',
            'post_per_page'   =>  3
          );
          $loop = new WP_Query($arg);
        
        if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-md-4 col-sm-4 col-xs-12 line sm-mb-30">
             <div class="text-center">
               <h3 class="mt-20 white-color font-700"><?php the_title();?></h3>
               <div class="mb-0 mt-20 white-color"><?php the_content();?></div>
             </div>
          </div>
        <?php endwhile; endif; wp_reset_postdata();?>

         <!-- <div class="col-md-4 col-sm-4 col-xs-12 line sm-mb-30">
           <div class="text-center">
             <h3 class="mt-20 white-color font-700">Activation</h3>
             <p class="mb-0 mt-20 white-color">Activities are a great way to gather a large group of audience and let them interact with one another. Over the years, brands feel the importance of activities in elevating their brand value.</p>
           </div>
         </div> -->
         <!-- <div class="col-md-4 col-sm-4 col-xs-12 line sm-mb-30">
           <div class="text-center">
             <h3 class="mt-20 white-color font-700">Exhibition</h3>
             <p class="mb-0 mt-20 white-color">With every exhibition, brands shine a little extra. We understand that and try to create exhibitions that help brands to communicate and network better.</p>
           </div>
         </div> -->
      </div>
    </div>
  </section>
    <!--== Process End ==-->