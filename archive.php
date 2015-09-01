<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="col-md-8">
      
			<?php if (is_category()) { ?>
        <h1 class="entry-title">
          <span><?php _e( 'Posts Categorized:', 'bonestheme' ); ?></span> <?php single_cat_title(); ?>
        </h1>

      <?php } elseif (is_tag()) { ?>
        <h1 class="entry-title">
          <span><?php _e( 'Posts Tagged:', 'bonestheme' ); ?></span> <?php single_tag_title(); ?>
        </h1>

      <?php } elseif (is_author()) {
        global $post;
        $author_id = $post->post_author;
      ?>
        <h1 class="entry-title">
          <span><?php _e( 'Posts By:', 'bonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>
        </h1>
      <?php } elseif (is_day()) { ?>
        <h1 class="entry-title">
          <span><?php _e( 'Daily Archives:', 'bonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?>
        </h1>

      <?php } elseif (is_month()) { ?>
        <h1 class="entry-title">
          <span><?php _e( 'Monthly Archives:', 'bonestheme' ); ?></span> <?php the_time('F Y'); ?>
        </h1>

      <?php } elseif (is_year()) { ?>
        <h1 class="entry-title">
          <span><?php _e( 'Yearly Archives:', 'bonestheme' ); ?></span> <?php the_time('Y'); ?>
        </h1>
      <?php } else { ?>

        <?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?>
      
      <?php } ?>

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
