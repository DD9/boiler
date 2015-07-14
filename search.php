<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="col-md-8">

      <h1 class="page-title"> <?php _e("Search Results for","bonestheme"); ?>: <?php echo esc_attr(get_search_query()); ?></h1>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <?php get_template_part( 'content' ); ?>

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
