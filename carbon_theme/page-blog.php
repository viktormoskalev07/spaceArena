<?php get_header(); ?> <?php 


/* Template Name: blog */

?>

<?php	 get_header('nav'); ?>
 <main  > 
 <section class="blog-page">
  <div class="container">

    <div class="blog-page__container">
		 <?php $posts = get_posts( array(
				'numberposts' => -1,
				'category'    => 0,   
				'post_type'   => 'post',
				'suppress_filters' => true,  
			) );

			foreach( $posts as $post ){
				setup_postdata($post);
			?> 
				 <a href="<?php echo the_permalink()?>" class="blog-page__item">
					<picture>
					<?php echo get_the_post_thumbnail( get_the_ID() , array(700,500)); ?> 
					</picture>

					<div class="blog-grid__caption">
					<h5> <?php echo the_title(); ?></h5>
					<time> <?php  echo date('F d, Y ')  ?> </time>
					</div>
				</a>
			<?php 
			}

			wp_reset_postdata();  
			?> 
 
    </div>
  </div>
</section> 
	 </div> 
	  </main>  


	  
<?php get_footer(); ?>