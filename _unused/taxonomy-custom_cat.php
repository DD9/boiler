<?php
/*
This is the custom post type taxonomy template.
If you edit the custom taxonomy name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom taxonomy is called
register_taxonomy( 'shoes',
then your single template should be
taxonomy-shoes.php

*/
?>

<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div class="col-md-8">

      <h1><span><?php _e( 'Posts Categorized:', 'bonestheme' ); ?></span> <?php single_cat_title(); ?></h1>

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
