<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="col-md-8 col-md-offset-2">
      
      <header class="entry-header text-center">
      	<h5><?php _e("Search Results for","bonestheme"); ?>: </h5>
        <h1 class="entry-title"> <?php echo esc_attr(get_search_query()); ?></h1>
      </header> 

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
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
