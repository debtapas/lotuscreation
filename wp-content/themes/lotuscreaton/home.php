
<?php
	/**
	 * The Blog page Template
	 *
	 * This is the most generic template file in a WordPress theme
	 * and one of the two required files for a theme (the other being style.css).
	 * It is used to display a page when nothing more specific matches a query.
	 * E.g., it puts together the home page when no home.php file exists.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package lotus
	 */
	get_header();

?>

<!--== Blog Header Start ==-->
	<div class="transition-none">
		<section class="title-hero-bg parallax-effect" style="background-image: url(&quot;assets/images/title-bg/blog-head.jpg&quot;); transform: translateY(3.125px);">
	       <div class="container">
	         <div class="row">
	           <div class="col-md-12">
	             <div class="page-title text-center white-color">
	               <h1 class="font-700">Blog</h1>
	               <div class="breadcrumb mt-20">
	                   <!-- Breadcrumb Start -->
	                       <ul>
	                         <li><a href="https://lotuscreation.in/">Home</a></li>
	                         <li>Blog</li>
	                       </ul>
	                   <!-- Breadcrumb End -->
	               </div>
	             </div>
	           </div>
	         </div>
	       </div>
		</section>


	</div>
<!--== Blog Header Start ==-->


<!--== Blog Start ==-->
 <section class="white-bg">
   <div class="container">
      <div class="row blog-style-01">   
		    <?php if( have_posts() ) : while( have_posts() ): the_post(); ?>
		        <div class="col-md-4 col-sm-4 col-xs-12">
		          <div class="post">
		            <div class="post-img">
		              <a href="<?php the_permalink(); ?>">
			              	<?php  the_post_thumbnail('post-thumbnail',
				              		['class' => 'img-responsive',
				              		'title' => 'Feature image']); ?>
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
 <?php get_footer(); ?>