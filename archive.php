<?php get_header(); ?>

<div id="page-header-outer" class="row-outer">
  <div class="container">
    <div class="row">

			<header class="entry-header">
				<?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?>

				<h1 class="entry-title">
					<?php if (is_category()) { ?>
						<?php _e( 'Posts Categorized:', 'bonestheme' ); ?> <?php single_cat_title(); ?>

					<?php } elseif (is_tag()) { ?>
						<?php _e( 'Posts Tagged:', 'bonestheme' ); ?> <?php single_tag_title(); ?>

					<?php } elseif (is_author()) {
						global $post;
						$author_id = $post->post_author;
					?>
						<?php _e( 'Posts By:', 'bonestheme' ); ?> <?php the_author_meta('display_name', $author_id); ?>

					<?php } elseif (is_day()) { ?>
						<?php _e( 'Daily Archives:', 'bonestheme' ); ?> <?php the_time('l, F j, Y'); ?>

					<?php } elseif (is_month()) { ?>
						<?php _e( 'Monthly Archives:', 'bonestheme' ); ?> <?php the_time('F Y'); ?>

					<?php } elseif (is_year()) { ?>
						<?php _e( 'Yearly Archives:', 'bonestheme' ); ?> <?php the_time('Y'); ?>

					<?php } else { ?>
					<?php } ?>
				</h1>
			</header><!-- /entry-header -->
        
    </div> <!-- /row -->
  </div> <!-- /container -->
</div> <!-- /page-header-outer -->

<div id="page-content-outer" class="row-outer">
	<div class="container">
		<div class="row">

			<div class="col-md-8">

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
</div> <!-- /page-content-outer -->

<?php get_footer(); ?>
