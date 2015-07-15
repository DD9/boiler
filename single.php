<?php get_header(); ?>
      
<div class="container">  
  <div class="row">

    <div class="col-md-8" role="main">

      <?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?>

      <?php if (have_posts()) : while (have_posts()) : the_post(); $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

          <header class="article-header">
            <h1 class="single-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
            <p class="byline vcard">
              by <span class="author"><em><?php echo bones_get_the_author_posts_link() ?></em></span> - 
              <time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time(get_option('date_format')) ?></time>
              <span class="sticky-ind pull-right"><i class="fa fa-star"></i></span>
            </p>
          </header> <?php // end article header ?>

          <section class="featured-content featured-img featured-img-bg" style="background: url('<?php echo $image[0]; ?>')">
          </section>

          <section class="entry-content clearfix">
            <?php the_content(); ?>
            <?php wp_link_pages(
              array(
                'before' => '<div class="page-link"><span>' . __( 'Pages:', 'brew' ) . '</span>',
                'after' => '</div>'
              ) 
            ); ?>
          </section> <?php // end article section ?>

          <footer class="article-footer single-footer clearfix">
            <span class="tags pull-left"><?php printf( '<span class="">' . __( 'in %1$s&nbsp;&nbsp;', 'bonestheme' ) . '</span>', get_the_category_list(', ') ); ?> <?php the_tags( '<span class="tags-title">' . __( '<i class="fa fa-tags"></i>', 'bonestheme' ) . '</span> ', ', ', '' ); ?></span>
            <span class="commentnum pull-right"><a href="<?php comments_link(); ?>"><?php comments_number( '<i class="fa fa-comment"></i> 0', '<i class="fa fa-comment"></i> 1', '<i class="fa fa-comment"></i> %' ); ?></a></span>
          </footer> <?php // end article footer ?>


        </article> <?php // end article ?>

				<?php get_template_part( 'author-info' ); ?>
  
        <?php if ( is_single() ) {?>
          <div id="single-post-nav">
            <ul class="pager">
  
              <?php $trunc_limit = 30; ?>
  
              <?php if( '' != get_previous_post() ) { ?>
                <li class="previous">
                  <?php previous_post_link( '<span class="previous-page">%link</span>', __( '<i class="fa fa-caret-left"></i>', 'bones' ) . '&nbsp;' . brew_truncate_text( get_previous_post()->post_title, $trunc_limit ) ); ?>
                </li>
              <?php } // end if ?>
  
              <?php if( '' != get_next_post() ) { ?>
                <li class="next">
                  <?php next_post_link( '<span class="no-previous-page-link next-page">%link</span>', '&nbsp;' . brew_truncate_text( get_next_post()->post_title, $trunc_limit ) . '&nbsp;' . __( '<i class="fa fa-caret-right"></i>', 'bones' ) ); ?>
                </li>
              <?php } // end if ?>
  
            </ul>
          </div><!-- /#single-post-nav -->
        <?php } ?>
  
        <?php comments_template(); ?>

      <?php endwhile; ?>

      <?php else : ?>

        <?php get_template_part( 'content', 'none' ); ?>

      <?php endif; ?>

    </div><!-- /col -->

    <?php get_sidebar(); ?>

 </div> <!-- /row -->
</div> <!-- /container -->
<?php get_footer(); ?>
