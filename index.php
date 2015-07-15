<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="col-md-8">

      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      
        <?php get_template_part( 'content', 'excerpt' ); ?>

      <?php endwhile; ?>

        <?php get_template_part( 'pagination' ); ?>

      <?php else : ?>
        
        <?php get_template_part( 'content', 'none' ); ?>

      <?php endif; ?>

    </div><!-- /col -->

    <?php get_sidebar(); ?>


  </div><!-- /row -->
</div><!-- /container -->

<?php get_footer(); ?>
