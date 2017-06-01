<?php get_header(); ?>

<div id="page-header-outer" class="row-outer">
  <div class="container">
    <div class="row">

			<header class="entry-header">
				<?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?>

				<?php if (is_category()) { ?>
						<h6><?php _e( 'Posts Categorized:', 'bonestheme' ); ?></h6>
						<h1 class="entry-title"><?php single_cat_title(); ?></h1>

					<?php } elseif (is_tag()) { ?>
						<h6><?php _e( 'Posts Tagged:', 'bonestheme' ); ?></h6>
						<h1 class="entry-title"><?php single_tag_title(); ?>

					<?php } elseif (is_author()) {
						global $post;
						$author_id = $post->post_author;
					?>
						<h6><?php _e( 'Posts By:', 'bonestheme' ); ?></h6>
						<h1 class="entry-title"><?php the_author_meta('display_name', $author_id); ?></h1>

					<?php } elseif (is_day()) { ?>
						<h6><?php _e( 'Daily Archives:', 'bonestheme' ); ?></h6>
						<h1 class="entry-title"><?php the_time('l, F j, Y'); ?></h1>

					<?php } elseif (is_month()) { ?>
						<h6><?php _e( 'Monthly Archives:', 'bonestheme' ); ?></h6>
						<h1 class="entry-title"><?php the_time('F Y'); ?></h1>

					<?php } elseif (is_year()) { ?>
						<h6><?php _e( 'Yearly Archives:', 'bonestheme' ); ?></h6>
						<h1 class="entry-title"><?php the_time('Y'); ?></h1>

					<?php } else { ?>
					<?php } ?>
				
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
