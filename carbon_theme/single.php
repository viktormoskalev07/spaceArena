<?php get_header(); ?>
<?php	 get_header('nav'); ?>
<main>  
<div class="blog-article container">
<?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
	
 
  <section class="blog-article__hero">
    <figure>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Toronto" />
    </figure>
    <div class="blog-article__container blog-article__hero-title">
      <time> <?php  echo date('F d, Y ')  ?></time>
      <h1> <?php  echo the_title() ?></h1>
  </section>

  <section class="blog-article__container blog-article__content">

<?php the_content()?>


  </section>


 

<?php } } else { ?>
	
<?php } ?>
</div>
</main>

<?php get_footer(); ?>