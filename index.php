<?php get_header(); ?>

<div class="container">
  <div class="row">
  
  	<?php get_sidebar(); ?>

    <div class="col-md-8">

      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      
        <?php get_template_part( 'partials/content', 'excerpt' ); ?>

      <?php endwhile; ?>

        <?php get_template_part( 'partials/pagination' ); ?>

      <?php else : ?>
        
        <?php get_template_part( 'partials/content', 'none' ); ?>

      <?php endif; ?>

    </div><!-- /col -->

  </div><!-- /row -->
</div><!-- /container -->

<?php get_footer(); ?>
