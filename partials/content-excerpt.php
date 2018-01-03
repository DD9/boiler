<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

  <header class="excerpt-header">
    <h3 class="excerpt-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
    <p class="byline vcard">
      by <span class="author"><em><?php echo bones_get_the_author_posts_link() ?></em></span> - 
      <time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time(get_option('date_format')) ?></time>
    </p>
  </header>
  
  <?php if ($image) { ?>
  <section class="excerpt-img excerpt-img-bg" style="background-image: url('<?php echo $image[0]; ?>')">
  </section>
  <?php } ?>

  <section class="excerpt-content clearfix">
    <?php the_excerpt('<span class="read-more">' . __("Read more on","bonestheme") . ' "'.the_title('', '', false).'" &raquo;</span>'); ?>
    <?php wp_link_pages(
      array(
        'before' => '<div class="page-link"><span>' . __( 'Pages:', 'brew' ) . '</span>',
        'after' => '</div>'
      ) 
    ); ?>
  </section>

  <footer class="excerpt-footer clearfix">
    <span class="tags pull-left"><?php printf( '<span class="">' . __( 'in %1$s&nbsp;&nbsp;', 'bonestheme' ) . '</span>', get_the_category_list(', ') ); ?> <?php the_tags( '<span class="tags-title">' . __( '<i class="fa fa-tags"></i>', 'bonestheme' ) . '</span> ', ', ', '' ); ?></span>
    <span class="commentnum pull-right"><a href="<?php comments_link(); ?>"><?php comments_number( '<i class="fa fa-comment"></i> 0', '<i class="fa fa-comment"></i> 1', '<i class="fa fa-comment"></i> %' ); ?></a></span>
  </footer> <?php // end excerpt footer ?>

  <?php // comments_template(); // uncomment if you want to use them ?>

</article>