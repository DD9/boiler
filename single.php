<?php get_header(); ?>
      
<div class="container">  
  <div class="row">
		
     <?php get_sidebar(); ?>
    
    <div class="col-md-8">

      <?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?>

      <?php if (have_posts()) : while (have_posts()) : the_post(); $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );?>

        <?php get_template_part( 'partials/content'); ?>

      <?php endwhile; ?>

      <?php else : ?>

        <?php get_template_part( 'partials/content', 'none' ); ?>

      <?php endif; ?>

    </div><!-- /col -->   

 </div> <!-- /row -->
</div> <!-- /container -->
<?php get_footer(); ?>
