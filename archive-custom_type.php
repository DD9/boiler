<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="col-md-8">

      <?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?>

      <h1 class="entry-title"><?php post_type_archive_title(); ?></h1>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <?php get_template_part( 'partials/content', 'excerpt' ); ?>

      <?php endwhile; ?>

        <?php get_template_part( 'partials/pagination' ); ?>

      <?php else : ?>
				
        <?php get_template_part( 'partials/content', 'none' ); ?>

      <?php endif; ?>

    </div><!-- /col -->

    <?php get_sidebar(); ?>

  </div><!-- /row -->
</div><!-- /container -->

<?php get_footer(); ?>
