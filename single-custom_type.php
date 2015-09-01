<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>

<div class="container">  
  <div class="row">

    <div class="col-md-8">

      <?php if ( function_exists('custom_breadcrumb') ) { custom_breadcrumb(); } ?>

      <?php if (have_posts()) : while (have_posts()) : the_post(); $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );?>

        <?php get_template_part( 'partials/content'); ?>

      <?php endwhile; ?>

      <?php else : ?>

        <?php get_template_part( 'partials/content', 'none' ); ?>

      <?php endif; ?>

    </div><!-- /col -->

    <?php get_sidebar(); ?>

 </div> <!-- /row -->
</div> <!-- /container -->

<?php get_footer(); ?>
