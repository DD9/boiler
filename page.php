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
        
        <article id="post-not-found">
            <header>
              <h1><?php _e("Not Found", "bonestheme"); ?></h1>
            </header>
            <section class="post_content">
              <p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
            </section>
            <footer>
            </footer>
        </article>
        
        <?php endif; ?>
    
      </div> <!-- /main.col -->

      <?php get_sidebar(); ?>
  
    </div> <!-- /content.row -->
  </div> <!-- /container -->

<?php get_footer(); ?>
