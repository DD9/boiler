<?php get_header(); the_post(); ?>

<div id="page-header-outer" class="row-outer">
  <div class="container">
    <div class="row">

			<header class="entry-header text-center">
				<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
			</header> 
        
    </div> <!-- /row -->
  </div> <!-- /container -->
</div> <!-- /page-header-outer -->

<div id="page-content-outer" class="row-outer">
	<div class="container">
		<div class="row">

			<div class="col-md-8">

				<?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<?php the_content(); ?>
				</article> 
			
			</div> <!-- /col -->

			<?php get_sidebar(); ?>

		</div> <!-- /row -->
	</div> <!-- /container -->
</div> <!-- /page-content-outer -->

<?php get_footer(); ?>
