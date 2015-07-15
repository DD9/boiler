<?php get_header(); ?>

<div class="container">
  <div class="row">
  
    <div class="col-md-8">

      <?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
      <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
        
        <header class="page-head article-header">
          <h1 class="page-title entry-title" itemprop="headline"><?php the_title(); ?></h1>
        </header> <!-- end article header -->
      
        <section class="page-content entry-content clearfix" itemprop="articleBody">
          <?php the_content(); ?>
        </section> <!-- end article section -->
        
        <footer>
          <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ', ', '</p>'); ?>
        </footer> <!-- end article footer -->
      
      </article> <!-- end article -->
                  
      <?php endwhile; ?>    
      
      <?php else : ?>
      
        <?php get_template_part( 'content', 'none' ); ?>
      
      <?php endif; ?>
  
    </div> <!-- /col -->

    <?php get_sidebar(); ?>

  </div> <!-- /row -->
</div> <!-- /container -->

<?php get_footer(); ?>
